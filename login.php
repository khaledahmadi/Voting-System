<?php
include("connect.php");
	//Start session
	session_start();
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	//Connect to mysql server
	$link = mysql_connect('localhost','root',"");
	if(!$link) {
		die('Failed to connect to server: ' . mysql_error());
	}
	
	//Select database
	$db = mysql_select_db('onlinevoting', $link);
	if(!$db) {
		die("Unable to select database");
	}
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
	//Sanitize the POST values
	$login = clean($_POST['username']);
	$password = clean($_POST['password']);
	$position = clean($_POST['asas']);
	$stat='notvoted';
	
	//Input Validations
	
	
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: index.php");
		exit();
	}
	
	//Create query
	if($position=='Admin') {
	$qry="SELECT * FROM admin WHERE username='$login' AND password='$password'";
	}
	if($position=='Student') {
		$query="select * from students where status='voted'";
		$result=mysqli_query($con,$query);
		if($result){
			echo  "<script>alert('This $login is Already voted')</script>";
		}
		else {
	$qry="SELECT * FROM students WHERE id='$login' AND password='$password'";
	}}
	$result=mysql_query($qry);
	
	//Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) > 0) {
			//Login Successful
			if($position=='Student') {
			session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['username'];
			$_SESSION['SESS_COURSE'] = $member['course'];
			$_SESSION['NAME'] = $member['name'];
			session_write_close();
			header("location: candidates_list.php");
			exit();
			}
			if($position=='Admin') {
			session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['id'];
			session_write_close();
			header("location: admin/index.php");
			exit();
			}
		}else {
			//Login failed
			header("location: index.php");
			exit();
		}
	}else {
		die("Query failed");
	}
?>