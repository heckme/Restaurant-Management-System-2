<?php
  	
		   $EmpId = $_POST["EmpId"];

$TotalHours= $_POST["whours"];

$ForMonth= $_POST["Month"];

$ForYear = $_POST["Year"];





$queryid = mysql_query("SELECT * FROM employee_details WHERE emp_id=$EmpId");

$resultid = mysql_fetch_array($queryid);

$id1 = $resultid['emp_id'];

/*if((!$id1))
{
goto x;
}*/





$query = mysql_query("SELECT emp_jobtype FROM employee_details WHERE emp_id = ".$EmpId);

$result = mysql_fetch_array($query);

$jt = $result['emp_jobtype'];



$querytax = mysql_query("SELECT tax FROM salary_generaldetails");

$resulttax = mysql_fetch_array($querytax);

$tax = $resulttax['tax'];



$querybonus = mysql_query("SELECT bonus FROM salary_generaldetails ");

$resultbonus = mysql_fetch_array($querybonus);

$bonus = $resultbonus['bonus'];







x:

/*

if((!$id1))
{
echo "
<h1>
Id specified does not exist! Try again.
</h1>
<br>
";
echo "
<br>
<a href='insertsalary.php'>
Go back to insert salary
</a>
";
goto y;
}*/

if($jt == "ft")

{

$querymonth = mysql_query("SELECT month FROM  employee_salary WHERE emp_id=".$EmpId);

$resultmonth = mysql_fetch_array($querymonth);

$salmonth = $resultmonth['month'];

$queryyear = mysql_query("SELECT year FROM  employee_salary WHERE emp_id=".$EmpId);

$resultyear = mysql_fetch_array($queryyear);

$salyear = $resultyear[	'year'];



if( ($salyear == $ForYear) and ($salmonth == $ForMonth))

{

echo "
<h2>
SALARY FOR SPECIFIED MONTH AND YEAR FOR EMPLOYEE ID $EmpId ALREADY EXISTS!
</h2>
";	

echo "
<br>
<a href='insertsalary.php'>
Go back to add salary.
</a>
<br>
<br>
OR 
<br>
<br>
<a href='updatesalary.php'>
Update existing salary
</a>
";



}

else

{

$queryft = mysql_query("SELECT salary_perhour_ft FROM salary_generaldetails");

$resultft = mysql_fetch_array($queryft);

$salft = $resultft['salary_perhour_ft'];



$InitialSalary = ($TotalHours * $salft) + $bonus;
$Salary = ($InitialSalary*$tax)/100;
$FinalSalary = $InitialSalary-$Salary;


echo "Salary of employee $EmpId with working hours $TotalHours for month $ForMonth /$ForYear along with tax $tax % and bonus $bonus is 
<h1>
$FinalSalary euros
</h1>
";

mysql_query("INSERT INTO employee_salary VALUES ('$EmpId', '$ForMonth','$ForYear','$FinalSalary')");	

echo "
<br>
Salary Inserted. 
<br>
";



}

}





if($jt == "pt")

{

$querymonth = mysql_query("SELECT month FROM  employee_salary WHERE emp_id=".$EmpId);

$resultmonth = mysql_fetch_array($querymonth);

$salmonth = $resultmonth['month'];

$queryyear = mysql_query("SELECT year FROM  employee_salary WHERE emp_id=".$EmpId);

$resultyear = mysql_fetch_array($queryyear);

$salyear = $resultyear['year'];



if( ($salyear == $ForYear) and ($salmonth == $ForMonth))

{

echo "
<h2>
SALARY FOR SPECIFIED MONTH AND YEAR FOR EMPLOYEE ID $EmpId ALREADY EXISTS!
</h2>
";	

echo "
<br>
<a href='insertsalary.php'>
Go back to add salary.
</a>
<br>
<br>
OR 
<br>
<br>
<a href='updatesalary.php'>
Update existing salary
</a>
";



}

else

{

$querypt = mysql_query("SELECT salary_perhour_pt FROM salary_generaldetails");

$resultpt = mysql_fetch_array($querypt);

$salpt = $resultpt['salary_perhour_pt'];



$InitialSalary = ($TotalHours * $salpt) + $bonus;
$Salary = ($InitialSalary*$tax)/100;
$FinalSalary = $InitialSalary-$Salary;

echo "Salary of employee $EmpId with working hours $TotalHours for month $ForMonth /$ForYear along with tax $tax % and bonus $bonus is 
<h1>
$FinalSalary euros
</h1>
";


mysql_query("INSERT INTO employee_salary VALUES ('$EmpId', '$ForMonth','$ForYear','$FinalSalary')");	

echo "
<br>
Salary Inserted. 
<br>
";



}

}

y:
echo "
<br>
<a href='homepage.php'>
Go back to homepage
</a>
";
?>