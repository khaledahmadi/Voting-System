<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LIST OF VOTERS</title>
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
	background: #CAE8EA url(images/bg_header.jpg) no-repeat;
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
}</style>


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

<div id="container">
	<div id="listing">
    <h1 align = "center">Update 2nd Year Voter</h1>
    <!-- now we need to loop throguh and display our fields -->
	<?php require 'voter2nd.php'; ?>
	<?php require 'update2.php'; ?>
	</div>
</div><!-- end container -->

</body>
</html>
