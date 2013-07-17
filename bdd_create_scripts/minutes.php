<?php
	mysql_connect("localhost","root","") or die(mysql_error());
    mysql_select_db("chocobo") or die (mysql_error());
for($i=0;$i<61;$i++){

	if($i<10){
		$t = "0".$i;
	}else{
		$t = $i;
	}

    mysql_query("INSERT INTO minutes(minute) VALUES ('$t')") or die(mysql_error());
}

?>