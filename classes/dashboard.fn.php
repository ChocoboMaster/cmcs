<?php
	function folderSize($path){
	  if(!file_exists($path)) return 0;
	  if(is_file($path)) return filesize($path);
	  $ret = 0;
	  foreach(glob($path."/*") as $fn)
		$ret += folderSize($fn);
	  return $ret;
	}

	function formatBytes($filesize){
		if ($filesize<1048676)
			RETURN number_format($filesize/1024,1) . " KB";
		if ($filesize>=1048576 && $filesize<1073741824)
			RETURN number_format($filesize/1048576,1) . " MB";
		if ($filesize>=1073741824 && $filesize<1099511627776)
			RETURN number_format($filesize/1073741824,2) . " GB";
		if ($filesize>=1099511627776)
			RETURN number_format($filesize/1099511627776,2) . " TB";
	}
	
	function showProgressBars(){
		
		//Temp values
		$players_active = 7;
		$players_allowed = 10;
		$disk_used = formatBytes(folderSize(MC_DIR));
		$disk_allowed = 100;
		$mem_used = 475;
		$mem_allowed = 512;
		echo "<div class='widget'>";
		echo "<div class='dashboard'>
				<div class='dashboardbars'>
					<strong>Nombre de joueurs<br/>
						"; echo $players_active; echo " / "; echo $players_allowed; echo " Joueurs</strong>
					<div class='progress '>
						<div class='progress-bar "; echo getProgressBarColors($players_active, $players_allowed); echo "' style='width: "; echo getProgressBarPercentage($players_active, $players_allowed); echo "%;'></div>
					</div>
				</div>

				<div class='dashboardbars'>
					<strong>Utilisation disque<br/>
						"; echo $disk_used; echo " / "; echo $disk_allowed; echo " MB</strong>
					<div class='progress'>		
						<div class='progress-bar "; echo getProgressBarColors($disk_used, $disk_allowed); echo "' style='width: "; echo getProgressBarPercentage($disk_used, $disk_allowed); echo "%;'></div>
					</div>
				</div>

				<div class='dashboardbars'>
					<strong>Memoire utlisee<br/>
						"; echo $mem_used; echo " MB / "; echo $mem_allowed; echo " MB</strong>
					<div class='progress'>
						<div class='progress-bar "; echo getProgressBarColors($mem_used, $mem_allowed); echo "' style='width:"; echo getProgressBarPercentage($mem_used, $mem_allowed); echo "%;'></div>
					</div>
				</div>
			</div>";
			
			if(getProgressBarPercentage($players_active, $players_allowed)>70){
				echo "<div class='alert alert-waning'>
						Attention, vous avez beaucoup de joueurs connectes. Pensez a ajouter des slots!
					</div>";
			}
			
			if(getProgressBarPercentage($disk_used, $disk_allowed)>70){
				echo "<div class='alert alert-warning'>
						Attention, il ne vous reste plus beaucoup d'espace disque!
					</div>";
			}
			
			if(getProgressBarPercentage($mem_used, $mem_allowed)>70){
				echo "<div class='alert alert-warning'>
						Attention, vous utilisez beaucoup de memoire vive. Pensez a en rajouter a votre serveur!
					</div>";
			}
			
			echo "</div>";
	}
	
	function getProgressBarPercentage($m, $a){
		$p = ($m/$a)*100;
		return $p;
	}
	
	function getProgressBarColors($m, $a){
		$p = getProgressBarPercentage($m, $a);
		
		if($p<70){
			return "progress-bar-info";
		}else if($p <85){
			return "progress-bar-warning";
		}else{
			return "progress-bar-danger";
		}
	}

	function showUsefulLinks(){
		echo "<div class='widget'>
			<h4>Liens Utiles</h4>
			<a class='btn btn-default w50' href='joueurs.php'><i class='glyphicon glyphicon-user'></i><br/>Joueurs</a>
			<a class='btn btn-default w50' href='plugins.php'><i class='glyphicon glyphicon-th'></i><br/>Plugins</a>
			<a class='btn btn-default w50' href='backup.php'><i class='glyphicon glyphicon-hdd'></i><br/>Backups</a>
			<a class='btn btn-default w50' href='ftp.php'><i class='glyphicon glyphicon-folder-open'></i><br/>FTP</a>
			<a class='btn btn-default w50' href='settings.php'><i class='glyphicon glyphicon-cog'></i><br/> Propri&eacute;t&eacute;es</a>
			<a class='btn btn-danger w50'><i class='glyphicon glyphicon-off glyphicon-white'></i><br/>Arr&ecirc;ter</a>
			<a class='btn btn-warning w50'><i class='glyphicon glyphicon-repeat glyphicon-white'></i><br/>Red&eacute;marrer</a>
			</div>";
	}
	
?>