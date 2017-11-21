<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<center>
<img src="busscadmin.png">
<br>

</center>
        <title>View Records</title>
</head>
<body 
style=
"background-image:url(logo/back.jpg); 
background-size: cover;
background-position:right ; 
background-repeat: no-repeat;
background-position: right top;
min-height: .005%;">


<center>

<?php
/* 
        VIEW.PHP
        Displays all data from 'bussc' table
*/

        // connect to the database
        include('dbcon.php');

        // get results from database
        $result = mysql_query("SELECT * FROM cas") 
                or die(mysql_error());  
                
        // display data in table
        
        echo "<table  STYLE='table-layout:fixed' border='0' cellpadding='10'>";
        echo "<tr> <th>Candidate ID</th> <th>Student Number</th> <th>First Name</th> <th>Last Name</th> <th>Gender</th> <th>Course</th> <th>Year Level</th> <th>Position</th> 
		<th>Party</th> <th>Image</th>   <th></th</tr>";

        // loop through results of database query, displaying them in the table
        while($row = mysql_fetch_array( $result )) {
                
                // echo out the contents of each row into a table
                echo "<tr>";
                echo '<td>' . $row['candidateID'] . '</td>';
				echo '<td>' . $row['studnum'] . '</td>';
				echo '<td>' . $row['fname'] . '</td>';
				echo '<td>' . $row['lname'] . '</td>';
				echo '<td>' . $row['gender'] . '</td>';
				echo '<td>' . $row['course'] . '</td>';
				echo '<td>' . $row['yrlvl'] . '</td>';   
				echo '<td>' . $row['position'] . '</td>';
				echo '<td>' . $row['partylist'] . '</td>';
            echo "<td><img width='100' height='70' src='photo/".$row['image']."'></td>"; //      echo '<td>' . $row['image'] . '</td>';
				
                
                echo "</tr>"; 
        } 

        // close table>
        echo "</table>";
?>

</center>
</body>
</html> 