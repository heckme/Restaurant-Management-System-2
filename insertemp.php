<?php
include 'session_files.php';
  
?>
<!doctype html>
<html>
<head>
<title>Insert Employee</title>
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
  <a href="insertemp.php" class="a1active">Insert employee details</a><br>
  <a href="deleteemp1.php" class="a1">Delete employee details</a><br>
  <a href="selectempmain.php" class="a1">View employee details</a><br>
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

<form action="insertemp1.php" method="post" >
<center>
<table>
<tr>
<td>First name  *</td>
<td><input type="text"  name="Firstname"  id="Firstname" required>  </td>
</tr>
<tr>
<td>Last name *</td>
<td><input type="text" name="Lastname" id="Lastname"  required></td>
</tr>

<tr>
<td>Addressline * </td>
<td><input type="text" name="Address" id="Address" required ></td>
</tr>
<tr>
<td> City *</td>
<td><input type="text" name="City" id="City" required ></td>
</tr>
<tr>
<td> Pincode * </td>
<td> <input type="number" name="Pincode" id="Pincode" required ></td>
</tr>
<tr>
<td>Contact Number *</td>
<td><input type="number" name="Contactnumber" id="Contactnumber" required ></td>
</tr>
<tr>
<td>Emailid (optional) </td>
<td><input type="text" name="Email" id="Email"></td>
</tr>
<tr>
<td> Gender * </td>
<td> <select name="Gender">
					 
                                         <option value="M">Male</option>
                                         <option value="F">Female</option>
                                         <option value="N">Not specified</option>
 </select></td>
</tr>
<tr>
<td> Jobtype *</td>
<td><select name="Jobtype">
						<option value="ft">Full time</option>
						<option value="pt">Part time</option>
 						</select>
 </td>
</tr>
<tr>
<td> Joindate *</td>
<td> <select name="Day">
					 
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

                                                    
                                                      <option value="2014">2014</option>
                                                    <option value="2015">2015</option>
 									</select>
 </td>
</tr>
<tr>
<td> Availaible week days *</td>
<td> <select name="AvailaibleWeek">
					 
                                         <option value="Monday-Wednesday">Monday-Wednesday</option>
                                         <option value="Wednesday-Sunday">Wednesday-Sunday</option>
                                         <option value="Anyday">Anyday</option>
                                         </select></td>
</tr>
<tr>
<td> Documents shown for proof * (any one)</td>
<td> <select name="Docs">
						<option value="Passport">Passport</option>
						<option value="Insurance">Insurance</option>
 						</select></td>
</tr>



</table>
 
<br>
 
   <input type="submit" value="INSERT EMPLOYEE DATA"  />   
   <br> <br>
  <input type="reset" value="RESET DATA">
 </form>
 <br>
 <div id="formdiv"></div>
</center>

 
 

 


 
</div>























</body>
</html>
