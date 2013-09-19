<?php
	function getPage(){
		$file = $_SERVER['SCRIPT_NAME'];
		$break = Explode('/', $file);
		$pfile = $break[count($break) - 1]; 
		
		return $pfile;
	}
	
	function showBreadcrumbs($p){
	
	}
	
	function showMenu($p){
		echo "<div class='widget span2' style='padding: 8px 0;'>
		<ul class='nav nav-list'><li ";
			if($p = "index.php"){echo "class='active'>";};
			echo "<a href='index.php'>Accueil</a></li>
			<li><a href='#'>Console</a></li>
			<li><a href='joueurs.php'>Joueurs</a></li>
			<li><a href='#'>Plugins</a></li>
			<li><a href='#'>Backup</a></li>
			<li><a href='#'>Acces FTP</a></li>
			<li><a href='#'>Prorrietes</a></li>
			<li><a href='#'>Reinitialisation</a></li>
		</ul>
		</div>";
	}

?>