<?php
// configuration
include('../connect.php');

// new data
$id = $_POST['memids'];
$a = $_POST['name'];
$b = $_POST['description'];
// query
$sql = "UPDATE party 
        SET name=?, description=?
		WHERE id=?";
$q = $db->prepare($sql);
$q->execute(array($a,$b,$id));
header("location: parties.php");

?>