<html>
<head>
<link href="casadmin.css" rel="stylesheet" type="text/css">
<center>
<br>
Voter List

</center>
        <title>View Records</title>
</head>


<p ><body> 
	   
	   <p align = "center">You  may search by <strong> Student Number or Last Name</strong></p> 
	    <form  method="post" action="search_records.php?go"  id="searchform" target= "_self"> 
	     
		  <p align = "center"><input  type="text" name="searchtxt"> </p>
	      <p align = "center"><input  type="submit" name="submit" value="Search Records"> </p>
    </form> 
	</p> </body>
<table border = 0 align = "center">
<form action = "voteroptions/4thyear.php" method = "post" target = "_self">
<th><input type = "submit" value = "4th year"></form></th>

<form action = "voteroptions/3rdyr.php" method = "post">
<th><input type = "submit" value = "3rd year"></form></th>

<form action = "voteroptions/2ndyr.php" method = "post">
<th><input type = "submit" value = "2nd year"></form></th>

<form action = "voteroptions/1styr.php" method = "post">
<th><input type = "submit" value = "1st year"></form></th>
</table>
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
        $result = mysql_query("SELECT * FROM vcas") 
                or die(mysql_error());  
                
        // display data in table
        
         echo "<div class='designtable'>";
         echo "<table>";
        echo "<tr> <td>Student Number</td> <td>First Name</td> <td>Last Name</td>  <td>Course</td> <td>Year Level</td><td>Password</td> <td>Birthday</td> 
		</tr>";

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