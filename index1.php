<?php
session_start();

 
//session_destroy();
?>
<!DOCTYPE html>
<html>

<head>
<title> </title>
<link rel="stylesheet" type="text/css" href="style1.css">

</head>

<body>

<div class="header">
<h1>Login Failed !</h1>
</div>
</div>

<div class="section">
<?php
error_reporting(0);
$password = $_POST["password"];
$username = $_POST["username"];
$error=''; 

$_SESSION['name']=$username;

if(!(isset($_SESSION[$username])) )
{
header ("Location: index.php");

}
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) 
{
$error = "Provide Username or Password ";
echo $error;
echo "<br><a href='index.php'>Back to Login.</a>";	
}

else
{
$connection = mysql_connect("localhost", "root", ""); 

$db = mysql_select_db("hms", $connection) or die("cannot select database");


// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("select * from logindetails where password='".$password."' AND username='".$username."'", $connection);
if($query)
{
$rows = mysql_num_rows($query);

if ($rows == 1) {
  
header("location: homepage.php");  
} 
else 
{
$error = "Username or Password is invalid";
echo $error;
echo "<br><a href='index.php'>Back to Login.</a>";	
}
}
else
{
echo "Query can not be processed. Try again.<br>";
echo "<a href='index.php'>Back to Home.</a>";	
}
mysql_close($connection); // Closing Connection
}
}
?>
</div>



</body>
</html>










