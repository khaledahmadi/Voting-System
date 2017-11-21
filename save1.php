<?php
include('connect.php');
$matric=$_POST['matric'];
$username=$_POST["username"];
$email=$_POST['email'];
$phone=$_POST["phone"];
$faculty=$_POST["faculty"];
$course=$_POST["course"];
$password=$_POST["password"];
$question=$_POST["question"];
$ans=$_POST["ans"];

$e='notuse';
$f='notvoted';
$g='used';

$query1="select * from students where id='$matric'";
$result1=mysqli_query($con,$query1);
$row=mysqli_fetch_array($result1,MYSQLI_BOTH);
if($row>0){
	echo  "<script>alert('This $matric is Already Exist')</script>";
}
else{
$query="Insert into students values('$matric','$username','$email','$phone','$faculty','$course','$password','$question','$ans','$f')";
$result=mysqli_query($con,$query) or die("invalid");
if($result>0){
	echo "<script>alert('Successfully Added')</script>";
	header("location:index.php");
}
else echo "<script>alert('not Added')</script>";
}

?>