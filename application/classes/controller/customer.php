<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Customer.
 *
 * @package    Kohana-Bootstrap/Customer
 * @category   Controllers
 * @author     GongNation
 */
class Controller_Customer extends Controller_Template {

	public $template = 'default/customer/home';

	// Routes
	protected $media;
	protected $home;
	protected $session;

	public function before()
	{
		if (in_array($this->request->action(), array('media', 'ajax')))
		{
			// media和ajax页面不需要页面模版
			$this->auto_render = FALSE;
		}
		else
		{
			// 获取必要的route
			$this->media = Route::get('media');
			$this->home = Route::get('default');
			
			// 判断用户是否已登录，如未登录则重定向到首页
			$username = Model_User::is_login();
			if (!$username)
			{
				$this->request->redirect();
			}
			$this->session = Session::instance();
		}

		parent::before();
	}

	// Index
	public function action_index()
	{
		$this->template->title = "Home Page";
		$username_get = $this->request->param('username');
		$this->template->username_get = $username_get;
		$this->template->username_session = $this->session->get('username');
	}

	// Logout
	public function action_logout()
	{
		Model_User::logout();
		$this->request->redirect();
	}

	// Archives
	public function action_archives()
	{
		$this->template->title = "archives";
	}

	// Demos
	public function action_demos()
	{
		$this->template->title = "demos";
	}

	// About
	public function action_about()
	{
		$this->template->title = "about";
	}

	public function action_media()
	{
		// Get the file path from the request
		$file = $this->request->param('file');

		// Find the file extension
		$ext = pathinfo($file, PATHINFO_EXTENSION);

		// Remove the extension from the filename
		$file = substr($file, 0, -(strlen($ext) + 1));

		if ($file = Kohana::find_file('media/', $file, $ext))
		{
			// Check if the browser sent an "if-none-match: <etag>" header, and tell if the file hasn't changed
			$this->response->check_cache(sha1($this->request->uri()).filemtime($file), $this->request);
			
			// Send the file content as the response
			$this->response->body(file_get_contents($file));

			// Set the proper headers to allow caching
			$this->response->headers('content-type',  File::mime_by_ext($ext));
			$this->response->headers('last-modified', date('r', filemtime($file)));
		}
		else
		{
			// Return a 404 status
			$this->response->status(404);
		}
	}
	
	public function after()
	{
		if ($this->auto_render)
		{
			// Get the media route
			$media = Route::get('media');

			// Add styles
			$this->template->styles = array(
			);

			// Add scripts
			$this->template->scripts = array(
			);

			// I18n
			$languages = Kohana::message('languages');
			$lang = $this->request->query('lang');
			if ($lang !== NULL)
			{
				// 若$lang不在定义的列表中，则返回404状态
				if (!array_key_exists($lang, $languages)) $this->response->status(404);
				
				// 在cookie中设置语言
				Model_User::set_lang($lang);
			}

			// Add languages
			$this->template->languages = $languages;
		}

		return parent::after();
	}

} // End
