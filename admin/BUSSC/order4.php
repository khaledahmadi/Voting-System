<html>
<p align = 'center'><font size = '20'>All 1st Year Students</font></p>
<?php
include('dbcon.php');

$order = mysql_query("SELECT * FROM vbussc WHERE yearlevel = '1st year'")or die(mysql_error()); 

echo "<table  STYLE='table-layout:fixed' border='0' cellpadding='10' align = 'center'>";
        echo "<tr><th>Student Number</th> <th>First Name</th> <th>Last Name</th>  <th>Course</th> <th>Year Level</th><th>Password</th> 
		<th></th</tr>";
if(mysql_num_rows($order) == 0) {
			echo "<script> alert('No 1st year Students Records');</script>";
		}
		else {
   
        while($row = mysql_fetch_array( $order )) {
                
                // echo out the contents of each row into a table
                echo "<tr>";
               
				echo '<td>' . $row['studnum'] . '</td>';
				echo '<td>' . $row['fname'] . '</td>';
				echo '<td>' . $row['lname'] . '</td>';
				echo '<td>' . $row['course'] . '</td>';
				echo '<td>' . $row['yearlevel'] . '</td>';
				echo '<td>' . $row['password'] . '</td>';
			
				
				
                
                echo "</tr>"; 
				}
				echo "</table>";
				}
			
		
		
	
				
				
?>
</html>