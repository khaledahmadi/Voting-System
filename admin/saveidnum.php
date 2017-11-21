<?php
session_start();
include('../connect.php');
$a = $_POST['idnum'];
$b = 'notuse';
$c = $_POST['course'];
$d = $_POST['lname'].', '.$_POST['fname'].' '.$_POST['mname'];

// query
$sql = "INSERT INTO list_stu_num (id_number,status,name,course) VALUES (:a,:b,:c,:d)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$d,':d'=>$c));
header("location: idnumbers.php");


?>