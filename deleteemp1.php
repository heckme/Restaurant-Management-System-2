<?php
include 'session_files.php';
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


$query = "SELECT * FROM employee_details ORDER BY emp_fname";

$db_result = mysql_query($query,$connection);


?>























<!doctype html>
<html>
<head>
<title> DELETE DATA</title>
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
  <a href="deleteemp1.php" class="a1active ">Delete employee details</a><br>
  <a href="selectempmain.php" class="a1">View employee details</a><br>
  <a href="updateemp.php" class="a1">Update employee details</a><br>
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
 <form action="deleteemp.php" method="get" onSubmit="return confirm('Are you sure to delete?')">
      Enter id to delete data<input type="text" name="EmpId"> 
      
      <button type="submit" >Delete</button>
      </form></center>
 <table border="1" style= "background-color: White; color: Black;font-size:12px; margin: 0 auto;" >
      <thead>
        <tr>
          <th>Id</th><br />
          <th>Employee First_Name</th><br />
          <th>Employee Last_Name</th><br />
          <th>Employee Address</th><br />
          <th>Pincode</th><br />
          <th>Gender</th><br />
          <th>Employee Contact Number</th><br />
          <th>Employee Job type</th><br />
          <th>Join date</td><br />
          <th>Weeks availaible</td><br />
          <th>Documents for Proof </td><br />
          <th>Email id</td><br />
        </tr>
      </thead>
      <tbody>
        <?php
          while( $row = mysql_fetch_array($db_result)){
            echo
            "<tr>
              <td>{$row['emp_id']}</td> 
              <td>{$row['emp_fname']}</td>
			  <td>{$row['emp_lname']}</td>
              <td>{$row['emp_address']}</td>
              <td>{$row['emp_city']}</td>
    
	          <td>{$row['emp_pincode']}</td>
              <td>{$row['emp_gender']}</td>
              <td>{$row['emp_contactno']}</td> 
			  <td>{$row['emp_jobtype']}</td> 
			  <td>{$row['emp_joinday']}</td>
			  <td>{$row['emp_joinmonth']}</td>
			  <td>{$row['emp_joinyear']}</td>
		
			  <td>{$row['emp_availaibleweekday']}</td> 
			  <td>{$row['emp_docs']}</td> 
			  <td>{$row['emp_emailid']}</td> 
            </tr>\n";
          }
        ?>
      </tbody>

    </table>


<BR>



     

		





<?php

a:

mysql_close($connection);

?>   

 
      
</div>


</body>
</html>
