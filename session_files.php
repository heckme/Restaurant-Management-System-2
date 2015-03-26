<?php
 
 //error_reporting(0);
session_start();
 

if(!(isset($_SESSION['name'])) )
{
header ("Location: index.php");

}

echo "Session for FILES";
?>