<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LIST OF VOTERS</title>


       <style>
<link href="../../casadmin.css" rel="stylesheet" type="text/css">
</style> 
</head>
<body>
<table border = 0 align = "center">
<form action = "3rdyr.php" method = "post">
<th><input type = "submit" value = "3rd year"></form></th>

<form action = "2ndyr.php" method = "post">
<th><input type = "submit" value = "2nd year"></form></th>

<form action = "1styr.php" method = "post">
<th><input type = "submit" value = "1st year"></form></th>
</table>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script> 

<script>
$(document).ready(function() {
$("tr:nth-child(even)").addClass("even");

 });


</script>
<BR>
<BR>
<div id="container">
	<div id="listing">
    <center>UPDATE 1ST YEAR VOTER
    <!-- now we need to loop throguh and display our fields -->
	<?php require 'voter1st.php'; ?>
	<?php require 'update.php'; ?>
	</div>
</div><!-- end container -->

</body>
</html>
