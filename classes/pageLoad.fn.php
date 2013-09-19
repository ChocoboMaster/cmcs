<?php
	function getPage(){
		$file = $_SERVER['SCRIPT_NAME'];
		$break = Explode('/', $file);
		$pfile = $break[count($break) - 1]; 
		
		return $pfile;
	}
	
	function showBreadcrumbs($p){
	echo "<div class='span9'>";
		echo "<ul class='breadcrumb'>";
		echo "<li><a href='index.php'>Dashboard</a> <span class='divider'>/</span></li>";
		
		echo $p == "index.php" ? "<li><a href='#'>Accueil</a></li>": "";
		echo $p == "console.php" ? "<li><a href='#'>Console</a></li>": "";
		echo $p == "joueurs.php" ? "<li><a href='#'>Joueurs</a></li>": "";
		echo $p == "plugins.php" ? "<li><a href='#'>Plugins</a></li>": "";
		echo $p == "backup.php" ? "<li><a href='#'>Backup</a></li>": "";
		echo $p == "ftp.php" ? "<li><a href='#'>FTP</a></li>": "";
		echo $p == "proprietes.php" ? "<li><a href='#'>Proprietes</a></li>": "";
		echo $p == "reinitialisation.php" ? "<li><a href='#'>Reinitialisation</a></li>": "";
		
		echo "</ul>";
	}
	
	function showMenu($p){
		echo "<div class='widget span2' style='padding: 8px 0;'>";
		echo "<ul class='nav nav-list'>";
		echo "<li"; if($p=="index.php"){echo " class='active'";} echo "><a href='index.php'>Accueil</a></li>";
		echo "<li"; if($p=="console.php"){echo " class='active'";} echo "><a href='#'>Console</a></li>";
		echo "<li"; if($p=="joueurs.php"){echo " class='active'";} echo "><a href='joueurs.php'>Joueurs</a></li>";
		echo "<li"; if($p=="plugins.php"){echo " class='active'";} echo "><a href='#'>Plugins</a></li>";
		echo "<li"; if($p=="backup.php"){echo " class='active'";} echo "><a href='#'>Backup</a></li>";
		echo "<li"; if($p=="ftp.php"){echo " class='active'";} echo "><a href='#'>Acces FTP</a></li>";
		echo "<li"; if($p=="proprietes.php"){echo " class='active'";} echo "><a href='#'>Prorprietes</a></li>";
		echo "<li"; if($p=="reinitialisation.php"){echo " class='active'";} echo "><a href='#'>Reinitialisation</a></li>";
		echo "</ul>";
		echo "</div>";
		
	}
?>