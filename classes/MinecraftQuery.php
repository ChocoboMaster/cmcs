<?php
	require_once('../config.php');
	
	function getMaxPlayers(){
		$parser = parse_ini_file(MC_DIR."server.properties");
		
		$maxPlayers = $parser['max-players'];
		
		return $maxPlayers;
	}
	
	function getServerAddress(){
		$parser = parse_ini_file(MC_DIR."server.properties");
		
		$ip = $parser['server-ip'];
		
		return $ip;
	}
	
	function getServerPort(){
		$parser = parse_ini_file(MC_DIR."server.properties");
		
		$serverPort = $parser['server-port'];
		
		return $serverPort;
	}
	

?>