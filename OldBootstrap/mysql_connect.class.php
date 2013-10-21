<?php

	require_once("../config.php");
	
	Class MyslqConnect {
		
		private $connection;
		
		public function __construct(){
			$this->connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME, DB_PORT);
		}
		
	}

?>