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


$query = "SELECT * FROM salary_generaldetails";

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
<center><h1 class="a1">
    
 <a href="homepage.php" class="a1">Homepage</a><br>
  <a href="insertemp.php" class="a1">Insert employee details</a><br>
  <a href="deleteemp1.php" class="a1">Delete employee details</a><br>
  <a href="selectempmain.php" class="a1">View employee details</a><br>
  <a href="updateemp.php" class="a1">Update employee details</a><br>
  <a href="insertsalary.php" class="a1">Insert Employee Salary</a><br>
  <a href="updatesalary.php"  class="a1">Update Employee Salary</a><br>
     <a href="selectsalary.php"  class="a1">Search Employee Salary</a><br>
  <a href="updategeneralsalary.php" class="a1active">Update General Salary Details</a><br>
  <a href="logindetails.php" class="a1">Login Details</a><br>



</h1>
 </center>
</div>

<div class="section">
<center><h1>UPDATE GENERAL SALARY DETAILS</h1><br><br><br>
 <table border="1" class="table1" >
      <thead>
        <tr>
          <th>Salary for Full time Employees (in Euros)</th><br />
          <th>Salary for Part time Employees (in Euros)</th><br />

         
          <th>Tax (%)</th><br />
          <th>Bonus (in Euros)</th><br />
          

        </tr>
      </thead>
      <tbody>
        <?php
          while( $row = mysql_fetch_array($db_result)){
            echo
            "<tr>
			 <td>{$row['salary_perhour_ft']}</td>
             <td>{$row['salary_perhour_pt']}</td>
             <td>{$row['tax']}</td>
             <td>{$row['bonus']}</td>
               
            </tr>\n";
          }
        ?>
      </tbody>

    </table>
<BR>
 <form action="updategeneralsalary2.php" method="post" onSubmit="return confirm('Are you sure to continue?')">
 <table border="1">
 <tr>
 <td>
  Enter per hour salary for Part time employees (in Euros)
 </td>
 
 <td>
  <input type="number" name="pt"> 
 </td>
 </tr>
 
 <tr>
 <td>
  Enter per hour salary for Full time employees (in Euros)
 </td>
 
 <td>
  <input type="number" name="ft"> 
 
 </td>
 </tr>
 <tr>
 <td>
 Enter tax %
 </td>
 
 <td>
   <input type="text" name="tax"> 

 </td>
 </tr>
 <tr>
 <td>
 Enter bonus (in Euros)
 </td>
 
 <td>
   <input type="number" name="bonus"> 

 </td>
 </tr>
 
 </table>   
    
    
    
    
    
    
     <br>
      
      <button type="submit" >Update Details</button>
      </form>
<BR>



     

		
</center>





<?php

a:

mysql_close($connection);

?>   

 
      
</div>
 
</body>
</html>
