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
	<link type="text/css" href="/media/css/base.css" rel="stylesheet">
	<!-- icon -->
	<link type="image/x-icon" href="/media/images/favicon.ico" rel="shortcut icon" />
	<link href="/media/images/apple-touch-icon.png" rel="apple-touch-icon">
	<link href="/media/images/apple-touch-icon-72x72.png" sizes="72x72" rel="apple-touch-icon" >
	<link href="/media/images/apple-touch-icon-114x114.png" sizes="114x114" rel="apple-touch-icon" >
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
					<form method="post" action="<?php echo Kohana::$base_url.Route::get('login')->uri() ?>" class="form-horizontal span3 form-actions form-login pull-right">
						<div class="control-group">
							<div class="input-prepend" id="login-input-login">
								<span class="add-on"><i class="icon-envelope"></i></span><input type="text" name="login" autocomplete="off" placeholder="<?php echo __('Username or Email')?>">
							</div>
						</div>
						<div class="control-group">
							<div class="input-prepend" id="login-input-password">
								<span class="add-on"><i class="icon-lock"></i></span><input type="password" name="password" autocomplete="off" placeholder="<?php echo __('Password')?>">
							</div>
						</div>
						<div class="control-group">
							<div class="pull-left">
								<label class="checkbox pull-left"><input type="checkbox" name="remember" value="1"><?php echo __('Remember me')?></label>&nbsp;·&nbsp;<a href="#"><?php echo __('Forget password')?></a>
							</div>
							<button type="submit" class="btn btn-primary pull-right"><?php echo __('Log in')?></button>
						</div>
					</form>
					<form method="post" action="<?php echo Kohana::$base_url.Route::get('signup')->uri() ?>" class="form-horizontal span3 form-actions form-signup pull-right">
						<div class="control-group">
							<div class="input-prepend" id="signup-input-username">
								<span class="add-on"><i class="icon-user"></i></span><input type="text" name="username" autocomplete="off" placeholder="<?php echo __('Username')?>">
							</div>
						</div>
						<div class="control-group">
							<div class="input-prepend" id="signup-input-email">
								<span class="add-on"><i class="icon-envelope"></i></span><input type="text" name="email" autocomplete="off" placeholder="<?php echo __('Email')?>">
							</div>
						</div>
						<div class="control-group">
							<div class="input-prepend" id="signup-input-password">
								<span class="add-on"><i class="icon-lock"></i></span><input type="password" name="password" autocomplete="off" placeholder="<?php echo __('Password')?>">
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
	
	<!--scripts-->
	<script type="text/javascript" src="/media/js/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="/media/js/jquery-ui-1.8.17.custom.min.js"></script>
	<script type="text/javascript" src="/media/plugin/bootstrap/js/bootstrap.js"></script>
	<?php foreach ($scripts as $script) echo HTML::script($script, NULL, NULL, TRUE), "\n" ?>
	<script type="text/javascript" src="/media/js/modernizr-2.5.2.custom.min.js"></script>
	<script>
		$(function(){
<?php
// 登录出错提示
if ($login_error !== FALSE) 
{
	switch ($login_error)
	{
		case 1:
			$login_error_id = "#login-input-login";
			$login_error_title =  __('Email dose not exists!');
			$login_error_input = ".form-login input[name='login']";
		break;
		
		case 2:
			$login_error_id = "#login-input-login";
			$login_error_title = __('Username dose not exists!');
			$login_error_input = ".form-login input[name='login']";
		break;
		
		case 3:
			$login_error_id = "#login-input-password";
			$login_error_title = __('Password is incorrect!');
			$login_error_input = ".form-login input[name='password']";
		break;
	}
?>
			$("<?php echo $login_error_id ?>").tooltip({
				placement: "left",
				title: "<?php echo $login_error_title ?>",
				trigger: 'manual',
			});
			$("<?php echo $login_error_id ?>").tooltip('show');
			$("<?php echo $login_error_input ?>").focus(function(){
				$("#<?php echo $login_error_id ?>").tooltip('hide');
			});
<?php
}
// 注册出错提示
if ($signup_error !== FALSE) 
{
	switch ($signup_error)
	{
		case -1:
?>
			$("#signup-input-username").tooltip({
				placement: "left",
				title: "<?php echo  __('Username has been registered!') ?>",
				trigger: 'manual',
			});
			$("#signup-input-username").tooltip('show');
			$(".form-signup input[name='username']").focus(function(){
				$("#signup-input-username").tooltip('hide');
			});
<?php
		break;
		
		case -2:
?>
			$("#signup-input-email").tooltip({
				placement: "left",
				title: "<?php echo  __('Email has been registered!') ?>",
				trigger: 'manual',
			});
			$("#signup-input-email").tooltip('show');
			$(".form-signup input[name='email']").focus(function(){
				$("#signup-input-email").tooltip('hide');
			});
<?php
		break;
		
		case -3:
?>
			$("#signup-input-username").tooltip({
				placement: "left",
				title: "<?php echo  __('Username has been registered!') ?>",
				trigger: 'manual',
			});
			$("#signup-input-username").tooltip('show');
			$(".form-signup input[name='username']").focus(function(){
				$("#signup-input-username").tooltip('hide');
			});
			
			$("#signup-input-email").tooltip({
				placement: "left",
				title: "<?php echo  __('Email has been registered!') ?>",
				trigger: 'manual',
			});
			$("#signup-input-email").tooltip('show');
			$(".form-signup input[name='email']").focus(function(){
				$("#signup-input-email").tooltip('hide');
			});
<?php
		break;
	}
}
?>
		});
	</script>
  </body>
</html>
