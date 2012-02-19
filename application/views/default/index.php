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
		<!-- Main hero unit for a primary marketing message or call to action -->
		<div class="hero-unit">
			<h1>Hello, world!</h1>
			<p>This is a project with kohana and bootstrap.</p>
			<p><a class="btn btn-primary btn-large">Learn more &raquo;</a></p>
		</div>

		<!-- Example row of columns -->
		<div class="row">
			<div class="span5">
				<h2>Heading</h2>
				<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
				<p><a class="btn" href="#">View details &raquo;</a></p>
			</div>
			<div class="span4">
				<h2>Heading</h2>
				<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
				<p><a class="btn" href="#">View details &raquo;</a></p>
			</div>
		</div>

		<hr>

		<footer>
			<p>&copy; Kohana-Bootstrap 2012</p>
		</footer>
	</div><!-- /container -->

  </body>
</html>
