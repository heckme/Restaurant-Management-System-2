<?php 
	$EmpId = $_GET['EmpId'];
   
if(empty($EmpId))
{
	$valid=false;
	goto d;
}

else 
{
	$querysel = "SELECT * FROM employee_details WHERE emp_id='".$EmpId."'";
	$db_resultsel = mysql_query($querysel,$connection);
	$query1 = "DELETE FROM employee_salary WHERE emp_id=".$EmpId;
	$query = "DELETE FROM employee_details WHERE emp_id=".$EmpId;
	$db_result = mysql_query($query,$connection);
}
	d:

if(empty($EmpId))
{
   $valid=false;
	echo "<h1>";
	echo "ID NOT PROVIDED!<br>";
	echo "</h1>";
	goto e;
}
	echo "Deleting ID number ".$EmpId;

	mysql_close($connection);

if($db_result)
{	
	echo "<h1>";
	echo "Data Deleted Successfully !";
	echo "</h1>";
	echo "<br>";
 
}
else
{
   echo "<h1>";
	echo "Data Not there. Try Again !<br>";
	echo "</h1>";	 
	echo mysql_error();
}
	a:
	e:
	echo "<a href='deleteemp1.php'>Back to delete page</a>";
	echo "<br>";
	echo "<a href='homepage.php'>Back to home page</a>";
 
  
?>