<?php
session_start();
session_destroy();
?>
<!Doctype html>
<html lan='en'>
<head>
	<title>
		CEDESO Admin
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="jquery.js"></script>
	
</head>
<body>
<div id="wrapper">
	<div id="header">
	<pre>					          
						                <a href="../admindepartment.php"><img src="images/back.png" height="25"width="60"></a>
									</pre>
	</div>
	
	
	
			<div class="reel">
			
				
	<div id="pageWrapper">
	
		<div id="login">
	
			<h1>Login</h1>
			<form action=''  method='post' id='logForm'>
			<table>
				<tr><td><b>Username:</b></td><td><input type="text" id='uname' name="uname"></td></tr>
				<tr><td><b>Password:</b></td><td><input type="password" id='pword' name="pword"></td></tr>
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
			var pword = $('#pword').val();
	
		if( uname != '' && pword != ''){
			$.ajax({
				url:'login2.php',
				type:'post',
				data:$('#logForm').serialize(),
				success:function(data){
					if(!data){
						window.location = "index.php";
						}else{
						alert(data);
					}
				}
			});
		}else{
			alert('Please fill out all the necessary information!');
		}
		});
	});
	</script>
</body>
</html>