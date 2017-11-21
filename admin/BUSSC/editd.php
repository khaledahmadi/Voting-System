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
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
        <title>DATE OF ELECTION</title>
</head>

   <style>
th {
	font: bold 11px "Trebuchet MS", Verdana, Arial, Helvetica,
	sans-serif;
	color: white;
	
	letter-spacing: 2px;
	text-transform: uppercase;
	text-align: left;
	padding: 6px 6px 6px 12px;
	background: #005511 ;
}

th.nobg {
	
	background: none;
}
td {
	
	background: #fff;
	padding: 6px 6px 6px 12px;
	color:black;
}


td.alt {
	background: #F5FAFA;
	color: #B4AA9D;
}
</style> 
<body>
<br>
<center>
DATE
<?php

/* 
        VIEW.PHP
        Displays all data from 'BUSSC' table
*/

        // connect to the database
        include('dbcon.php');

        // get results from database
        $result = mysql_query("SELECT * FROM date where org = 'bussc'") 
                or die(mysql_error());  
                
       
        
        echo "<table border='0' cellpadding='10'>";
        echo "<tr> <th>DATE START</th><th>DATE END</th> <th>Edit</th></tr>";

        // loop through results of database query, displaying them in the table
        while($row = mysql_fetch_array( $result )) {
                
                // echo out the contents of each row into a table
              echo "<tr>";
                echo '<td>' . $row['datestart'] . '</td>';
				echo '<td>' . $row['dateend'] . '</td>';
				
                echo '<td><a href="edit_date.php?dateid=' . $row['dateid'] . '">Edit</a></td>';

                echo "</tr>"; 
        } 

        // close table>
        echo "</table>";
?>


</body>
</html> 