<?php
	mysql_connect("localhost","root","") or die(mysql_error());
    mysql_select_db("chocobo") or die (mysql_error());
for($i=0;$i<25;$i++){


    $t = $i."h";
    mysql_query("INSERT INTO heures(heure) VALUES ('$t')") or die(mysql_error());
}

?>