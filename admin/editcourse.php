<?php
	include('../connect.php');
	$id=$_GET['id'];
	$results = $db->prepare("SELECT * FROM course WHERE id= :userid");
	$results->bindParam(':userid', $id);
	$results->execute();
	for($i=0; $rows = $results->fetch(); $i++){
?>
<form action="saveeditcourse.php" method="POST">
<input type="hidden" name="memids" value="<?php echo $id; ?>" />
Course<br>
<input type="text" name="course" value="<?php echo $rows['name']; ?>" /><br>
<input type="submit" value="Save" />
</form>
<?php
}
?>