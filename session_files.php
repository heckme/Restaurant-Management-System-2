<?php
 
 error_reporting(0);
  require('session.class.php');
$session = new session();
 
$session->start_session('_s', false);
 
$_SESSION['something'] = 'Session_functionality';
//echo $_SESSION['something'];


?>