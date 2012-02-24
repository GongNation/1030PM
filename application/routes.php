<?php

// 静态文件 (CSS, JS, images)
Route::set('media', 'media(/<file>)', array('file' => '.+'))
	->defaults(array(
		'controller'	=> 'index',
		'action'		=> 'media',
		'file'			=> NULL,
	));

// 用户注册
Route::set('signup', 'signup')
	->defaults(array(
		'controller'	=> 'index',
		'action'		=> 'signup',
	));

// 用户登录
Route::set('login', 'login')
	->defaults(array(
		'controller'	=> 'index',
		'action'		=> 'login',
	));
	
// 用户退出
Route::set('logout', 'logout')
	->defaults(array(
		'controller'	=> 'customer',
		'action'		=> 'logout',
	));

// 用户的个人主页
Route::set('home', '<username>')
	->defaults(array(
		'controller'	=> 'customer',
		'action'		=> 'index',
	));

// 用户个人设置
Route::set('settings', 'settings/<action>', array('action' => '(account|system|theme)'))
	->defaults(array(
		'controller'	=> 'customer',
		'action'		=> NULL,
	));

// 默认
Route::set('default', '(<index>/)(<controller>(/<action>))', array('index' => '(index.php|index.html)'))
	->defaults(array(
		'controller'	=> 'index',
		'action'		=> 'index',
		'index'			=> NULL,
	));

// 404错误页面
Route::set('error', '<path>', array('path' => '.+'))
	->defaults(array(
		'controller'	=> 'error',
		'action'		=> '404',
	));
