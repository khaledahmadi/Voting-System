<?php
session_start();
session_destroy();
?>
<!Doctype html>
<html lan='en'>
<head>
	<title>
		Voting System
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="jquery.js"></script>
	<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
</head>
<body>
<div id="wrapper">
	<div id="header"></div>
										
		<div id="cssmenu">
		<ul>
			<li class="first">
				
			<a href="../index.php" >Home</a></li>
			<li><a href="../department/department.php"  >Organizations</a></li>
			<div id="footer"><iframe name="right_side" src="" width="100%"  
			height="100%" frameBorder="0"></iframe>  </div>
			
			
		</ul>
		<br class="clearfix" />
	</div>
	
	<div id="slider">
		<div class="viewer">
			<div class="reel">
			
				
	<div id="pageWrapper">
		<div id="login">
		<!-- > <a href="register.php">Need an account? sign up for new account</a> -->
			<h1>Login</h1>
			<form action=''  method='post' id='logForm'>
			<table>
				<tr><td>Old Password:</td><td><input type="password" id='uname' name="uname"></td></tr>
				<tr><td>New Password</td><td><input type="password" id='newpassword' name="newpassword"></td></tr>
				<tr><td>Confirm Password:</td><td><input type="text" id='confirmpassword' name="confirmpassword"></td></tr>
				<tr><td colspan='2' align='center'><input type="button" id="log" name="login" value='Login'></td></tr>
			</table>
			</form>
			
		</div>
	</div>
	</div>
	<script type="text/javascript">
	$(document).ready(function(){
		$('#log').click(function(){
			var uname = $('#uname').val();
			var newpassword = $('#newpassword').val();
			var confirmpassword = $('#newpassword').val();
	
		if( uname != '' && newpassword != '' && confirmpassword !=''){
			$.ajax({
				url:'login.php',
				type:'post',
				data:$('#logForm').serialize(),
				
				success:function(data){
					if(!data){
						window.location = "vote.php";
						}else{
						alert(data);
					}
				}
			});
		}
		
		else if (uname!= newpassword && newpassword!=confirmpassword)
		{
		not equal
		}
		
		
		
		else{
			alert('Please fill out all the necessary information!');
		}
		});
	});
	</script>
</body>
</html>