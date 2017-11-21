<?php
session_start();
include('../connect.php');
$a = $_POST['course'];
// query
$sql = "INSERT INTO course (name) VALUES (:a)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a));
header("location: course.php");
?>