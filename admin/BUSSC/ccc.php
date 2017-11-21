 
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
<link href="busscadmin.css" rel="stylesheet" type="text/css">

   <style>
th {
	font: bold 11px "Trebuchet MS", Verdana, Arial, Helvetica,
	sans-serif;
	color: black;
	border-right: 1px solid #C1DAD7;
	border-bottom: 1px solid #C1DAD7;
	border-top: 1px solid #C1DAD7;
	letter-spacing: 2px;
	text-transform: uppercase;
	text-align: left;
	padding: 6px 6px 6px 12px;
	background: #C04000 url(images/bg_header.jpg) no-repeat;
}

th.nobg {
	border-top: 0;
	border-left: 0;
	border-right: 1px solid #C1DAD7;
	background: none;
}
td {
	border-right: 1px solid #C1DAD7;
	border-bottom: 1px solid #C1DAD7;
	background: #fff;
	padding: 6px 6px 6px 12px;
	color:black;
}


td.alt {
	background: #F5FAFA;
	color: #B4AA9D;
}
</style> 
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
		$name = mysql_query("SELECT * from bussc")  or die(mysql_error()); 
		$rows = mysql_fetch_array( $name );
		$names = $rows['fname']." ".$rows['lname'];
		
        $result = mysql_query("SELECT b.candidateID,  fname,
							lname, yearlvl , course,  partylist, votes, position
								FROM bussc b left join res_bussc r on b.candidateID = r.candidateID order by b.candidateID")or die(mysql_error()); 
								
								
							/*	
								select s.candidatID, firstname, lastname, votes from
								student s left join cnvas c on  s.candidatID = c.candidateID order by c.votes
								
								
								select * from student s join canvass c N (s.candidate = c.candidateID)
       */
        
        echo "<div class='designtable'>";
         echo "<table>";
        echo "	 <td>Candidate Name</td>	<td>Course</td>	<td>Year</td> <td>Position</td> <td>Party List</td> <td>Votes</td></tr>";

        while($row = mysql_fetch_array( $result )) {
                
                // echo out the contents of each row into a table
                echo "<tr>";
				
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
<form action = "print/canvassing_excel.php" method = "post" target = "_self">
<input type = "submit" value = "Print Results" ></form>

</body>
</html> 