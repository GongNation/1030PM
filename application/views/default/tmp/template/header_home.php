<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title><?php echo $title ?></title>
  <meta name="generator" content="kohana" />
  <meta name="author" content="GongNation" />
  <meta name="description" content="kohana" />
  <?php foreach ($styles as $style => $media) echo HTML::style($style, array('media' => $media), NULL, TRUE), "\n" ?>
  <?php foreach ($scripts as $script) echo HTML::script($script, NULL, NULL, TRUE), "\n" ?>
  <link rel="shortcut icon" href="<?php echo Kohana::$base_url.$icon?>" type="image/x-icon" />
</head>
<body>
  <header id="head">
	<section id="header">
		<nav class="nav">
			<a href="<?php echo Kohana::$base_url.Route::get('customer')->uri(array('username' => $username)) ?>" title="Home" rel="nofollow"><? echo __('Home')?></a>
			<a href="<?php echo Kohana::$base_url.Route::get('default')->uri(array('action' => 'archives', 'controller' => 'home')) ?>" rel="bookmark" title="Archives"><? echo __('Archives')?></a>
			<a href="<?php echo Kohana::$base_url.Route::get('default')->uri(array('action' => 'demos', 'controller' => 'home')) ?>" rel="bookmark" title="Demos"><? echo __('Demos')?></a>
			<a href="<?php echo Kohana::$base_url.Route::get('default')->uri(array('action' => 'about', 'controller' => 'home')) ?>" rel="bookmark" title="About"><? echo __('About')?></a>
			<a href="<?php echo Kohana::$base_url.Route::get('logout')->uri() ?>" rel="bookmark" title="Logout"><? echo __('Logout')?></a>
		</nav><!-- .nav -->
	</section><!-- #header -->
  </header><!-- #head -->
