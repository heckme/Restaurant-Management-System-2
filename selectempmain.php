<?php 
include 'session_files.php';
?>


<!doctype html>
<html>

<head>
<title> SELECT EMPLOYEES</title>
<link rel="stylesheet" type="text/css" href="style1.css">

</head>

<body>
<div class="header">
<h1>Welcome Admin</h1>
<?php echo date(" j/m/y "); 
  ?> 
</div>
<a style="float:right;color:red;" value="LOG OUT" href="index.php">LOG OUT</a>
<div class="nav">
<center><h1>
     <a href="homepage.php" class="a1">Homepage</a><br>
  <a href="insertemp.php" class="a1">Insert employee details</a><br>
  <a href="deleteemp1.php" class="a1">Delete employee details</a><br>
  <a href="selectempmain.php" class=" a1active">View employee details</a><br>
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



<center>
<h1>SEARCH EMPLOYEES</h1>
<U>PLEASE INSERT ONLY ONE VALUE</U><BR><BR>
 <form action="selectemp.php" method="post">
<table>
<tr>
<td>By First name </td>
<td><input type="text" name="Firstname"></td>
</tr>
<tr>
<td>By Last name </td>
<td><input type="text" name="Lastname"></td>
</tr>
<tr>
<td>Availaible week days </td>
<td><select name="AvailaibleWeek">
					 					 <option value=""></option>
                                         
                                         <option value="Monday-Wednesday">Monday-Wednesday</option>
                                         <option value="Wednesday-Sunday">Wednesday-Sunday</option>
                                         <option value="Anyday">Anyday</option>
                                         </select>
                                         </td>
</tr>
<tr>
<td>Jobtype </td>
<td><select name="Jobtype">
					 	<option value=""></option>
                        <option value="ft">Full time</option>
						<option value="pt">Part time</option>
 						</select></td>
</tr>
<tr>
<td>  </td>
<td> <input type="submit" value="SUBMIT"></td>
</tr>


</table>
 
 
 </form> <br>
  <form action="selectempall.php" method="post">
 &emsp;&emsp;<input type="submit" VALUE="SHOW ALL EMPLYOEES">
 
  </form>
 
      </center>




</div>

</body>
</html>
