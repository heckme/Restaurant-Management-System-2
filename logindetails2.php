<?php
include 'session_files.php';
$pw = $_POST["pw"];
$oldpw = $_POST["oldpw"];

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
		if( strlen($pw) < 6 || strlen($pw) > 20 ) {
			 $valid=false;
 			goto x;
		}
 
	if( !preg_match("#[0-9]+#", $pw) ) {
 $valid=false;			
			goto x;
		}









 
 if(empty($_POST["pw"]) || empty($_POST["oldpw"]))
    {
        $valid=false;
         
        goto x;
    }
    
  
     
	$querypw = mysql_query("SELECT password FROM logindetails");
	$resultpw = mysql_fetch_array($querypw);
	$pw1 = $resultpw['password'];    
   if($pw1!=$oldpw)
   {
   	goto x;
   } 
    
	if(!empty($pw))
	{
	 
   mysql_query("UPDATE logindetails SET password='".$pw."'");
   
	}
x:
?>
 
<!doctype html>
<html>
<head>
<title> Login Details</title>
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
<center> <h1>
   
  <a href="homepage.php" class="a1">Homepage</a><br>
  <a href="insertemp.php" class="a1">Insert employee details</a><br>
  <a href="deleteemp1.php" class="a1">Delete employee details</a><br>
  <a href="selectempmain.php" class="a1">View employee details</a><br>
  <a href="updateemp.php" class="a1">Update employee details</a><br>
  <a href="insertsalary.php" class="a1">Insert Employee Salary</a><br>
  <a href="updatesalary.php"  class="a1">Update Employee Salary</a><br>
    <a href="searchsalary.php"  class="a1">Search Employee Salary</a><br>
  <a href="updategeneralsalary.php" class="a1">Update General Salary Details</a><br>
  <a href="logindetails.php" class="a1active">Login Details</a><br>


</h1>

 </center>
</div>
<center>
<div class="section">
<?php
  if( strlen($pw) < 6 || strlen($pw) > 20)  
  {
			echo '<h2>Password need to have between 6 and 20 characters, must have one special character.</h2><br>';
			 
			 
 			goto y;
		}
		if( !preg_match("#[0-9]+#", $pw) ) {
			echo'<h2>Password must include at least one number!<br></h2>';
			goto y;
		}
 
 if(empty($_POST["pw"])|| empty($_POST["oldpw"])){
        $valid=false;
         echo "<h1>Some details not provided. Please enter details again. <br></h1>";
        goto y;
    }
    if($pw1!=$oldpw)
   {
   	echo "<h1>Old password is incorrect! Try again. </h1>";
   	goto y;
   	
   }  
  
 ?>
<h1>PASSWORD UPDATED!</h1>

<BR>
<?php
y:
?>
<a href="logindetails.php">Go back to update login details</a><br>
<br><a href="Homepage.php">Back to Homepage</a>


     

		





<?php

 
 
mysql_close($connection);

?>   

 
      
</div>
  </center>
</body>
</html>
