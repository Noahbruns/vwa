<?php
$result=mysql_query("SELECT * FROM ".$main_table);

while($row=mysql_fetch_array($result, MYSQL_ASSOC)){
    echo "<div id='element_".$row[$id_column]."' class='col-md-2'><a onclick='load_element(".$row[$id_column].")'>".$row[$name_column]."</a></div>";
}

mysql_close($link);
?>