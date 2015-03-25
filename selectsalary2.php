<?php 
include 'session_files.php';
 
$EmpId=$_POST['EmpId'];
  


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
 $valid = true;
if(empty($_POST['EmpId'])){
        $valid=false;
         
        goto a;
    }

if(!empty($EmpId))
{
	
$query = "SELECT * FROM employee_salary WHERE emp_id = '".$EmpId."'";
	
$db_result = mysql_query($query,$connection);

$querysal = mysql_query("SELECT sum(SALARY) AS sumsal FROM employee_salary WHERE emp_id = '".$EmpId."'");
$rowsal = mysql_fetch_array($querysal);


 
}

 



a:

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
<a style="float:right;color:red;" value="LOG OUT" href="index.php">LOG OUT <br> </a>

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
<center>



<?php
 
if(empty($_POST['EmpId'])){
        $valid=false;
         
        goto b;
    }
if (mysql_num_rows($db_result) > 0) {
   
} else {
	echo "<h1>";
	echo "Nothing is selected OR Value does not exist. <br>Try again.<br>";
	 
    	echo "</h1>";
	goto b;
}
 

 

?>





<h1>Employee Data with Id <?php echo $EmpId?></h1>
 
<table class="table1" border="1">
      <thead>
        <tr>
          <th>Id</th><br />
          <th>Month</th><br /> 
          <th>Year</th><br /> 
          <th>Salary (Euros)</th><br />
         <br />
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
 				 <td> {$row['salary']} </td>
           
			   </tr>\n";
          } 
        ?>
      </tbody>

    </table>
   <?php echo "<h3>TOTAL SALARY OF EMPLOYEE ID $EmpId is <u>".$rowsal["sumsal"]." Euros</u></h3>"; ?>
<br>
 




		





<?php

 b:

mysql_close($connection);
echo "<a href='selectsalary.php'>Back to search salary</a>";
 echo "<br><br>";
 echo "<a href='homepage.php'>Back to home page</a>";
?>  
<br>

</center>
    
</div>

