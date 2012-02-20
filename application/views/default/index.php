<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]--> 
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]--> 
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]--> 
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]--> 
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]--> 
  <head>
	<meta charset="utf-8">
	<title>Kohana-Bootstrap</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Kohana-Bootstrap">
	<meta name="author" content="GongNation">
	<!-- Styles --> 
	<link type="text/css" href="/media/plugin/jquery-ui/jquery-ui-1.8.17.custom.css" rel="stylesheet" />
	<link type="text/css" href="/media/plugin/bootstrap/css/bootstrap.css" rel="stylesheet">
	<!-- bootstrap-responsive.css 用于在多平台设备的自适应 
	<link type="text/css" href="/media/plugin/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
	-->
	<link type="text/css" href="/media/css/style.css" rel="stylesheet">
	<!-- icon -->
	<link type="image/x-icon" href="/media/images/favicon.ico" rel="shortcut icon" />
	<link href="/media/images/apple-touch-icon.png" rel="apple-touch-icon">
	<link href="/media/images/apple-touch-icon-72x72.png" sizes="72x72" rel="apple-touch-icon" >
	<link href="/media/images/apple-touch-icon-114x114.png" sizes="114x114" rel="apple-touch-icon" >
	<!--scripts-->
	<script type="text/javascript" src="/media/js/modernizr-2.5.2.custom.min.js"></script>
	<script>
		Modernizr.load([
			{
				load: 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js',
				complete: function () {
					if ( !window.jQuery ) {
						Modernizr.load('/media/js/jquery-1.7.1.min.js');
					}
				}
			},
			{
				load: [
					'/media/js/jquery-ui-1.8.17.custom.min.js',
					'/media/plugin/bootstrap/js/bootstrap.js',
					'/media/plugin/jquery-ui-date-range-picker/js/date.js',
					'/media/plugin/jquery-ui-date-range-picker/js/daterangepicker.jquery.js',
					'/media/plugin/jquery-ui-fileinput/js/enhance.min.js',
					'/media/plugin/jquery-ui-fileinput/js/fileinput.jquery.js',
					'/media/js/base.js'
				]
			}
		]);
	</script>
  </head>
  <body>
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="brand" href="#">Kohana-Bootstrap</a>
				<ul class="nav">
					<li class="active"><a href="#"><?php echo __('Home') ?></a></li>
					<li><a href="#"><?php echo __('About') ?></a></li>
					<li><a href="#"><?php echo __('Contact') ?></a></li>
				</ul>
				<ul class="nav pull-right">
					<li class="dropdown" id="fat-menu">
						<a data-toggle="dropdown" class="dropdown-toggle" href="#"><?php echo __('Set language') ?><b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo Kohana::$base_url.'?lang=zh' ?>" title="简体中文">简体中文</a></li>
							<li><a href="<?php echo Kohana::$base_url.'?lang=en' ?>" title="English">English</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="hero-unit welcome-page">
			<!-- Example row of columns -->
			<div class="row">
				<div class="span8">
					<div class="welcome-img">
						<h2>Hello World!</h2>
						<p><?php echo __('Welcome words') ?></p>
					</div>
				</div>
				<div class="span4 pull-right">
					<form methond="post" action="<?php echo Kohana::$base_url.Route::get('login')->uri() ?>" class="form-horizontal span3 form-actions form-login pull-right">
						<div class="control-group">
							<div class="input-prepend">
								<span class="add-on"><i class="icon-envelope"></i></span><input type="text" name="login" placeholder="<?php echo __('Username or Email')?>">
							</div>
						</div>
						<div class="control-group">
							<div class="input-prepend">
								<span class="add-on"><i class="icon-lock"></i></span><input type="password" name="password" placeholder="<?php echo __('Password')?>">
							</div>
						</div>
						<div class="control-group">
							<div class="pull-left">
								<label class="checkbox pull-left"><input type="checkbox" name="remember" value="1"><?php echo __('Remember me')?></label>&nbsp;·&nbsp;<a href="#"><?php echo __('Forget password')?></a>
							</div>
							<button type="submit" class="btn btn-primary pull-right"><?php echo __('Login')?></button>
						</div>
					</form>
					<form methond="post" action="" class="form-horizontal span3 form-actions form-register pull-right">
						<div class="control-group">
							<div class="input-prepend">
								<span class="add-on"><i class="icon-user"></i></span><input type="text" name="username" placeholder="<?php echo __('Username')?>">
							</div>
						</div>
						<div class="control-group">
							<div class="input-prepend">
								<span class="add-on"><i class="icon-envelope"></i></span><input type="text" name="email" placeholder="<?php echo __('Email')?>">
							</div>
						</div>
						<div class="control-group">
							<div class="input-prepend">
								<span class="add-on"><i class="icon-lock"></i></span><input type="password" name="password" placeholder="<?php echo __('Password')?>">
							</div>
						</div>
						<div class="control-group"><button type="submit" class="btn btn-success pull-right"><?php echo __('Sign up')?></button></div>
					</form>
				</div>
			</div>
		</div>

		<footer>
			<p>&copy; Kohana-Bootstrap 2012</p>
		</footer>
	</div><!-- /container -->

  </body>
</html>
