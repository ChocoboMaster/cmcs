<?php
	require_once("../../config.php");
	require_once("../classes/verificator.fn.php");
	
	
	if(isset($_GET['un'])){
		$username = $_GET['un'];
		$result['result'] = "";
		
		if(alphanum($username)){
			$file = MC_DIR."ops.txt";
			$content = file_put_contents($file, "\n".$username, FILE_APPEND);
			$count = countOps();
			$result['status'] = 'success';
			$result['result'] = "<tr><td>$count</td>
								<td>$username</td>
								<td><button type='button' class='btn btn-danger delOp' value='$username'><i class='icon icon-white icon-ban-circle'></i>
								Enlever</button></td></tr>";
		}else{
			$result['status'] = 'error';
			$result['result'] = "Le nom d'utilisateur est invalide";
		}
		
		echo json_encode($result);
	}else{
		header("location:../index.php");
	}
	
	function countOps(){
		$file = MC_DIR."ops.txt";
		$result = nl2br(file_get_contents($file));
		$array[] = explode("\n", $result);
		
		$op_count = 0;
		if($result!=""){			
			foreach(array_shift($array) as $user){
				if($user!=""){
					$op_count++;
				}
			}
		}
		return $op_count;
	}
?>