<?php
	function getPage(){
		$file = $_SERVER['SCRIPT_NAME'];
		$break = Explode('/', $file);
		$pfile = $break[count($break) - 1]; 
		
		return $pfile;
	}
	
	function showBreadcrumbs($p){
	echo "<div class='col-md-9'>";
		echo "<ul class='breadcrumb'>";
		echo "<li><a href='index.php'>Dashboard</a> <span class='divider'></span></li>";
		
		echo $p == "index.php" ? "<li><a href='#'>Accueil</a></li>": "";
		echo $p == "console.php" ? "<li><a href='#'>Console</a></li>": "";
		echo $p == "joueurs.php" ? "<li><a href='#'>Joueurs</a></li>": "";
		echo $p == "plugins.php" ? "<li><a href='#'>Plugins</a></li>": "";
		echo $p == "backup.php" ? "<li><a href='#'>Backup</a></li>": "";
		echo $p == "ftp.php" ? "<li><a href='#'>FTP</a></li>": "";
		echo $p == "settings.php" ? "<li><a href='#'>Proprietes</a></li>": "";
		echo $p == "reinit.php" ? "<li><a href='#'>Reinitialisation</a></li>": "";
		
		echo "</ul>";
	}
	
	function showMenu($p){
		echo "<div class='widget col-md-2' style='padding: 8px 0;'>";
		echo "<ul class='nav nav-list'>";
		echo "<li"; if($p=="index.php"){echo " class='active'";} echo "><a href='index.php'><i class='glyphicon glyphicon-home'></i> Accueil</a></li>";
		echo "<li"; if($p=="console.php"){echo " class='active'";} echo "><a href='console.php'><i class='glyphicon glyphicon-tasks'></i> Console</a></li>";
		echo "<li"; if($p=="joueurs.php"){echo " class='active'";} echo "><a href='joueurs.php'><i class='glyphicon glyphicon-user'></i> Joueurs</a></li>";
		echo "<li"; if($p=="plugins.php"){echo " class='active'";} echo "><a href='plugins.php'><i class='glyphicon glyphicon-th'></i> Plugins</a></li>";
		echo "<li"; if($p=="backup.php"){echo " class='active'";} echo "><a href='backup.php'><i class='glyphicon glyphicon-hdd'></i> Backup</a></li>";
		echo "<li"; if($p=="ftp.php"){echo " class='active'";} echo "><a href='ftp.php'><i class='glyphicon glyphicon-folder-open'></i> Acces FTP</a></li>";
		echo "<li"; if($p=="settings.php"){echo " class='active'";} echo "><a href='settings.php'><i class='glyphicon glyphicon-cog'></i> Prorprietes</a></li>";
		echo "<li"; if($p=="reinit.php"){echo " class='active'";} echo "><a href='reinit.php'><i class='glyphicon glyphicon-trash'></i> Reinitialisation</a></li>";
		echo "</ul>";
		echo "</div>";
		
	}
	
	function showTopNav(){
		echo "<nav class='navbar navbar-inverse navbar-fixed-top' role='navigation'>
			<div class='navbar-inner'>
				<div class='container'>
					<ul class='nav navbar-nav'>
						<li class='dropdown'>
							<a href='#' class='dropdown-toggle' data-toggle='dropdown'>ChocoboMaster <b class='caret'></b></a>
								<ul class='dropdown-menu'>
								  <li><a href='#'>Mon profil</a></li>
								  <li><a href='#'>Messages priv&eacute;s</a></li>
								  <li class='divider'></li>
								  <li><a href='#'>Deconnexion</a></li>
								</ul></li>
					</ul>

					<ul class='nav navbar-nav navbar-right'>
						<li><a href='#'><i class='glyphicon glyphicon-share-alt glyphicon-white'></i> Deconnexion</a></li>
					</ul>
				</div>
			</div>
		</nav>";
	}
	
	function showHead(){
		echo "<!DOCTYPE HTML>
			<html class='win chrome chrome28 webkit webkit5'><head>
				<title>
					Servers
				</title>

				<!-- Favglyphicon -->
				<link rel='shortcut glyphicon' href='img/favglyphicon.ico'>

				<!-- Meta -->
				<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
				<meta name='description' content=''>

				<!-- Stylesheets -->
				<link rel='stylesheet' href='css/bootstrap.css'>
				<link rel='stylesheet' href='css/bootstrap.theme.css'>
				<link rel='stylesheet' href='css/style.css'>

			</head>
			<body>";

	}
	
	function loadJS(){
		echo "<script type='text/javascript' src='http://platform.twitter.com/widgets.js'></script>
				<script src='//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
				<script type='text/javascript' src='js/bootstrap.js'></script>
				<script type='text/javascript' src='js/forms.js'></script>";
	}
	
	function escape_data($data){
		$data = mysql_real_escape_string($data);
		$data = trim(htmlentities(strip_tags($data)));
		
		if (get_magic_quotes_gpc())
			$data = stripslashes($data);
		
		$data = mysql_real_escape_string($data);
		return $data;

	}
?>