<?php
	include('../connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("DELETE FROM admin WHERE id= :memid");
	$result->bindParam(':memid', $id);
	$result->execute();
?>