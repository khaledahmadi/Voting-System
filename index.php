

<!doctype html>
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
 <div class="container">
        <img src="logo.png">
<form method="post" action="index.php">
<div class="form-input">
<input type="text" name="matric" placeholder="Matric No" required/></div>
<div class="form-input">
<input type="password" name="pass" placeholder="Password" required /></div>
<br><br>
<select name="type" id="soflow">
<option value="" > Type </option>
<option> Student </option>
<option> Admin </option>
</select>
<br><br>

<span>&nbsp;</span><span style="font-size: 11px; text-align: left; color:white;" >Not yet a member? Register <a rel="facebox" href="register.php">Here</a><br>Forgot Password? click <a href="#" onClick="MyWindow=window.open('pwordrecover.php','MyWindow','toolbar=no,location=no,directories=yes,status=yes,menubar=yes,scrollbars=yes,resizable=yes,width=300,height=200'); return false;">Here</a></span><br><br>
    
    <span>&nbsp;</span><Button type="submit" name="register"> LOGIN </Button>
</form>
</div>
</body>
</html>


<?php
include("connect.php");
if(isset($_POST["register"])){
	$matric=$_POST["matric"];
$password=$_POST["pass"];	
 $type=$_POST["type"];
 	
    if($type=='Student'){
		$query1="SELECT * From students where id='$matric' AND status='voted'";
		$result1=mysqli_query($con, $query1) or die("invalid");
		$row1=mysqli_fetch_array($result1, MYSQLI_BOTH);
		if($row1){
			echo "<script>alert('This Matric $matric is already voted') </script>";
		} 
		else {
		$query="SELECT * From students where id='$matric' AND password='$password'";
		$result=mysqli_query($con, $query) or die("invalid");
		$row=mysqli_fetch_array($result, MYSQLI_BOTH);
		if($row){
			session_start();
			$_SESSION['SESS_MEMBER_ID'] = $row['id'];
			$_SESSION['SESS_COURSE'] = $row['course'];
			$_SESSION['NAME'] = $row['username'];
			echo "<script>alert('welcome') </script>";
			header("location:candidates_list.php");
		}
		else {
		echo "<script>alert('Invalid Matric/Password') </script>";
	}
	}
	}
	elseif($type=='Admin'){
		$query="SELECT * FROM admin where username='$matric' AND password='$password'";
		$result=mysqli_query($con, $query);
		$row=mysqli_fetch_array($result, MYSQLI_BOTH);
		if($row){
			session_start();
        $_SESSION['SESS_MEMBER_ID'] = $row['id'];
			echo "<script>alert('welcome $row[2]') </script>";
			header("location: admin/index.php");

		}
		else {
			echo "<script>alert('Invalid Matric/Password'') </script>";
	}
	}
}
?>