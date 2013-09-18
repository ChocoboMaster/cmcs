<?php

function getProperties(){
	ReadInfo();
	ExtractInfo();
	DisplayInfo();
	
	if($errors){
		ShowErrors();
	}
}

function ReadInfo(){
	$file = fopen("ex/server.properties",'r');
	$result = nl2br(fread($file, 200));
	//echo $result;
	
	$array[] = explode("\n", $result);
	print_r($array);
}

function ExtractInfo(){
	
}

function DisplayInfo(){

}

function ShowErrors(){

}

?>