<?php
session_start();
include('../connect.php');

// new data
$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
	$image_size= getimagesize($_FILES['image']['tmp_name']);
		if ($image_size==FALSE) {
		
			echo "That's not an image!";
			
		}else{
		move_uploaded_file($_FILES["image"]["tmp_name"],"candidates/" . $_FILES["image"]["name"]);
		$name = $_POST['name'];
		$position = $_POST['position'];
		$location=$_FILES["image"]["name"];
		$d=$_POST['party'];
		$e=$_POST['course'];
// query
$sql = "INSERT INTO candidates (name,position,image,party,course) VALUES (:a,:b,:c,:d,:e)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$name,':b'=>$position,':c'=>$location,':d'=>$d,':e'=>$e));
header("location: candidates.php");
}


?>