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
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
        <
 <title>       <title>List of Candidates</title>
</head>
<body>

<?php

/* 
        VIEW.PHP
        Displays all data from 'BUSSC' table
*/

        // connect to the database
        include('dbcon.php');

  
?>
<html>
<style>
.button {
    border: 1px solid #006;
    background: brown;
	width: 135px;
 height: 60px;
  font-size: 21;
}
</style>
<br>
<br>
<h1 align="center"> Password and Username Settings</h1>
<table border = 0 align = "center">
<br>

<table border = 0 align = "center">

<form action = "changepassword.php" method = "post">
<th><input type = "submit" value = "password" class="button" ></form></th>

<form action = "changeusername.php" method = "post">
<th><input type = "submit" value = "username" class="button" ></form></th>

</table>
</html>
</body>

</html> 