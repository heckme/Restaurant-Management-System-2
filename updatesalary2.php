<?php
include 'session_files.php';
$EmpId = $_POST['EmpId'];

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


$query = "SELECT * FROM employee_salary WHERE emp_id = ".$EmpId;

$db_result = mysql_query($query,$connection);



$querymonth = mysql_query("SELECT month FROM  employee_salary WHERE emp_id=".$EmpId);
$resultmonth = mysql_fetch_array($querymonth);
$salmonth = $resultmonth['month'];

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
  <a href="insertsalary.php" class="a1">Insert Employee Salary</a><br>
  <a href="updatesalary.php"  class="a1active">Update Employee Salary</a><br>
     <a href="selectsalary.php"  class="a1">Search Employee Salary</a><br>
  <a href="updategeneralsalary.php" class="a1">Update General Salary Details</a><br>
  <a href="logindetails.php" class="a1">Login Details</a><br>

</h1>
 </center>
</div>

<div class="section">
 <center>

<?php
if (mysql_num_rows($db_result) > 0) {
   
} else {
	echo "<h1>";
	echo "Salary of ID specified does not exist. Try again.<br>";
	echo "<a href='updatesalary.php'>Go back</a><br>";
	echo "<a href='insertsalary.php'>Or Add new Salary</a><br>";
 	echo "</h1>";
	goto a;
}

?>
<center><h1>OLD SALARY DETAILS OF EMPLOYEE</h1><br><br><br>
 </center>
 <table border="1" class="table1">
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

    </table><br><br>
    <center>Enter new details for Employee number <?php echo $EmpId ?> <br><br>
    <form action="updatesalary3.php" method="post">
  <input type="hidden" name='EmpId' readonly value='<?php echo $EmpId ?>'>
 
    <table>
    <tr>
    <td>Total working hours  * </td>
    <td>	<input type="number" required name="whours"  >
</td>
    </tr>
    
    <tr>
    <td>For Month  * </td>
    <td>
     <select name="Month" required >
                                
                                         <option value=""></option>
                                         <option value="Jan">Jan</option>
                                         <option value="Feb">Feb</option>
                                         <option value="Mar">Mar</option>
                                         <option value="Apr">Apr</option>
                                         <option value="May">May</option>
                                         <option value="Jun">Jun</option>
                                         <option value="Jul">Jul</option>
                                         <option value="Aug">Aug</option>
                                         <option value="Sep">Sep</option>
                                         <option value="Oct">Oct</option>
                                         <option value="Nov">Nov</option>
                                         <option value="Dec">Dec</option>
                                
                           
                                  </select><strong></strong>
    
    
    </td>
    </tr>
    
    
    
        
    <tr>
    <td>For Year  * </td>
    <td>
     <select name="Year" required>

                                                      <option value=""></option>
                                                      <option value="2014">2014</option>
                                                    <option value="2015">2015</option>
 									</select>
    
    
    </td>
    </tr>
    </table><br>
     <input type="submit" value="Submit ">
 </form>
</center>
 


     

		



 </center>


<?php

a:

mysql_close($connection);

?>   

 
      
</div>

</body>
</html>
