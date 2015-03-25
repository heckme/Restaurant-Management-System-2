<?php
include 'session_files.php';
 
?>
<!doctype html>
<html>
<head>
<title>WELCOME ADMIN</title>
<link rel="stylesheet" type="text/css" href="style1.css">

</head>

<body>
<div class="header">
<h1>Welcome Admin </h1>
 <?php echo date(" j/M/Y "); 
  ?>  

</div>
<a style="float:right;color:red;" value="LOG OUT" href="index.php">LOG OUT</a>

<center>
<h1>CHOOSE ACTIVITY</h1>  
<table>
<tr>
<td><a href="insertemp.php" class="a1main">Insert employee</a>
</td>
<td>&emsp;&emsp;&emsp;&emsp;</td>
<td> <a href="deleteemp1.php" class="a1main">Delete employee</a>
</td>

</tr>
<tr>
<td>
 <a href="selectempmain.php" class="a1main">Select employee</a>
</td>
<td> </td>
<td>   <a href="updateemp.php" class="a1main">Update employee</a>
</td>

</tr>
<tr>
<td> <a href="insertsalary.php" class="a1main">Insert Salary</a><br>
</td>
<td>&emsp;</td>
<td> <a href="selectsalary.php" class="a1main">Search Salary</a>
</td>

</tr>
<tr>
<td>  <a href="updatesalary.php" class="a1main">Update Salary</a>
</td>
<td>&emsp;</td>
<td>   <a href="updategeneralsalary.php" class="a1main">Update General Salary Details</a>
</td>

</tr>

<tr>
<td>
<a href="logindetails.php" class="a1main">Change Login Details</a>  
</td>
<td></td>
</td>
<td>   
</td>
</tr>
</table>
 <h1>
 


</h1>
 </center>
 
      


</body>
</html>
