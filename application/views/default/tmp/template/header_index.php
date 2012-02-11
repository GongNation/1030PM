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
			<a href="<?php echo Kohana::$base_url.Route::get('default')->uri() ?>" title="In Way I" rel="nofollow"><? echo __('In Way I')?></a>
		</nav><!-- .nav -->
	</section><!-- #header -->
  </header><!-- #head -->