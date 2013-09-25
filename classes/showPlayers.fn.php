<?php
	require_once('../config.php');
	require_once('pageLoad.fn.php');

	function showOperators(){
		$file = fopen(MC_DIR."ops.txt",'r');
		$result = nl2br(fread($file, 200));
		//echo $result;
		$array[] = explode("\n", $result);
		
		$op_count = 0;
		if($result!=""){
			echo "<table class='table table-striped'>
					<thead>
						<tr>
							<th>#</th>
							<th>Utilisateur</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>";
			
			foreach(array_shift($array) as $user){
				$op_count +=1;
				echo "<tr><td>$op_count</td>";
				echo "<td>$user</td>";
				echo "<td><button type='button' class='btn btn-danger' disabled><i class='icon icon-white icon-ban-circle'></i> Enlever</button></td></tr>";
			}
			
			echo "</tbody></table>";
		}else{
			echo "<div class='alert alert-info'>
						Il n'y a presentement aucun opérateurs dans votre serveur.
					</div>	";
		}
	}	
	
	function showWhitelist(){
		if(file_exists(MC_DIR."white-list.txt")){
			$file = fopen(MC_DIR."white-list.txt",'r');
			$result = nl2br(fread($file, 200));
			//echo $result;
			$array[] = explode("\n", $result);
			
			$op_count = 0;
			if($result!=""){
				echo "<table class='table table-striped'>
						<thead>
							<tr>
								<th>#</th>
								<th>Utilisateur</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>";
				
				foreach(array_shift($array) as $user){
					$op_count +=1;
					echo "<tr><td>$op_count</td>";
					echo "<td>$user</td>";
					echo "<td><button type='button' class='btn btn-danger disabled'><i class='icon icon-white icon-ban-circle'></i> Enlever</button></td></tr>";
				}
				
				echo "</tbody></table>";
			}else{
				echo "<div class='alert alert-info'>
							Il n'y a presentement aucun utilisateur dans la whitelist dans votre serveur.
						</div>	";
			}
		}else{
			echo "<div class='alert alert-danger'>
					Le fichier white-list de votre est introuvable.
				</div>	";
		}
	}
	


?>