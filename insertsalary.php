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


$query = "SELECT e.emp_id, e.emp_fname, e.emp_lname,  s.month, s.year, s.salary FROM employee_details as e LEFT  JOIN 
employee_salary as s on s.emp_id=e.emp_id ORDER BY e.emp_id";

$db_result = mysql_query($query,$connection);


?>























<!doctype html>
<html>
<head>
<title> Select Employees</title>
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
<center><h1>LIST OF ALL EMPLOYEES</h1><br><br><br>
 </center>
 
 <table border="1" style= "background-color: #DAD4E9; color: #000000; margin: 0 auto;" >
      <thead>
        <tr>
          <th>Id</th><br />
          <th>Employee First Name</th><br />
          <th>Employee Last Name</th><br />
           
          <th>Salary for month</th><br />
          <th>Salary for year</th><br />
          <th>Salary</th><br />

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
       	      
     <td>{$row['month']}</td>
               <td>{$row['year']}</td>
               <td>{$row['salary']}</td>
                    
            </tr>\n";
          }
        ?>
      </tbody>

    </table>


<BR>


<center>

<table>
<tr>
<td>
<h1>INSERT NEW SALARY</h1>

<form action="insertsalary2.php" method="post" onSubmit="return confirm('Are you sure to continue?')">
   <table border="1">
   <tr>
   <td>
	Enter ID
   </td>

   <td>
	<input type="number" name="EmpId" required>
   </td>

   </tr>
   
      <tr>
   <td>
	Enter total working hours

   </td>

   <td>

	<input type="number" name="whours" required>

   </td>

   </tr>

   <tr>
   <td>
	Select Month of Salary
   </td>

   <td>
	    <select name="Month" required>
                                
                                        
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
                                
                           
                                  </select>
   </td>

   </tr>


   <tr>
   <td>

	Select Year of Salary
   </td>

   <td>
    <select name="Year" required>

                                                    
                                                      <option value="2014">2014</option>
                                                    <option value="2015">2015</option>
 									</select>
  </td>

   </tr>

   </table>
      <button type="submit" >INSERT SALARY</button>
      </form>    


</td>

<td>
&emsp;&emsp;&emsp;&emsp;
</td>



</tr>

</table>


 

		
</center>




<?php

a:

mysql_close($connection);

?>   

 
      
</div>

 
</body>
</html>
