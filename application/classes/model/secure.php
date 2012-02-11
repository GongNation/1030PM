<?php defined('SYSPATH') or die('No direct script access.');
class Model_Secure extends Model_Database {

/**
* Get user
*
*/
	static function get_user ($user_info, $is_id = TRUE)
 	{
		if ($is_id)
		{
			$user_id = $user_info;
			$query = DB::query(Database::SELECT, 'SELECT * FROM user WHERE id=:id ');
			$query->param(':id', $user_id);
		}
		else
		{
			$username = $user_info;
			$query = DB::query(Database::SELECT, 'SELECT * FROM user WHERE username=:username');
			$query->param(':username', $username);
		}
		$result = $query->execute();
		if ($result->count() == 1)
		{
			// Select success
			return $result->as_array();
		}
		else
		{
			// The user is not in db
			return FALSE;
		}
	}

/**
* User singup
*
*/
	static function signup ($username, $password, $mail)
 	{
		$user = $this->get_user($username, FALSE);
		if (!$user)
		{
			$password = md5($password);
			$query = DB::query(Database::INSERT, 'INSERT INTO user (username, password, mail) VALUES (:username, :password, :mail)')
				->bind(':username', $username)
				->bind(':password', $password)
				->bind(':mail', $mail);
			list($insert_id, $affected_rows) = $query->execute();
			if ($affected_rows == 1)
			{
				// Insert success, the retuen value is a number
				return $insert_id;
			}
			else
			{
				// Unkown error, the return value is boolean
				return FALSE;
			}
		}
		else
		{
			// The user was signed up already, the return value is a array
			return $user;
		}
	}

/**
* User login
*
*/
	static function login ($username, $password)
 	{
		$query = DB::query(Database::SELECT, 'SELECT * FROM user WHERE username=:user AND password=:pass');
		$query->parameters(array(
			':user' => $username,
			':pass' => md5($password),
		));
		
		$result = $query->execute();
		if (count($result) == 1)
		{
			Session::instance()->set('username', $username);

			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

/**
* User is_login
*
*/
	static function is_login ($username = null)
 	{
		$session_username = Session::instance()->get('username');
		if ($username === NULL AND $session_username !== NULL)
		{
			return $session_username;
		}
		else if ( $username !== NULL AND $username == $session_username)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

/**
* Set language in cookie
*
*/
	static function set_lang ($lang)
 	{
		$lang_cookie = Cookie::get('lang');
		if ($lang === NULL AND $lang_cookie !== NULL)
		{
			I18n::lang($lang_cookie);
		}
		elseif ($lang !== NULL)
		{
			Cookie::set('lang', $lang);
			I18n::lang($lang);
		}
	}
	
/**
* Set theme in cookie
*
*/
	static function set_theme ($theme)
 	{
		$theme_cookie = Cookie::get('theme');
		if ($theme === NULL AND $theme_cookie === NULL)
		{
			Cookie::set('theme', 'default');
		}
		elseif ($theme !== NULL AND $theme_cookie === NULL)
		{
			Cookie::set('theme', $theme);
		}
		elseif ($theme === NULL AND $theme_cookie !== NULL)
		{
			Cookie::set('theme', $theme);
		}
		elseif ($theme !== NULL AND $theme_cookie !== NULL)
		{
			Cookie::set('theme', $theme);
		}
	}
}