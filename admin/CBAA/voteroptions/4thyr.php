<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LIST OF VOTERS</title>

<link href="../cbaaadmin.css" rel="stylesheet" type="text/css">


</head>
<body>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script> 

<script>
$(document).ready(function() {
$("tr:nth-child(even)").addClass("even");

 });


</script>

<div id="container">
	<div id="listing">
    <center><h3>LIST OF 4th YEAR VOTERS</h3>
    <!-- now we need to loop throguh and display our fields -->
	<?php require 'voter4th.php'; ?>
	</div>
</div><!-- end container -->

</body>
</html>
