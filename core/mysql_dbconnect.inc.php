<?php
 DEFINE ('DBUSER', 'root');
 DEFINE ('DBPW', '');
 DEFINE ('DBHOST', '127.0.0.1');
 DEFINE ('DBNAME', 'chocobo');

if ($dbc = mysql_connect (DBHOST, DBUSER, DBPW)) {
	if (!mysql_select_db (DBNAME)) {
	trigger_error("Could not select the database!<br />");
	exit();
	}
} else {
	trigger_error("Could not connect to Server!<br /> ");
	exit();
}

function escape_data ($data) {
	if (function_exists('mysql_real_escape_string')) {
	 global $dbc;
	 $data = mysql_real_escape_string (trim($data), $dbc);
	 $data = strip_tags($data);
	 } else {
	 $data = mysql_escape_string (trim($data));
	 $data = strip_tags($data);
	 }
 return $data;
}
?>