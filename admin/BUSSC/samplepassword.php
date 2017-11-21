<?php

include("dbcon.php");


session_start();

if($_SERVER["REQUEST_METHOD"] == "POST")
{
// username and password sent from form 

$myusername=addslashes($_POST['username']); 



$sql="SELECT id FROM admin WHERE username='$myusername' and password='$mypassword' and org = 'buscc'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
$active=$row['active'];

$count=mysql_num_rows($result);


// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{
session_register("myusername");
$_SESSION['login_user']=$myusername;

header("location: admindepartment.php");
}
else 
{
$error="Your Login Name or Password is invalid";
}
}
?>













<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">



<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>ADMINISTRATOR</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />

<script type="text/javascript">
	
</script>
</head>


<body>
<div id="wrapper">
	<div id="header">
										
		<pre>					
							     
	</div>
	
<div id="slider">
		<div class="viewer">
			<div class="reel">
				
				
				
	
	
	
	
<div align="center">
<div style="width:450px; border: solid 0px green; " align="left">

<br>


<div style="margin:50px">

<form action="" method="post">
<label>Old Password:</label><input type="password" name="oldpassword" class="box" size=40/><br /><br />
<label>Password  : </label><input type="password" name="password" class="box" size=40/><br/><br />
<label>Verify Password : </label><input type="password" name="password2" class="box" size=40/><br/><br />
<input type="submit" value=" Submit "/><br />

</form>
<div style="font-size:20px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
</div>
</div>
</div>

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	</div>
	
	
	
		<br class="clearfix" />
	</div>
	
	
	
	
</div>
<div id="footer">
<p>	       </p>
</div>
</body>
</html>