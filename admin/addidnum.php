<form action="saveidnum.php" method="POST">
ID Number<br>
<input type="text" name="idnum" value="" required="required" /><br>
Firstname<br>
<input type="text" name="fname" value="" required="required" /><br>
Lastname<br>
<input type="text" name="lname" value="" required="required" /><br>
Middlename<br>
<input type="text" name="mname" value="" /><br>
Course<br>
<select name="course">
	<?php
	include('../connect.php');
	$result = $db->prepare("SELECT * FROM course");
		$result->bindParam(':userid', $res);
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
		<option><?php echo $row['name']; ?></option>
	<?php
	}
	?>
</select><br>
    <div class="btn-save"><input type="submit" value="Save" /></div>
</form>