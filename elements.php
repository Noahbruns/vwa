<?php
//include the config.php file for mysql database access information
include "config.php";

//connect to MYSQL_SERVER
$link = mysql_connect($hostname, $user, $password);
if (!$link) {
    die('MYSQL_ERROR');
}

mysql_select_db($db);

$result=mysql_query("SELECT * FROM ".$table);

while($row=mysql_fetch_array($result, MYSQL_ASSOC)){
    echo "<div id='".$row[$id_column]."' class='col-md-2'>".$row[$columns]."</div>";
    //echo $row[$columns];
}

mysql_close($link);
?>