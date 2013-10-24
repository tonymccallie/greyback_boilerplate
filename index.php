<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Greyback Boilerplate</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

<?php
	$develop = true;
	if($develop):
?>
	<link rel="stylesheet/less" type="text/css" href="/css/styles.less" />
	<script type="text/javascript">
		less = {
			env: "development", // or "production"
			poll: 1000,         // when in watch mode, time in ms between polls - add '#!watch' to url to enable or less.watch(); in console
			dumpLineNumbers: "mediaQuery", // or "mediaQuery" or "all"
		};
	</script>
	<script src="/js/less-1.5.0.min.js"></script>
<?php else: ?>
	<link rel="stylesheet" type="text/css" href="/css/styles.min.css" />
<?php endif ?>
	
	
	<script src="/js/jquery-1.10.2.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/custom.js"></script>

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
	<![endif]-->
	
	<!-- Fav and touch icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="/ico/apple-touch-icon-57-precomposed.png">
	<link rel="shortcut icon" href="/ico/favicon.png">
	
	<!-- Google Analytics -->
	<!-- /Google Analytics -->
</head>

<body>
	<div id="header" class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container-fluid">
				<!-- Mobile Menu Button -->
				<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- /Mobile Menu Button -->

				<a class="brand" href="#">Project name</a>

				<div class="nav-collapse collapse pull-right">
					<ul class="nav">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#about">About</a></li>
						<li><a href="#contact">Contact</a></li>
						<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li class="divider"></li>
							<li class="nav-header">Nav header</li>
							<li><a href="#">Separated link</a></li>
							<li><a href="#">One more separated link</a></li>
						</ul>
					</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span12" id="banner">
			<img src="http://placehold.it/1200x300">
		</div>
	</div>

	<div class="container">
		<div class="row-fluid">
			<div class="span8">
				<h1>Page Title</h1>
				<div class="scaleVid ratio16x9">VIDEO HTML HERE</div>
			</div>
			<div class="span4">
				<img src="http://placehold.it/350x150">
				<h4>Navigation</h4>
			</div>
		</div>
	</div>

	<div id="footer">
		<div class="container">
			<div class="row-fluid">
				<div class="span12">
					<h4>Footer</h4>
				</div>
			</div>
		</div>
	</div>
</body>
</html>