<?php
	
	/** MySQL Information */
	
	/** MySQL database Hostname */
	defined('DB_SERVER')?null:define('DB_SERVER', '127.0.0.1');
	
	/** MySQL database Username */
	defined('DB_USER')?null:define('DB_USER', 'root');
	
	/** MySQL database Password */
	defined('DB_PASS')?null:define('DB_PASS', '');
	
	/** The name of the databse for the server */
	defined('DB_NAME')?null:define('DB_NAME', 'chocobo');
	
	/** Port to connect to the MySQL Database */
	defined('DB_PORT')?null:define('DB_PORT', 3306);
	
	/** Database Charset to use in creating database tables */
	defined('DB_CHARSET')?null:define('DB_CHARSET', 'utf8');
	
	
	/** The Database Collate type. Don't change this in doubt. */
	defined('DB_COLLATE')?null:define('DB_COLLATE', '');
	
	
	
	/** Directory to acces the Minecraft server */
	defined('MC_DIR')?null:define('MC_DIR', 'C:/Users/Charles/Documents/GitHub/cmcs/Minecraft/');
?>