<?php 
	      $EmpId = $_POST['EmpId'];
$query = "SELECT * FROM employee_salary WHERE emp_id = ".$EmpId;
$db_result = mysql_query($query,$connection);
$querymonth = mysql_query("SELECT month FROM  employee_salary WHERE emp_id=".$EmpId);
$resultmonth = mysql_fetch_array($querymonth);
$salmonth = $resultmonth['month'];
if (mysql_num_rows($db_result) > 0) {
   
} else {
	echo "<h1>";
	echo "Salary of ID specified does not exist. Try again.<br>";
	echo "<a href='updatesalary.php'>Go back</a><br>";
	echo "<a href='insertsalary.php'>Or Add new Salary</a><br>";
 	echo "</h1>";
 
}
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