<?php 
	   $EmpId = $_POST['EmpId'];
$TotalHours= $_POST['whours'];
$Month = $_POST['Month'];
$Year = $_POST['Year'];
 
 
$querymonth = mysql_query("SELECT month FROM employee_salary WHERE month='$Month'");
$resultmonth = mysql_fetch_array($querymonth);
$month1 = $resultmonth['month'];

$queryyear = mysql_query("SELECT year FROM employee_salary WHERE year='$Year'");
$resultyear = mysql_fetch_array($queryyear);
$year1 = $resultyear['year'];

if((!$month1) or (!$year1))
{
	echo "ID, MONTH OR YEAR SPECIFIED DOES NOT MATCH.<br><br><a href='updatesalary.php'>Try Again!</a><br><br><br><a href='insertsalary.php'>Add New Salary</a><br>";	
}
else
{
$query = mysql_query("SELECT emp_jobtype FROM employee_details WHERE emp_id = ".$EmpId);
$result = mysql_fetch_array($query);
$jt = $result['emp_jobtype'];
if($jt == "ft")
{
	$querytax = mysql_query("SELECT tax FROM salary_generaldetails");
$resulttax = mysql_fetch_array($querytax);
$tax = $resulttax['tax'];
 
$querybonus = mysql_query("SELECT bonus FROM salary_generaldetails ");
$resultbonus = mysql_fetch_array($querybonus);
$bonus = $resultbonus['bonus'];
 

	$queryft = mysql_query("SELECT salary_perhour_ft FROM salary_generaldetails");
	$resultft = mysql_fetch_array($queryft);
	$salft = $resultft['salary_perhour_ft'];
 
  $InitialSalary = ($TotalHours * $salft) + $bonus;
  $Salary = ($InitialSalary*$tax)/100;
  $FinalSalary = $InitialSalary-$Salary;
   
    echo 'Salary of Employee id "'.$EmpId.'" is updated with salary <b>'.$FinalSalary. ' euros! </b><br>';    
    	mysql_query("UPDATE employee_salary SET salary = $FinalSalary WHERE emp_id= $EmpId AND (month='$Month' AND year='$Year' )" );	
  


}

if($jt == "pt")
{
	$querytax = mysql_query("SELECT tax FROM salary_generaldetails");
	$resulttax = mysql_fetch_array($querytax);
	$tax = $resulttax['tax'];
 
	$querybonus = mysql_query("SELECT bonus FROM salary_generaldetails ");
	$resultbonus = mysql_fetch_array($querybonus);
	$bonus = $resultbonus['bonus'];
 

	$querypt = mysql_query("SELECT salary_perhour_pt FROM salary_generaldetails");
	$resultpt = mysql_fetch_array($querypt);
	$salpt = $resultpt['salary_perhour_pt'];
   
   $InitialSalary = ($TotalHours * $salpt) + $bonus;
   
	$Salary = ($InitialSalary*$tax)/100;
	$FinalSalary = $InitialSalary-$Salary;
     echo '<h2>Salary of Employee id "'.$EmpId.'" is updated with salary <b>'.$FinalSalary. ' euros! </b></h2><br>';    
  
    	mysql_query("UPDATE employee_salary SET salary = $FinalSalary WHERE emp_id= $EmpId AND (month='$Month' AND year='$Year' )" );	
 }

}
a:

mysql_close($connection);
  
?>