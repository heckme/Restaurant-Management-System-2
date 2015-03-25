<?php
include 'session_files.php';
$EmpId = $_POST["EmpId"];
$TotalHours= $_POST["whours"];
$ForMonth= $_POST["Month"];
$ForYear = $_POST["Year"];

  
$queryid = mysql_query("SELECT * FROM employee_details WHERE emp_id=$EmpId");
$resultid = mysql_fetch_array($queryid);
$id1 = $resultid['emp_id'];
/*if((!$id1))
{
	goto x;
}*/
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

$query = mysql_query("SELECT emp_jobtype FROM employee_details WHERE emp_id = ".$EmpId);
$result = mysql_fetch_array($query);
$jt = $result['emp_jobtype'];

$querytax = mysql_query("SELECT tax FROM salary_generaldetails");
$resulttax = mysql_fetch_array($querytax);
$tax = $resulttax['tax'];

$querybonus = mysql_query("SELECT bonus FROM salary_generaldetails ");
$resultbonus = mysql_fetch_array($querybonus);
$bonus = $resultbonus['bonus'];

 

 x:
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
<?php echo date("j/m/y"); 
  ?>
</div>
<a style="float:right;color:red;" value="LOG OUT" href="index.php">LOG OUT</a>
<div class="nav">
<center><h1>

 <a href="homepage.php" class="a1">Homepage</a><br>
  <a href="insertemp.php" class="a1">Insert employee details</a><br>
  <a href="deleteemp1.php" class="a1">Delete employee details</a><br>
  <a href="selectempmain.php" class="a1">View employee details</a><br>
  <a href="updateemp.php" class="a1">Update employee details</a><br>
  <a href="insertsalary.php" class="a1active">Insert Employee Salary</a><br>
  <a href="updatesalary.php" class="a1">Update Employee Salary</a><br>
     <a href="selectsalary.php"  class="a1">Search Employee Salary</a><br>
  <a href="updategeneralsalary.php" class="a1">Update General Salary Details</a><br>
  <a href="logindetails.php" class="a1">Login Details</a><br>
  

</h1>
 </center>
</div>

<div class="section">

<center>
<?php
/*
if((!$id1))
{
	echo "<h1>Id specified does not exist! Try again.</h1><br>";
	echo "<br><a href='insertsalary.php'>Go back to insert salary</a> ";
	goto y;
}*/
if($jt == "ft")
{
	$querymonth = mysql_query("SELECT month FROM  employee_salary WHERE emp_id=".$EmpId);
	$resultmonth = mysql_fetch_array($querymonth);
	$salmonth = $resultmonth['month'];
	$queryyear = mysql_query("SELECT year FROM  employee_salary WHERE emp_id=".$EmpId);
	$resultyear = mysql_fetch_array($queryyear);
	$salyear = $resultyear[	'year'];
	
	if( ($salyear == $ForYear) and ($salmonth == $ForMonth))
	{
		echo "<h2>SALARY FOR SPECIFIED MONTH AND YEAR FOR EMPLOYEE ID $EmpId ALREADY EXISTS!</h2>";	
		echo "<br><a href='insertsalary.php'>Go back to add salary.</a><br><br> OR <br><br><a href='updatesalary.php'>Update existing salary</a>";
		
		}
	else
	{
	$queryft = mysql_query("SELECT salary_perhour_ft FROM salary_generaldetails");
	$resultft = mysql_fetch_array($queryft);
	$salft = $resultft['salary_perhour_ft'];
	
   $InitialSalary = ($TotalHours * $salft) + $bonus;
   $Salary = ($InitialSalary*$tax)/100;
   $FinalSalary = $InitialSalary-$Salary;
   
	echo "Salary of employee $EmpId with working hours $TotalHours for month $ForMonth /$ForYear along with tax $tax % and bonus $bonus is <h1>$FinalSalary euros</h1>";
	mysql_query("INSERT INTO employee_salary VALUES ('$EmpId', '$ForMonth','$ForYear','$FinalSalary')");	
	echo "<br>Salary Inserted. <br> ";
	
	}
}


if($jt == "pt")
{
	$querymonth = mysql_query("SELECT month FROM  employee_salary WHERE emp_id=".$EmpId);
	$resultmonth = mysql_fetch_array($querymonth);
	$salmonth = $resultmonth['month'];
	$queryyear = mysql_query("SELECT year FROM  employee_salary WHERE emp_id=".$EmpId);
	$resultyear = mysql_fetch_array($queryyear);
	$salyear = $resultyear['year'];
	
	if( ($salyear == $ForYear) and ($salmonth == $ForMonth))
	{
		echo "<h2>SALARY FOR SPECIFIED MONTH AND YEAR FOR EMPLOYEE ID $EmpId ALREADY EXISTS!</h2>";	
		echo "<br><a href='insertsalary.php'>Go back to add salary.</a><br><br> OR <br><br><a href='updatesalary.php'>Update existing salary</a>";
		
		}
	else
	{
	$querypt = mysql_query("SELECT salary_perhour_pt FROM salary_generaldetails");
	$resultpt = mysql_fetch_array($querypt);
	$salpt = $resultpt['salary_perhour_pt'];
	
	$InitialSalary = ($TotalHours * $salpt) + $bonus;
   $Salary = ($InitialSalary*$tax)/100;
   $FinalSalary = $InitialSalary-$Salary;
	echo "Salary of employee $EmpId with working hours $TotalHours for month $ForMonth /$ForYear along with tax $tax % and bonus $bonus is <h1>$FinalSalary euros</h1>";
	
	mysql_query("INSERT INTO employee_salary VALUES ('$EmpId', '$ForMonth','$ForYear','$FinalSalary')");	
	echo "<br>Salary Inserted. <br>";
	
	}
}
y:
echo "<br><a href='homepage.php'>Go back to homepage</a> ";
?>

 </center>
      
</div>

 
</body>
</html>
