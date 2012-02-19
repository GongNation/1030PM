<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]--> 
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]--> 
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]--> 
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]--> 
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]--> 
  <head>
	<meta charset="utf-8">
	<title>头像槌击</title>
	<meta name="description" content="html+css+js game">
	<meta name="author" content="GongNation">
	<!-- Styles --> 
	<link type="text/css" href="/media/css/custom-theme/jquery-ui-1.8.16.custom.css" rel="stylesheet" />
	<link href="/media/bootstrap/bootstrap.css" rel="stylesheet">
	<link href="/media/css/demo.css" rel="stylesheet">
	<link rel="shortcut icon" href="/media/images/favicon.ico" type="image/x-icon" />
	<style type="text/css">
		/* Override some defaults */
		html, body {
			background-color: #eee;
		}
		body {
			padding-top: 40px; /* 40px to make the container go all the way to the bottom of the topbar */
		}
		a:focus {
			outline: 0px;
		}
		.container > footer p {
			text-align: center; /* center align it with the container */
		}
		.container {
			width: 620px; /* downsize our container to make the content feel a bit tighter and more cohesive. NOTE: this removes two full columns from the grid, meaning you only go to 14 columns and not 16. */
		}
		.row {
			width:760px;
		}
		.row > [class*="span"] {
			margin-left: 0px;
		}
		.mod_app {
			border: 1px solid #eeeeee;
		}
		/* The white background content wrapper */
		.container > .content {
			background-color: #fff;
			padding: 20px;
			margin: 0 -20px; /* negative indent the amount of the padding to maintain the grid system */
			-webkit-border-radius: 0 0 6px 6px;
			-moz-border-radius: 0 0 6px 6px;
			border-radius: 0 0 6px 6px;
			-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.15);
			-moz-box-shadow: 0 1px 2px rgba(0,0,0,.15);
			box-shadow: 0 1px 2px rgba(0,0,0,.15);
		}

		/* Page header tweaks */
		.page-header {
			background-color: #f5f5f5;
			padding: 20px 20px 10px;
			margin: -20px -20px 20px;
		}

		/* Styles you shouldn't keep as they are for displaying this base example only */
		.content .span10,
		.content .span4 {
			min-height: 500px;
		}
		/* Give a quick and non-cross-browser friendly divider */
		.content .span4 {
			margin-left: 0;
			//padding-left: 19px;
			border-left: 1px solid #eee;
		}
		.topbar .btn {
			border: 0;
		}
	</style>
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
					'/media/js/jquery-ui-1.8.16.custom.min.js',
					'/media/js/jquery.daterangepicker.js',
					'/media/js/jquery.wijmo-open.1.5.0.min.js',
					'/media/js/jQuery-Custom-File-Input.js',
					'/media/js/demo.js'
				]
			}
		]);
	</script>
  </head>
  <body>
	<!--[if IE]>
	<link rel="stylesheet" type="text/css" href="css/custom-theme/jquery.ui.1.8.16.ie.css"/>
	<![endif]-->

	<div class="topbar">
		<div class="fill">
			<div class="container">
				<a class="brand" href="/">Hammer Avatar</a>
				<ul class="nav">
					<li class="active"><a href="/">首页</a></li>
					<li><a href="#">服务</a></li>
					<li><a href="#">联系我们</a></li>
				</ul>
				<form action="" class="pull-right">
				</form>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="content">
			<div class="page-header">
				<h1>头像槌击 <small>表面上看他是一款游戏，其实他是一个xxx</small></h1>
			</div>
			<div class="row">
				<!--left col-->
				<div class="span10">
					<!--welcome-->
					<div class="mod_app">
						abc
					</div>
					<!--end welcome-->
				</div>
				<!--end col-->
				<!--right col-->
				<div class="span4">
					侧边栏
				</div>
				<!--end col-->
			</div>
		</div>

		<footer>
			<p>Hammer Avatar &copy; Gong Nation 2012.</p>
		</footer>
	</div> <!-- /container -->

	<!--static dialog-->
	<div id="dialog-message" title="对话框">
		<p>
			<span class="ui-icon ui-icon-circle-check" style="float:left; margin:0 7px 50px 0;"></span>
			Your files have downloaded successfully into the My Downloads folder.
		</p>
		<p>
			Currently using <b>36% of your storage space</b>.
		</p>
	</div>
	<!--end static dialog-->
  </body>
</html>
