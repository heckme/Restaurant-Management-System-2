<?php 
	$query = "SELECT * FROM salary_generaldetails";
			$db_result = mysql_query($query,$connection);
          while( $row = mysql_fetch_array($db_result)){
            echo
            "<tr>
			 <td>{$row['salary_perhour_ft']}</td>
             <td>{$row['salary_perhour_pt']}</td>
             <td>{$row['tax']}</td>
             <td>{$row['bonus']}</td>
               
            </tr>\n";
          }


?>