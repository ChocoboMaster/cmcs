<?php
	require_once('../config.php');
	require_once('pageLoad.fn.php');
	
	function showOperators(){
		$file = MC_DIR."ops.txt";
		$result = file_get_contents($file);
		$array[] = explode("\n", $result);
		
		$op_count = 0;
		if($result!=""){
			echo "<table class='table table-striped addOperatorTable'>
					<thead>
						<tr>
							<th>#</th>
							<th>Utilisateur</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>";
			foreach(array_shift($array) as $user){
				if(strlen($user)>1){
					$op_count++;
					echo "<tr><td>$op_count</td>
							<td>$user</td>
							<td><button type='button' class='btn btn-danger delOp' value='$user'><i class='glyphicon glyphicon-white glyphicon-ban-circle'></i>
							Enlever</button></td></tr>";
				}
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
			$file = MC_DIR."white-list.txt";
			$result = file_get_contents($file);
			$array[] = explode("\n", $result);
			
			$op_count = 0;
			if($result!=""){
				echo "<table class='table table-striped addWhitelistTable'>
						<thead>
							<tr>
								<th>#</th>
								<th>Utilisateur</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>";
				
				foreach(array_shift($array) as $user){
					if(strlen($user)>1){
						$op_count +=1;
						echo "<tr><td>$op_count</td>";
						echo "<td>$user</td>";
						echo "<td><button type='button' class='btn btn-danger delWL' value='$user'><i class='glyphicon glyphicon-white glyphicon-ban-circle'></i> Enlever</button></td></tr>";
					}
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