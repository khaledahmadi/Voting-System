<?php
/* 
 CONNECT-DB.PHP
 Allows PHP to connect to your database
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
<br>
<center>

VIEW CANDIDATES 

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<link href="busscadmin.css" rel="stylesheet" type="text/css">
   <style>

</style>        <title>List of Candidates</title>
</head>
<body>
<br>
<center>
<?php

/* 
        VIEW.PHP
        Displays all data from 'BUSSC' table
*/

        // connect to the database
        include('dbcon.php');

        // get results from database
        $result = mysql_query("SELECT * FROM bussc") 
                or die(mysql_error());  
                
       
        
        echo "<div class='designtable'>";
         echo "<table>";
        echo "<tr>	<td>Student Number</td>	<td>First Name</td> <td>Last Name</td> <td>Gender</td> <td>Course</td> <td>Year</td> <td>Position</td> <td>Partylist</td> <td>Image</td> ";

        // loop through results of database query, displaying them in the table
        while($row = mysql_fetch_array( $result )) {
                
                // echo out the contents of each row into a table
                echo "<tr>";
               
				echo '<td>' . $row['studnum'] . '</td>';
                echo '<td>' . $row['fname'] . '</td>';
				echo '<td>' . $row['lname'] . '</td>';
				echo '<td>' . $row['gender'] . '</td>';
				echo '<td>' . $row['course'] . '</td>';
				echo '<td>' . $row['yearlvl'] . '</td>';
				echo '<td>' . $row['position'] . '</td>';
				echo '<td>' . $row['partylist'] . '</td>';
				echo "<td><img width='100' height='70' src='photo/".$row['image']."'></td>"; //      echo '<td>' . $row['image'] . '</td>';

                echo "</tr>"; 
        } 

        // close table>
        echo "</table>";
?>


</body>
</html> 