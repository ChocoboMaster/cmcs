<?php
	require_once("classes/pageLoad.fn.php");
?>
<!DOCTYPE HTML>
<html class="win chrome chrome28 webkit webkit5"><head>
	<title>
		Servers
	</title>

	<!-- Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">

	<!-- Meta -->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="description" content="">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">

	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>

<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<ul class="nav">
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">ChocoboMaster <b class="caret"></b></a>	<ul class="dropdown-menu">
							  <li><a href="#">Mon profil</a></li>
							  <li><a href="#">Messages priv&eacute;s</a></li>
							  <li class="divider"></li>
							  <li><a href="#">Deconnexion</a></li>
							</ul></li>
			</ul>

			<ul class="nav pull-right">
				<li><a><i class="icon-share-alt icon-white"></i> Deconnexion</a></li>
			</ul>
		</div>
    </div>
</div>

<div class="container" style="margin-top: 50px;">
	<?php
		showMenu(getPage());
		showBreadcrumbs(getPage());
	?>
		
	</div>
</div>



</html>