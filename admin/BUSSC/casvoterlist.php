<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<link href="busscadmin.css" rel="stylesheet" type="text/css">

<center>
<br><br>
COLLEGE OF ARTS AND SCIENCES STUDENT COUNCIL (CASSC) Voter list
</center>
        <title>View Records</title>
</head>

<body> 

<center>

<?php
/* 
        VIEW.PHP
        Displays all data from 'bussc' table
*/

        // connect to the database
        include('dbcon.php');

        // get results from database
        $result = mysql_query("SELECT * FROM vcas") 
                or die(mysql_error());  
                
        // display data in table
        
       echo "<div class='designtable'>";
         echo "<table>";
        echo "<tr><td>Student Number</td> <td>First Name</td> <td>Last Name</td>  <td>Course</td> <td>Year Level</td><td>Password</td> 
		<td>Birthday</td</tr>";

        // loop through results of database query, displaying them in the table
        while($row = mysql_fetch_array( $result )) {
                
                // echo out the contents of each row into a table
                echo "<tr>";
                
				echo '<td>' . $row['username'] . '</td>';
				echo '<td>' . $row['fname'] . '</td>';
				echo '<td>' . $row['lname'] . '</td>';
				echo '<td>' . $row['course'] . '</td>';
				echo '<td>' . $row['yearlevel'] . '</td>';
				echo '<td>' . $row['password'] . '</td>';
			echo '<td>' . $row['datee'] . '</td>';
				
				
                
                echo "</tr>"; 
        } 

        // close table>
        echo "</table>";
		
		
?>

</center>


</body>
</html> 