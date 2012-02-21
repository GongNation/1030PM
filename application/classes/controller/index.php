<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Kohana user guide and api browser.
 *
 * @package    Kohana/Userguide
 * @category   Controllers
 * @author     Kohana Team
 */
class Controller_Index extends Controller_Template {

	public $template = 'default/index';

	// Routes
	protected $media;
	protected $index;
	public $login_error = FALSE;
	public $signup_error = FALSE;

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
			$this->index = Route::get('default');
		}
		
		// 是否已登录
		$username = Model_User::is_login();
		if ($username)
		{
			$this->request->redirect($username);
		}
		
		// I18n
		$lang = $this->request->query('lang');
		Model_Secure::set_lang($lang);

		parent::before();
	}
	
	// Index
	public function action_index()
	{
		$this->template->title = "Kohana-Bootstrap";

		$this->template->login_error = $this->login_error;
		$this->template->signup_error = $this->signup_error;
	}

	// Login
	public function action_login()
	{
		if (count($this->request->post()) == 0)
		{
			$this->request->redirect();
		}
		else
		{
			$login = $this->request->post('login');
			$password = $this->request->post('password');
			$login = Model_User::login($login, $password);
			if (!in_array($login, array(1, 2, 3)))
			{
				$this->request->redirect($login);
			}
			$this->login_error = $login;
			$this->action_index();
		}
	}

	// Logout
	public function action_logout()
	{
		Model_User::logout();
		$this->request->redirect();
	}

	// Signup
	public function action_signup()
	{
		if (count($this->request->post()) == 0)
		{
			$this->request->redirect();
		}
		else
		{
			$username 	= $this->request->post('username');
			$password 	= $this->request->post('password');
			$email 		= $this->request->post('email');
			
			$signup = Model_User::signup($username, $password, $email);
			if ($signup === FALSE)
			{
				// 注册失败
				$this->request->redirect();
			}
			else if ($signup > 0)
			{
				// 注册成功
				$session = Session::instance();
				$session->set('username', $username);
				$session->set('id', $signup);
				$this->request->redirect($username);
			}
			$this->signup_error = $signup;
			$this->action_index();
		}
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

			// Add scripts
			$this->template->scripts = array(
				$media->uri(array('file' => 'js/index.js')),
			);

		}

		return parent::after();
	}

} // End Userguide
