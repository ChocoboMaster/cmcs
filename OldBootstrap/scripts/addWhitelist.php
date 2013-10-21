<?php

//Code pour ajouter quelqu'un a la Whitelist (based on addOperator.php);

	require_once("../../config.php");
	
	if(isset($_GET['un'])){
		$username = $_GET['un'];
		$file = MC_DIR."white-list.txt";
		$content = file_put_contents($file, "\n".$username, FILE_APPEND);
		$count = countWL();
		echo json_encode("<tr><td>$count</td>
							<td>$username</td>
							<td><button type='button' class='btn btn-danger delWL' value='$username'><i class='icon icon-white icon-ban-circle'></i>
							Enlever</button></td></tr>");
	}else{
		header("location:../index.php");
	}
	
	function countWL(){
		$file = MC_DIR."white-list.txt";
		$result = nl2br(file_get_contents($file));
		$array[] = explode("\n", $result);
		
		$wl_count = 0;
		if($result!=""){			
			foreach(array_shift($array) as $user){
				if($user!=""){
					$wl_count++;
				}
			}
		}
		return $wl_count;
	}

?>