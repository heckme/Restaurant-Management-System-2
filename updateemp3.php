<?php
include 'session_files.php';
$EmpId = $_POST['EmpId'];
$Address = $_POST['Address'];
$City=$_POST['City'];
$Pincode=$_POST['Pincode']; 
$JoindateDay=$_POST['Day']; 
$JoindateMonth=$_POST['Month']; 
$JoindateYear=$_POST['Year']; 
$Fname=$_POST['Firstname'];
$Lname = $_POST['Lastname'];
$Gender = $_POST['Gender'];
$Contactnumber = $_POST['Contactnumber'];
$Emailid=$_POST['Email'];
$Jobtype=$_POST['Jobtype']; 
$AvailDays=$_POST['AvailaibleWeek']; 
$Docs=$_POST['Docs']; 
 








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


if(!empty($Fname))
{
 mysql_query("UPDATE employee_details SET emp_fname ='".$Fname."' WHERE emp_id = ".$EmpId);
}

if(!empty($Lname ))
{
 mysql_query("UPDATE employee_details SET emp_lname ='".$Lname ."' WHERE emp_id = ".$EmpId);
}



if(!empty($Address))
{
 mysql_query("UPDATE employee_details SET emp_address ='".$Address."' WHERE emp_id = ".$EmpId);
}


if(!empty($City))
{
 mysql_query("UPDATE employee_details SET emp_city ='".$City."' WHERE emp_id = ".$EmpId);
}

if(!empty($Pincode))
{
 mysql_query("UPDATE employee_details SET emp_pincode ='".$Pincode."' WHERE emp_id = ".$EmpId);
}



if(!empty($JoindateDay))
{
 mysql_query("UPDATE employee_details SET emp_joinday ='".$JoindateDay."' WHERE emp_id = ".$EmpId);
}

if(!empty($JoindateMonth))
{
 mysql_query("UPDATE employee_details SET emp_joinmonth ='".$JoindateMonth."' WHERE emp_id = ".$EmpId);
}

if(!empty($JoindateYear))
{
 mysql_query("UPDATE employee_details SET emp_joinyear ='".$JoindateYear."' WHERE emp_id = ".$EmpId);
}


if(!empty($Gender))
{
 mysql_query("UPDATE employee_details SET emp_gender ='".$Gender."' WHERE emp_id = ".$EmpId);
}

if(!empty($Contactnumber))
{
 mysql_query("UPDATE employee_details SET emp_contactno ='".$Contactnumber."' WHERE emp_id = ".$EmpId);
}

if(!empty($Emailid))
{
 mysql_query("UPDATE employee_details SET emp_emailid ='".$Emailid."' WHERE emp_id = ".$EmpId);
}

if(!empty($Jobtype))
{
 mysql_query("UPDATE employee_details SET emp_jobtype='".$Jobtype."' WHERE emp_id = ".$EmpId);
}

if(!empty($AvailDays))
{
 mysql_query("UPDATE employee_details SET emp_availaibleweekday ='".$AvailDays."' WHERE emp_id = ".$EmpId);
}

if(!empty($Docs))
{
 mysql_query("UPDATE employee_details SET emp_docs ='".$Docs."' WHERE emp_id = ".$EmpId);
}







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
  <a href="updateemp.php" class="a1active ">Update employee details</a><br>
  <a href="insertsalary.php" class="a1">Insert Employee Salary</a><br>
  <a href="updatesalary.php" class="a1">Update Employee Salary</a><br>
     <a href="selectsalary.php"  class="a1">Search Employee Salary</a><br>
  <a href="updategeneralsalary.php" class="a1">Update General Salary Details</a><br>
  <a href="logindetails.php" class="a1">Login Details</a><br>
  
 

</h1>
 </center>
</div>

<div class="section">
<center><h1>Data Updated !</h1><br>
<a href="Homepage.php">BACK TO HOMEPAGE</a>

<BR>



     

		





<?php

a:

mysql_close($connection);

?>   

 
      
</div>


</body>
</html>
