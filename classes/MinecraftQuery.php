<?php
	require_once('../config.php');
	
	function getMaxPlayers(){
		$parser = parse_ini_file(MC_DIR."server.properties");
		
		$maxPlayers = $parser['max-players'];
		
		return $maxPlayers;
	}

?>