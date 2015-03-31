<?php

//error_reporting(0);

 session_destroy();
  require('session.class.php');
  
$session = new session();
 
$session->start_session('_s', false);
 
$_SESSION['something'] = 'Session functionality';
//echo $_SESSION['something'];

 
error_reporting(E_WARNING);
?>