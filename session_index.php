<?php

error_reporting(0);

session_start();
if (isset($_SESSION[$username]))
{
  unset($_SESSION[$username]);
  header('location:index.php');
}
session_destroy();

echo "PHP FOR INDEX";
 
error_reporting(E_WARNING);
?>