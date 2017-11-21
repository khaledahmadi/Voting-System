<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	//unset($_SESSION['SESS_MEMBER_ID']);
	//unset($_SESSION['SESS_COURSE']);
	//unset($_SESSION['NAME']);
?>
<html>
<head>
<title>
Voting System
</title>
<link rel="icon" type="image/png" href="favicon.png" />
<link href="style.css" media="screen" rel="stylesheet" type="text/css" />
<!--sa poip up-->
<link href="admin/src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="admin/lib/jquery.js" type="text/javascript"></script>
<script src="admin/src/facebox.js" type="text/javascript"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('a[rel*=facebox]').facebox({
      loadingImage : 'admin/src/loading.gif',
      closeImage   : 'admin/src/closelabel.png'
    })
  })
</script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
</head>
<body>

<?php
if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
	foreach($_SESSION['ERRMSG_ARR'] as $msg) {
		echo '<div style="color: #000000; text-align: center;">',$msg,'</div><br>'; 
	}
	unset($_SESSION['ERRMSG_ARR']);
}
?>
    <div class="container">
        <img src="logo.png">
<form action="login.php" method="post">
    <div class="form-input">
        <input type="text" name="username" Placeholder="Matric No" requierd /></div>
        <div class="form-input">
            <input type="password" name="password" Placeholder="Password" required /></div>
    <span style="display: none;">Type :</span>
    
<select id="soflow" name="asas" >
    <option>Select an Option</option>
    <option>Admin</option>
    <option>Student</option> 
</select>
    <br><br>

<span>&nbsp;</span><span style="font-size: 11px; text-align: left; color:white;" >Not yet a member? Register <a rel="facebox" href="register.php">Here</a><br>Forgot Password? click <a href="#" onClick="MyWindow=window.open('pwordrecover.php','MyWindow','toolbar=no,location=no,directories=yes,status=yes,menubar=yes,scrollbars=yes,resizable=yes,width=300,height=200'); return false;">Here</a></span><br><br>
<span>&nbsp;</span><input id="btn" type="submit" value="Login" class="btn-login"/>
    
    
</form>
</div>
    
</body>
</html>