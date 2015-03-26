<?php
        
$query = "SELECT * FROM employee_salary ORDER BY emp_id";

$db_result = mysql_query($query,$connection);

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