<?php
// configuration
include('../connect.php');

// new data
$id = $_POST['memids'];
$a = $_POST['course'];
// query
$sql = "UPDATE course 
        SET name=?
		WHERE id=?";
$q = $db->prepare($sql);
$q->execute(array($a,$id));
header("location: course.php");

?>