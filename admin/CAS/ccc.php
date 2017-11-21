 
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
CANVASSING 

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
      
<link href="casadmin.css" rel="stylesheet" type="text/css">

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
		$name = mysql_query("SELECT * from cas")  or die(mysql_error()); 
		$rows = mysql_fetch_array( $name );
		$names = $rows['fname']." ".$rows['lname'];
		
        $result = mysql_query("SELECT b.candidateID,  fname,
							lname, yearlvl , course,  partylist, votes, position
								FROM cas b left join res_cas r on b.candidateID = r.candidateID order by b.candidateID")or die(mysql_error()); 
								
								
							/*	
								select s.candidatID, firstname, lastname, votes from
								student s left join cnvas c on  s.candidatID = c.candidateID order by c.votes
								
								
								select * from student s join canvass c N (s.candidate = c.candidateID)
       */
        
        echo "<div class='designtable'>";
         echo "<table>";
        echo "<tr><td>Candidate ID</td>	 <td>Candidate Name</td>	<td>Course</td>	<td>Year</td> <td>Position</td> <td>Party List</td> <td>Votes</td></tr>";

        while($row = mysql_fetch_array( $result )) {
                
                // echo out the contents of each row into a table
                echo "<tr>";
				echo '<td>' . $row['candidateID'] . '</td>';
                echo '<td>' . $row['fname'] ." ".$row['lname']. '</td>';
				echo '<td>' . $row['course'] . '</td>';
                echo '<td>' . $row['yearlvl'] . '</td>';
				echo '<td>' . $row['position'] . '</td>';
				echo '<td>' . $row['partylist'] . '</td>';
				echo '<td>' . $row['votes'] . '</td>';
	
               
        } 

        // close table>
		
	
		
		 echo "</tr>"; 
        echo "</table>";
?>
<form action = "print/canvassing_excel.php" metdod = "post" target = "_self">
<input type = "submit" value = "Print Results" ></form>

</body>
</html> 