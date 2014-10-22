<?php
//include the config.php file for mysql database access information
include "config.php";

//connect to MYSQL_SERVER
$link = mysql_connect($hostname, $user, $password);
if (!$link) {
    die('MYSQL_ERROR');
}

mysql_select_db($db);

$search_sql;

foreach($columns as $i)
{
    $search_sql .= " OR ".$i." LIKE '%".$_GET["q"]."%'";
}

$result=mysql_query("SELECT * FROM ".$main_table." WHERE 
".$id_column." LIKE '%".$_GET["q"]."%'".$search_sql);

while($row=mysql_fetch_array($result, MYSQL_ASSOC)){
    echo $row[$id_column].";";
}


mysql_close($link);
?>