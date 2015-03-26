<?php
  	
		   $query = "SELECT e.emp_id, e.emp_fname, e.emp_lname,  s.month, s.year, s.salary FROM employee_details as e LEFT  JOIN 
			 employee_salary as s on s.emp_id=e.emp_id ORDER BY e.emp_id";
			 $db_result = mysql_query($query,$connection);
          while( $row = mysql_fetch_array($db_result)){
            echo
           "<tr>
           <td>{$row['emp_id']}</td> 
           <td>{$row['emp_fname']}</td>
			  <td>{$row['emp_lname']}</td>
           <td>{$row['month']}</td>
           <td>{$row['year']}</td>
           <td>{$row['salary']}</td>
           </tr>\n";
          }
?>