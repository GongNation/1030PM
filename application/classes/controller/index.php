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

	public function before()
	{
		if (in_array($this->request->action(), array('media', 'ajax')))
		{
			// Do not template media files
			$this->auto_render = FALSE;
		}
		else
		{
			// Grab the necessary routes
			$this->media = Route::get('media');
			$this->index = Route::get('default');
		}

		// I18n
		$lang = $this->request->query('lang');
		Model_Secure::set_lang($lang);

		parent::before();
	}
	
	public function action_index()
	{
	}
	// Index
	public function action_index2()
	{
		$this->template->title = "index";

		$is_login = Model_Secure::is_login();
		if ($is_login)
		{
			$this->request->redirect($is_login);
		}
		else
		{
			$this->template->view = View::factory('default/login');
		}
	}

	// Login
	public function action_login()
	{
		$this->template->title = "login";
		if (count($this->request->post()) == 0)
		{
			$this->template->view = View::factory('default/login');
		}
		else
		{
			$username = $this->request->post('username');
			$password = $this->request->post('password');
			$login = Model_Secure::login($username, $password);
			if ($login)
			{
				$this->request->redirect($username);
			}
			else
			{
				$this->template->view = 'Login failed!'.$username.$password;
			}
			
		}
	}

	// Logout
	public function action_logout()
	{
		Session::instance()->delete('username');
		$this->request->redirect();
	}

	// Signup
	public function action_signup()
	{
		$this->template->title = "Signup";
		if (count($this->request->post()) == 0)
		{
			$this->template->view = View::factory('default/signup');
		}
		else
		{
			$username 	= $this->request->post('username');
			$password 	= $this->request->post('password');
			$mail 		= $this->request->post('mail');
			
			$ModelSecure = Model::factory('secure');
			$signup = $ModelSecure->signup($username, $password, $mail);
			if ( ! $signup)
			{
				// Unkown error
				$this->template->view = 'Signup failed! Unkown error!'.$username.$password.$mail;
			}
			else if (is_array($signup))
			{
				// The user was signed up already
				$this->template->view = 'Signup failed! '.$username.' was signed up already!';
			}
			else if (is_numeric($signup))
			{
				// Insert success
				$ModelSecure->login($username, $password);
				$this->template->title = "Home";
				$this->template->view = View::factory('default/home')
				->bind('username', $username);
			}
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

			// Add styles
			$this->template->styles = array(
				$media->uri(array('file' => 'css/form.css')) => 'screen',
				$media->uri(array('file' => 'css/default.css')) => 'screen',
			);

			// Add scripts
			$this->template->scripts = array(
				$media->uri(array('file' => 'js/html5.js')),
			);

			// Add icon
			$this->template->icon = $media->uri(array('file' => 'images/favicon.ico'));

			// Add languages
			//$this->template->translations = Kohana::message('userguide', 'translations');
		}

		return parent::after();
	}

} // End Userguide
