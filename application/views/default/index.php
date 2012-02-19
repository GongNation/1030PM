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
					<li class="active"><a href="#">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
				<form action="" class="pull-right navbar-search">
					<input type="text" class="search-query">
				</form>
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
						<p>Welcome to the Kohana-Bootstrap. </p>
					</div>
				</div>
				<div class="span4 pull-right">
					<form methond="post" action="" class="form-horizontal span3 form-actions form-login pull-right">
						<div class="control-group"><input type="text" name="username" placeholder="用户名或邮箱"></div>
						<div class="control-group"><input type="password" name="password" placeholder="密码"></div>
						<div class="control-group">
							<div class="pull-left">
								<label class="checkbox pull-left"><input type="checkbox">记住我</label>&nbsp;·&nbsp;<a href="#">忘记密码?</a>
							</div>
							<button type="submit" class="btn btn-primary pull-right">登录</button>
						</div>
					</form>
					<form methond="post" action="" class="form-horizontal span3 form-actions form-register pull-right">
						<div class="control-group"><input type="text" name="username" placeholder="用户名"></div>
						<div class="control-group"><input type="text" name="mail" placeholder="邮箱"></div>
						<div class="control-group"><input type="password" name="password" placeholder="密码"></div>
						<div class="control-group"><button type="submit" class="btn btn-success pull-right">注册</button></div>
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
