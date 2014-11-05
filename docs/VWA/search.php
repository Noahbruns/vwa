<?php
//include the config.php file for mysql database access information
include "config.php";

//connect to MYSQL_SERVER
$link = mysql_connect($hostname, $user, $password);
if (!$link) {
    die('MYSQL_ERROR');
}

mysql_select_db($db);

//here are the IDs of the element stored which match the conditions
$output=Array();

//search for ID
$result=mysql_query("SELECT * FROM ".$main_table." WHERE 
".$id_column." LIKE '".$_GET["q"]."%'");

while($row=mysql_fetch_array($result, MYSQL_ASSOC)){
    array_push($output,$row[$id_column]);
}

//search for Name
$result=mysql_query("SELECT * FROM ".$main_table." WHERE 
".$name_column." LIKE '%".$_GET["q"]."%'");

while($row=mysql_fetch_array($result, MYSQL_ASSOC)){
    if(!in_array($row[$id_column],$output))
        array_push($output,$row[$id_column]);
}

//FULLTEXT_search
$search_sql;
foreach($columns as $i)
{
    $search_sql .= ",".$i;
}

$search_sql = substr($search_sql,1);

$result=mysql_query(
"SELECT ".$id_column.", MATCH (".$search_sql.") AGAINST
('".$_GET['q']."' IN NATURAL LANGUAGE MODE) AS score
FROM data WHERE MATCH (".$search_sql.") AGAINST
('".$_GET['q']."' IN NATURAL LANGUAGE MODE);"
);

while($row=mysql_fetch_array($result, MYSQL_ASSOC)){
    if(!in_array($row[$id_column],$output))
        array_push($output,$row[$id_column]);
}

foreach($output as $i)
{
    echo $i.";";
}

mysql_close($link);
?>