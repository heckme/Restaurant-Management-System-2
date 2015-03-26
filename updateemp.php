<?php
include 'session_files.php';
require('db_connect.php');


$query = "SELECT * FROM employee_details order by emp_fname";

$db_result = mysql_query($query,$connection);


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
  <a href="updateemp.php" class="a1active">Update employee details</a><br>
  <a href="insertsalary.php" class="a1">Insert Employee Salary</a><br>
  <a href="updatesalary.php" class="a1">Update Employee Salary</a><br>
     <a href="selectsalary.php"  class="a1">Search Employee Salary</a><br>
  <a href="updategeneralsalary.php" class="a1">Update General Salary Details</a><br>
  <a href="logindetails.php" class="a1">Login Details</a><br>
  
</h1>
 </center>
</div>

<div class="section">
<center><h1>LIST OF ALL EMPLOYEES</h1><br><br><br>
 <form action="updateemp2.php" method="post" onSubmit="return confirm('Are you sure to continue?')">
      Enter id to update data<input type="number" name="EmpId"> 
      
      <button type="submit" >Update</button>
      </form></center>
 <table border="1" class="table1" >
      <thead>
        <tr>
           <th>Id</th><br />
          <th>Employee First_Name</th><br />
          <th>Employee Last_Name</th><br />
          <th>Employee Address</th><br />
          <th>Employee City</th><br />
          <th>Pincode</th><br />
          <th>Gender</th><br />
          <th>Employee Contact Number</th><br />
          <th>Employee Job type</th><br />
          <th>Join date</td><br />
          <th>Join month</td><br />
          <th>Join year</td><br />
          <th>Weeks availaible</td><br />
          <th>Documents for Proof </td><br />
          <th>Email id</td><br />
        </tr>
      </thead>
      <tbody>
        <?php
         include 'inc_displayempdetails.php';
         mysql_close($connection);
        ?>
      </tbody>

    </table>

<BR>
      
</div>
 
</body>
</html>
