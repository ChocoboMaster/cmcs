<?php

//Code pour enlever quelqu'un de la Whitelist (based on delOperator.php);

	require_once("../../config.php");
	
	if(isset($_GET['un'])){
		$username = $_GET['un'];
		$file = MC_DIR."white-list.txt";
		$new = file_get_contents($file);
		$new = str_replace($username, "", $new);
		$content = file_put_contents($file, $new);
		echo json_encode($username);
	}else{
		header("location:../index.php");
	}

?>