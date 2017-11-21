<?php
/* 
 CONNECT-DB.PHP
 Allows PHP to connect to youro database
*/

 // Database Variables (edit with your own server information)
 $server = 'localhost';
 $user = 'root';
 $pass = '';
 $db = 'onlinevotingsystem';
 
 // Connect to Database
 $connection = mysql_connect($server, $user, $pass) 
 or die ("Could not connect to server ... \n" . mysql_error ());
 mysql_select_db($db) 
 or die ("Could not connect to database ... \n" . mysql_error ());


?>



LIST of CANDIDATES CEDE

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
        <title>List of Candidates</title>
</head>
<body>

<?php

/* 
        VIEW.PHP
        Displays all data from 'BUSSC' table
*/

        // connect to the database
        include('dbcon.php');

        // get results from database
        $result = mysql_query("SELECT * FROM cede") 
                or die(mysql_error());  
                
       
        
        echo "<table border='1' cellpadding='10'>";
        echo "<tr> <th>Candidate ID</th>	<th>Student Number</th>	<th>First Name</th> <th>Last Name</th> <th>Gender</th> <th>Course</th> <th>Year</th> <th>Position</th> <th>Partylist</th> <th>Image</th></tr>";

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
				echo '<td>' . $row['yearlvl'] . '</td>';
				echo '<td>' . $row['position'] . '</td>';
				echo '<td>' . $row['partylist'] . '</td>';
				echo "<td><img width='100' height='70' src='photo/".$row['image']."'></td>"; //  

                echo "</tr>"; 
        } 

        // close table>
        echo "</table>";
?>


</body>
</html> 