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


$query = "SELECT * FROM employee_salary ORDER BY emp_id";

$db_result = mysql_query($query,$connection);


?>























<!doctype html>
<html>
<head>
<title> Search Salary</title>
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
  <a href="insertsalary.php" class="a1">Insert Employee Salary</a><br>
  <a href="updatesalary.php"  class="a1">Update Employee Salary</a><br>
    <a href="selectsalary.php"  class="a1active">Search Employee Salary</a><br>
  <a href="updategeneralsalary.php" class="a1 ">Update General Salary Details</a><br>
  <a href="logindetails.php" class="a1">Login Details</a><br>


</h1>
 </center>
</div>

<div class="section">
<center><h1>SEARCH SALARY</h1><br><br><br>
 <form action="selectsalary2.php" method="post">
      Enter id to calculate Total salary<input type="number" name="EmpId"> 
      
      <button type="submit" >Search</button>
      </form></center>
 <table border="1" class="table1" >
      <thead>
        <tr>
          <th>Id</th><br />
          <th>Salary for Month</th><br />
          <th>Salary for Year</th><br />
          <th>Salary</th><br />
          
        </tr>
      </thead>
      <tbody>
        <?php
          while( $row = mysql_fetch_array($db_result)){
            echo
            "<tr>
              <td>{$row['emp_id']}</td> 
              <td>{$row['month']}</td>
			  <td>{$row['year']}</td>
           <td>{$row['salary']}</td>
            
			   
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
