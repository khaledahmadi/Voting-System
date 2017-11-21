<?php
include('dbcon.php');
  
		$id= $_POST['id'];
	
		$query = mysql_query("SELECT * FROM cede WHERE candidateID='$id' ")or die(mysql_error());
		while($row = mysql_fetch_array($query))
		{
		
			$fname =$row['fname'];
			$lname=$row['lname'];
			$course=$row['course'];
			$year=$row['yearlvl'];
			$plist=$row['partylist'];
			$img = $row['image'];
		
		}
?>

<doctype html>
<html lan="en">
<body>
<script type="text/javascript" src="jquery.js"></script>

<a href="#" id='close' title='close' >x</a>	
<table id="profile">
<tr><th colspan="2">Profile</th></tr>

	
	
			<img class='images'src="images/<?php echo $img;?> " height=100 width=150>
		
		<tr><td>First name:<?php echo $fname; ?></td><td></td></tr>
		<tr><td>Last name:<?php echo $lname; ?></td><td></td></tr>
		<tr><td>Course:<?php echo $course; ?></td><td></td></tr>
		<tr><td>Year Level:<?php echo $year; ?></td><td></td></tr>
		<tr><td>Party List:<?php echo $plist; ?></td><td></td></tr>
		
		
	<input type="hidden" name="id" id="can_id" value='<?php echo $id; ?>'>
	<tr><td align='center' colspan=2><input type="button" id="castVote" name="vote" value="vote"></td></tr>
	
</table>	

<script type="text/javascript">
$(document).ready(function(){
	$('#castVote').click(function(){
		$.ajax({
			cache: 'false',
			type:"post",
			url:"castVote.php",
			data:"id="+$('#can_id').val(),
			success:function(data){
				alert(data);
				window.location='vote.php';
			}
		});
	});
	$('#close').click(function(){
		$('#mask').fadeOut('fast');
		$('#candidate_det').fadeOut('fast');
	});
	$('#mask').click(function(){
		$(this).fadeOut('fast');
		$('#candidate_det').fadeOut('fast');
	});
});

</script>
</body>
</html>