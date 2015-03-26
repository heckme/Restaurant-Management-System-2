<?php
  	
		   $query = "SELECT * FROM logindetails";
         $db_result = mysql_query($query,$connection);
          while( $row = mysql_fetch_array($db_result)){
            echo
            "<tr>
			 <td>{$row['username']}</td>
             
               
            </tr>\n";
          }
?>