<?php
 $connection = mysql_connect("localhost", "root", ""); 
if(!$connection) 
{
die("Connection failed " . mysql_error());
}
$db_conn = mysql_select_db("hms", $connection);
if(!$db_conn)
{
die("Connection failed " . mysql_error());
}
  
?>