<?php
	require_once("../config.php");
	
	function verify(){
		if(!canFindServer()){
			echo "PAS DE SERV";
		}
	}
	
	function canFindServer(){
		if(file_exists(MC_DIR."craftbukkit.jar")){
			$result = TRUE;
		}else if(file_exists(MC_DIR."minecraft.exe")){
			$result = TRUE;
		}else{
			$result = false;
		}
		
		return $result;
	}
	
	function isBukkit(){
		if(file_exists(MC_DIR."craftbukkit.jar")){
			return true;
		}else{
			return false;
		}
	}

?>
