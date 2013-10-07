<?php

	if($_POST){
		$expected = array("appendedInputButton");
		$validation = array("Veuillez entrer un nom");
		
		$errors = array();
		$output = array();
		
		foreach( $expected as $key){
			if(array_key_exist($key, $_POST){
				if(empty($_POST[$key])){
					$error[$key] = $validation[$key];
				}else{
					$output[$key] = $_POST[$key];
				}
			}else{
				$error[$key] = $validation[$key];
			}
		}
		
		if(!empty($errors)){
			$array = array('error' => true, 'fields' => $errors);
		}else{
		
			//PROCESS FORM
			$message = "<h3>GoodJob</h3>";
			$array = array('error' => false, 'message' => $errors);
		}
		
		echo json_encode($array);
		
	}
?>