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
		
		echo "<div class='dashboard'>
				<div class='dashboardbars'>
					<strong>Nombre de joueurs<br/>
						"; echo $players_active; echo " / "; echo $players_allowed; echo " Joueurs</strong>
					<div class='progress "; echo getProgressBarColors($players_active, $players_allowed); echo "'>
						<div class='bar' style='width: "; echo getProgressBarPercentage($players_active, $players_allowed); echo "%;'></div>
					</div>
				</div>

				<div class='dashboardbars'>
					<strong>Utilisation disque<br/>
						"; echo $disk_used; echo " / "; echo $disk_allowed; echo " MB</strong>
					<div class='progress "; echo getProgressBarColors($disk_used, $disk_allowed); echo "'>		
						<div class='bar' style='width: "; echo getProgressBarPercentage($disk_used, $disk_allowed); echo "%;'></div>
					</div>
				</div>

				<div class='dashboardbars'>
					<strong>Memoire utlisee<br/>
						"; echo $mem_used; echo " MB / "; echo $mem_allowed; echo " MB</strong>
					<div class='progress "; echo getProgressBarColors($mem_used, $mem_allowed); echo "'>
						<div class='bar' style='width:"; echo getProgressBarPercentage($mem_used, $mem_allowed); echo "%;'></div>
					</div>
				</div>
			</div>";
			
			if(getProgressBarPercentage($players_active, $players_allowed)>70){
				echo "<div class='alert alert-info'>
						Attention, vous avez beaucoup de joueurs connectes. Pensez a ajouter des slots!
					</div>";
			}
			
			if(getProgressBarPercentage($disk_used, $disk_allowed)>70){
				echo "<div class='alert alert-info'>
						Attention, il ne vous reste plus beaucoup d'espace disque!
					</div>";
			}
			
			if(getProgressBarPercentage($mem_used, $mem_allowed)>70){
				echo "<div class='alert alert-info'>
						Attention, vous utilisez beaucoup de memoire vive. Pensez a en rajouter a votre serveur!
					</div>";
			}
	}
	
	function getProgressBarPercentage($m, $a){
		$p = ($m/$a)*100;
		return $p;
	}
	
	function getProgressBarColors($m, $a){
		$p = getProgressBarPercentage($m, $a);
		
		if($p<70){
			return "progress-info";
		}else if($p <85){
			return "progress-warning";
		}else{
			return "progress-danger";
		}
	}

?>