
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
	<div class="widget span2" style="padding: 8px 0;">
		<ul class="nav nav-list">
			<li><a href="index.php">Accueil</a></li>
			<li><a href="#">Console</a></li>
			<li class="active"><a href="joueurs.php">Joueurs</a></li>
			<li><a href="#">Plugins</a></li>
			<li><a href="#">Backup</a></li>
			<li><a href="#">Acces FTP</a></li>
			<li><a href="#">Prorrietes</a></li>
			<li><a href="#">Reinitialisation</a></li>
		</ul>
	</div>
	
	<div class="span9">
		<ul class="breadcrumb">
			<li><a href="index.php">Dashboard</a> <span class="divider">/</span></li>
			<li><a href="#">Joueurs</a></li>
		</ul>
		
		<div class="widget">
			<ul class="nav nav-pills">
				<li class="active"><a href="#tab1" data-toggle="tab">Joueurs Actifs</a></li>
				<li><a href="#tab2" data-toggle="tab">Whitelist</a></li>
				<li><a href="#tab3" data-toggle="tab">Operateurs</a></li>
			</ul>
			
			<div class="tab-content">
				<div class="tab-pane active" id="tab1">
					Actifs
				</div>
				
				<div class="tab-pane" id="tab2">
					Whitelist
				</div>
				
				<div class="tab-pane" id="tab3">
					Op
				</div>
			</div>
		</div>
	</div>
</div>



</html>