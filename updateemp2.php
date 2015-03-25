<?php
include 'session_files.php';
$EmpId = $_POST['EmpId'];

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

if(empty($_POST['EmpId'])){
        $valid=false;
         
        goto c;
    }
    else {
$query = "SELECT * FROM employee_details WHERE emp_id = ".$EmpId;

$db_result = mysql_query($query,$connection);
}
c:
?>























<!doctype html>
<html>
<head>
<title> Employee Update</title>
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
  <a href="updateemp.php" class="a1active ">Update employee details</a><br>
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
<?php
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

?>
<h1>OLD DETAILS OF EMPLOYEE</h1><br><br><br>
 </center>
<table border="1" class="table1" >
      <thead>
        <tr>
          <th>Id</th><br />
          <th>Employee First_Name</th><br />
          <th>Employee Last_Name</th><br />
          <th>Employee Address</th><br />
          <th>City</th><br />
          
          <th>Pincode</th><br />
          <th>Gender</th><br />
          <th>Employee Contact Number</th><br />
          <th>Employee Job type</th><br />
          <th>Join day</td><br />
          <th>Join month</td><br />
          <th>Join year</td><br />
         
          <th>Weeks availaible</td><br />
          <th>Documents for Proof </td><br />
          <th>Email id</td><br />
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
              <td>{$row['emp_address']}</td>
              <td>{$row['emp_city']}</td>
    
	          <td>{$row['emp_pincode']}</td>
              <td>{$row['emp_gender']}</td>
              <td>{$row['emp_contactno']}</td> 
			  <td>{$row['emp_jobtype']}</td> 
			  <td>{$row['emp_joinday']}</td>
			  <td>{$row['emp_joinmonth']}</td>
			  <td>{$row['emp_joinyear']}</td>
		
			  <td>{$row['emp_availaibleweekday']}</td> 
			  <td>{$row['emp_docs']}</td> 
			  <td>{$row['emp_emailid']}</td> 
			   
            </tr>\n";
          }
        ?>
      </tbody>

    </table>


<br><br>
    <center>Enter new details for Emplyee number <?php echo $EmpId ?> <br><br>
    <form action="updateemp3.php" method="post">
  <input type="hidden" name='EmpId' readonly value='<?php echo $EmpId ?>'>
 
    <table>
    <tr>
    <td>First name </td>
    <td><input type="text" name="Firstname"  ></td>
    </tr>
    
    <tr>
    <td>Last name  </td>
    <td><input type="text" name="Lastname"  ></td>
    </tr>
    
    
    <tr>
    <td>Addressline  </td>
    <td><input type="text" name="Address"  ></td>
    </tr>
    
     
    <tr>
    <td>City   </td>
    <td><input type="text" name="City"  ></td>
    </tr>
    
    
      <tr>
    <td>   Pincode    </td>
    <td>   <input type="text" name="Pincode"  >  </td>
    </tr>
    
    
     <tr>
    <td>   Contact Number  </td>
    <td> <input type="text" name="Contactnumber"  >    </td>
    </tr>
    
     <tr>
    <td>  Emailid   </td>
    <td>   <input type="text" name="Email" >  </td>
    </tr>
    
    
     <tr>
    <td> Gender    </td>
    <td>   <select name="Gender">
					                          <option></option>
                                         <option value="M">Male</option>
                                         <option value="F">Female</option>
                                         <option value="N">Not specified</option>
 </select>  </td>
    </tr>
    
    
    <tr>
    <td>   Jobtype  </td>
    <td>   <select name="Jobtype">
						<option></option>						
						<option value="ft">Full time</option>
						<option value="pt">Part time</option>
 						</select>  </td>
    </tr>
    
    
    <tr>
    <td>   Joindate  </td>
    <td>   <select name="Day">
					 									<option></option>	
                                         <option value="01">01</option>
                                         <option value="02">02</option>
                                         <option value="03">03</option>
                                         <option value="04">04</option>
                                         <option value="05">05</option>
                                         <option value="06">06</option>
                                         <option value="07">07</option>
                                         <option value="08">08</option>
                                         <option value="09">09</option>
                                         <option value="10">10</option>
                                         <option value="11">11</option>
                                         <option value="12">12</option>
                                         <option value="13">13</option>
                                         <option value="14">14</option>
                                         <option value="15">15</option>
                                         <option value="16">16</option>
                                         <option value="17">17</option>
                                         <option value="18">18</option>
                                         <option value="19">19</option>
                                         <option value="20">20</option>
                                         <option value="21">21</option>
                                         <option value="22">22</option> 
                                         <option value="23">23</option>
                                         <option value="24">24</option>
                                         <option value="25">25</option>
                                         <option value="26">26</option>
                                         <option value="27">27</option>
                                         <option value="28">28</option>
                                         <option value="29">29</option>
                                         <option value="30">30</option>
                                         <option value="31">31</option>
 
                               
                            
                                  </select>
   
                          
                               
                                  <select name="Month">
                                
                                        <option></option>	
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
                                 
                                  
                                  <select name="Year">

                                                    <option></option>	
                                                      <option value="2014">2014</option>
                                                    <option value="2015">2015</option>
 									</select>
   </td>
    </tr>
    
    
    <tr>
    <td>  Availaible week days   </td>
    <td>   <select name="AvailaibleWeek">
					 <option></option>
                                         <option value="Monday-Wednesday">Monday-Wednesday</option>
                                         <option value="Wednesday-Sunday">Wednesday-Sunday</option>
                                         <option value="Anyday">Anyday</option>
                                         </select>
                                           </td>
    </tr>
    
    
    
    <tr>
    <td>  Documents shown for proof (any one)   </td>
    <td>    <select name="Docs"><option></option>
						<option value="Passport">Passport</option>
						<option value="Insurance">Insurance</option>
 						</select>  </td>
    </tr>
    </table>  <br>
     <input type="submit" value="SUBMIT DATA">
 </form>

    
    

 
 
  


     

		





<?php

 a:
b:
 echo "<br>";
 
 
 echo "<a href='updateemp.php'>Back to update employee page</a>";
 echo "<br>";
 echo "<a href='homepage.php'>Back to home page</a>";
mysql_close($connection);

?>   

 </center>
      
</div>

 
</body>
</html>
