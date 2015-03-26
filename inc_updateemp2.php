<?php 
	   $EmpId = $_POST['EmpId'];
if(empty($_POST['EmpId'])){
        $valid=false;
         
        goto c;
    }
    else {
$query = "SELECT * FROM employee_details WHERE emp_id = ".$EmpId;

$db_result = mysql_query($query,$connection);
}
c:
 if(empty($_POST['EmpId'])){
        $valid=false;
        echo "ID not entered!<br>";
        
        goto b;
    }
if (mysql_num_rows($db_result) > 0) {
   
} else {
	echo "<h1>";
	echo "ID does not exist. Try again.<br>";
	echo "<a href='updateemp.php'>Go back</a>";
    	echo "</h1>";
	goto a;
}
  a:
  b:
?>