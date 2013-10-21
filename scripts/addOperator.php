<?php
	
	if(isset($_GET['un'])){
		echo json_encode($_GET['un']);
	}else{
		header("location:../index.php");
	}
?>