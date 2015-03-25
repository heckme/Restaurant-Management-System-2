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


$query = "SELECT * FROM logindetails";

$db_result = mysql_query($query,$connection);


?>























<!doctype html>
<html>
<head>
<title> LOGIN DETAILS </title>
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
  <a href="updategeneralsalary.php" class="a1">Update General Salary Details</a><br>
  <a href="logindetails.php" class="a1active">Login Details</a><br>



</h1>
 </center>
</div>

<div class="section">
<center><h1>LOGIN DETAILS</h1><br><br><br>
 <table border="1" class="table1" >
      <thead>
        <tr>
          <th>User name</th><br />
           
        </tr>
      </thead>

      <tbody>
        <?php
          while( $row = mysql_fetch_array($db_result)){
            echo
            "<tr>
			 <td>{$row['username']}</td>
             
               
            </tr>\n";
          }
        ?>
      </tbody>

    </table>
<BR><BR><BR>
    <u>  CHANGE PASSWORD</u><br><br>
 Password must contain <br>
     <b>		Minimum 6 characters<br> Maximum 20 characters<br> One number
 
      </b>
 <form action="logindetails2.php" method="post" onSubmit="return confirm('Are you sure to continue?')">
 <table border="1">
 <tr>
 <td>
  Enter old password
 </td>
 
 <td>
  <input type="password" name="oldpw" placeholder="********" required> 
 </td>
 </tr>
  
 <tr>
 <td>
  Enter new password
 </td>
 
 <td>
  <input type="password" name="pw"   placeholder="********" required> 
 </td>
 </tr>
  
 </table>   
  
      <input type="submit" name="submit" value="Submit"> 
      </form>
<BR>

  
</div>  
 
  

		
</center>





<?php

a:

mysql_close($connection);

?>   

 
      
</div>
 
</body>
</html>
