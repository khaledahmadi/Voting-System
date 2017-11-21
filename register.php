
<script type="text/javascript">
function validateForm()
{
var a=document.forms["frmOne"]["password"].value;
var b=document.forms["frmOne"]["rpassword"].value;
if (a!=b)
  {
  alert("password mismatch");
  return false;
  }
}
   
</script>
<form NAME = "frmOne" action="save1.php" method="POST" onsubmit="return validateForm()">
    <div id="regiser">
        Matric No<br>
<input type="text" name="matric" value="" /><br>
Username<br>
<input type="text" name="username" value="" /><br>
        Email<br>
<input type="email" name="email" value="" /><br>
        Phone<br>
<input type="number" name="phone" value="" /><br>
       Faculty<br>
<select name="faculty" id="soflow">
	<?php
	include('connect.php');
	$result = $db->prepare("SELECT * FROM party");
		$result->bindParam(':userid', $res);
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
		<option><?php echo $row['name']; ?></option>
	<?php
	}
	?>
</select><br>
              Program<br>
<select name="course" id="soflow">
	<?php
	include('connect.php');
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
Password<br>
<input type="password" name="password" value="" /><br>
<!--Re-enter Password<br>
<input type="password" name="rpassword" value="" /><br>-->
    Question<br>
    
<select id="soflow" name="question">
<option>what is your favorite color</option>
<option>what is your favorite movie</option>
<option>what is your favorite singer</option>
<option>what is your favorite pet</option>
<option>what is your favorite cartoon character</option>
</select>
<br>
Answer<br>
<input type="text" name="ans" value="" /><br><br>
         </div>
<div class="btn-save"><input type="submit" value="Save"/></div>
       
</form>