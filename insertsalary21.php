<?php


$EmpId = $_POST["EmpId"];
$TotalHours= $_POST["TotalHours"];
$SalPerHour= $_POST["SalPerHour"];
$ForWeek = $_POST["Week"];
$ForMonth = $_POST["Month"];
$ForYear = $_POST["Year"];
$Tax = $_POST["Tax"];
$Bonus = $_POST["Bonus"];
$FinalSalary = $TotalHours * $SalPerHour;

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

if(!empty($Tax))
{
			$FinalTax = ($FinalSalary * $Tax)/100;
			$FinalSalary = $FinalSalary - $FinalTax;
}

if(!empty($Bonus))
{
				$FinalSalary = $FinalSalary + $Bonus;

	
}



$query = "INSERT INTO employee_salary(emp_id, emp_hoursworked, emp_salaryperhour, emp_totalsalary, emp_forweek, emp_formonth, emp_foryear) 
VALUES 
('$EmpId', '$TotalHours', '$SalPerHour', '$FinalSalary', '$ForWeek', '$ForMonth', '$ForYear')";
$db_result = mysql_query($query,$connection);

//$query1 = "SELECT * FROM employee_salary WHERE emp_id = '".$EmpId;
//$db_result1 = mysql_query($query1,$connection);


?>























<!doctype html>
<html>
<head>
<title>Update Employee</title>
<link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>

<div style="background-color:red;background-image:url(bgheader.jpg);color:#F3E8E8">
<h1><CENTER>WELCOME ADMIN</center>

</h1>

</div>

<br>
<div class="page-wrap">
<center><h1>DATA INSERTED<br><br><br>
 
<a href="index.html">Back to Homepage</a>

</h1>

<?php

a:

mysql_close($connection);

?>   

 
      
</div>

<footer class="site-footer">
  I'm the Sticky Footer.
</footer>
</body>
</html>
