<?php
session_start();
unset($_SESSION['name']);
  // Delete all session variables
  // session_destroy();

 // Jump to login page
 header('Location: index.php');
?>
<!doctype html>
<html>
<head>
<title>LOG OUT</title>
<link rel="stylesheet" type="text/css" href="style1.css">

</head>

<body>
<div class="header">
<h1>Welcome</h1>


</div>

<center>
<div id="main">
<h1>Successfully Log out</h1>
<br>
<a href="index.php">Go back to Login page</a>
</div>
 </center>
 
      


</body>
</html>
