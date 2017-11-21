<?php
	session_start();
	
	$uname = $_POST['uname'];
	$pword  = $_POST['pword'];
	$datee = $_POST['datee'];
	require('dbcon.php');
	$query = mysql_query("Select * from `vbussc` where `username`='$uname' and `password`='$pword' and `datee`='$datee'")or die(mysql_error());
	if(mysql_num_rows($query)==1){
		$_SESSION['uname'] = $uname;
		
	}else{
		header('index.php');
		echo"Information do not Match!";
	}


?>