<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>

<center>
<h1>Voter list</h1>
<br>






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
<form action = "order.php" method = "post" target= "_self">
<tr><th><input type = "submit" value = "5th year" class = "one"></form></th>
<form action = "orderby.php" method = "post" target = "_self">
<th><input type = "submit" value = "4th year" class = "one"></form></th>
<form action = "order2.php" method = "post">
<th><input type = "submit" value = "3rd year"></form></th>
<form action = "order3.php" method = "post">
<th><input type = "submit" value = "2nd year"></form></th>
<form action = "order4.php" method = "post">
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
        $result = mysql_query("SELECT * FROM vbussc") 
                or die(mysql_error());  
                
        // display data in table
        
        echo "<table  STYLE='table-layout:fixed' border='0' cellpadding='10'>";
        echo "<tr><th>Student Number</th> <th>First Name</th> <th>Last Name</th>  <th>Course</th> <th>Year Level</th><th>Password</th> 
		<th></th</tr>";

        // loop through results of database query, displaying them in the table
        while($row = mysql_fetch_array( $result )) {
                
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

        // close table>
        echo "</table>";
		
		
?>

</center>


</body>
</html> 