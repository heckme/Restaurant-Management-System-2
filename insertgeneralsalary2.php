<?php
session_start();
 

if(!(isset($_SESSION['name'])) )
{
header ("Location: index.php");

}
 error_reporting(0);
$ft = $_POST["ft"];
$pt = $_POST["pt"];
$bonus= $_POST["bonus"];
$tax = $_POST["tax"];

 

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

$query = mysql_query("SELECT tax FROM salary_generaldetails");
$result = mysql_fetch_array($query);
$tax1 = $result['tax'];

 
$querypt = mysql_query("SELECT salary_perhour_pt FROM salary_generaldetails");
$resultpt = mysql_fetch_array($querypt);
$pt1 = $resultpt['salary_perhour_pt'];

 
 
$queryft = mysql_query("SELECT salary_perhour_ft FROM salary_generaldetails");
$resultft = mysql_fetch_array($queryft);
$ft1 = $resultft['salary_perhour_ft'];


$querybonus = mysql_query("SELECT bonus FROM salary_generaldetails");
$resultbonus = mysql_fetch_array($querybonus);
$bonus1 = $resultbonus['bonus'];
 
?>
 
<!doctype html>
<html>
<head>
<title> ADMIN PANEL</title>
<link rel="stylesheet" type="text/css" href="style1.css">

</head>


<body>

<div class="header">
<h1>Welcome Admin</h1>
</div>
<a style="float:right;color:red;" value="LOG OUT" href="index.php">LOG OUT</a>
<div class="nav">
<center><h1>
  <a href="insertemp.html">Insert employee</a><br><br>
  <a href="deleteemp1.php">Delete employee</a><br><br>
  <a href="selectemp.html">Select employee</a><br><br>
  <a href="updateemp.php">Update employee</a><br><br>
  <a href="insertsalary.php">Salary</a><br><br>
  <a href="updatesalary.php">Update Salary</a><br><br>
  

</h1>
 </center>
</div>

<div class="section">

<center><h1>Data Modified</h1><br>

<?php


if(!empty($tax))
{
	
	mysql_query("UPDATE salary_generaldetails SET tax ='".$tax."' WHERE tax='".$tax1."'");
	echo "<b>Tax modified with value $tax %</b><br><br>";
}



if(!empty($pt))
{
	
	mysql_query("UPDATE salary_generaldetails SET salary_perhour_pt ='".$pt."' WHERE salary_perhour_pt='".$pt1."'");
	echo "<b>Per hour salary for part time employee is modified with $pt euros per hour</b><br><br>";
}


if(!empty($ft))
{
	
	mysql_query("UPDATE salary_generaldetails SET salary_perhour_ft ='".$ft."' WHERE salary_perhour_ft='".$ft1."'");
	echo "<b>Per hour salary for full time employee is modified with $ft euros per hour</b><br><br>";

}


if(!empty($bonus))
{
	
	mysql_query("UPDATE salary_generaldetails SET bonus ='".$bonus."' WHERE bonus='".$bonus1."'");
	echo "<b>Bonus is modified with $bonus euros</b><br><br>";
}
?>

<a href="Homepage.php">BACK TO HOMEPAGE</a>
 </center>
      
</div>

 
</body>
</html>
