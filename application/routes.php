<?php

// Static file serving (CSS, JS, images)
Route::set('media', '(<type>/)media(/<file>)', array('type' => '(m|pad)', 'file' => '.+'))
	->defaults(array(
		'controller' => 'index',
		'action'     => 'media',
		'type'       => NULL,
		'file'       => NULL,
	));

Route::set('ui', 'ui')
	->defaults(array(
		'controller' => 'errors',
		'action'     => 'ui',
	));

Route::set('signup', 'signup')
	->defaults(array(
		'controller' => 'index',
		'action'     => 'signup',
	));

Route::set('login', 'login')
	->defaults(array(
		'controller' => 'index',
		'action'     => 'login',
	));

Route::set('logout', 'logout')
	->defaults(array(
		'controller' => 'index',
		'action'     => 'logout',
	));

Route::set('customer', '<username>')
	->defaults(array(
		'controller' => 'home',
		'action'     => 'index',
	));

Route::set('default', '(<index>/)(<controller>(/<action>))', array('index' => '(index.php|index.html)'))
	->defaults(array(
		'controller' => 'index',
		'action'     => 'index',
		'index'		 => NULL,
	));
/* Route::set('errors', '<path>', array('path' => '.+'))
	->defaults(array(
		'controller' => 'errors',
		'action'     => '404',
	)); */