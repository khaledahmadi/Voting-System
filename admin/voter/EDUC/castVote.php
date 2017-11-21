<?php
session_start();
$uname = $_SESSION['uname'];
include('dbcon.php');
	$id = $_POST['id'];	
$can_query = mysql_query("Select * from educ where candidateID='$id'")or die(mysql_error());
$votes_query = mysql_query("Select * from res_educ where candidateID='$id'")or die(mysql_error());
$stud_query = mysql_query("Select stud_id from veduc where username= '$uname'")or die(mysql_error());

	$row_can = mysql_fetch_array($can_query);
		$name = $row_can['fname']." ".$row_can['lname'];
		$position = $row_can['position'];
		$can_id = $row_can['candidateID'];
	
	$row_votes =mysql_fetch_array($votes_query);
		$votes = $row_votes['votes'];
		
	$row_stud = mysql_fetch_array($stud_query);
	$id = $row_stud['stud_id'];
	$voted_query = mysql_query("Select * from voted_educ where stud_id='$id' and position='$position'")or die(mysql_error());
if(mysql_num_rows($voted_query)!=1){
	if($votes == 0){
		$votes =0;
		$votes+=1;
		
			mysql_query("INSERT INTO res_educ SET candidateID='$can_id', candidate_name='$name', votes='$votes'  ")or die(mysql_error());
			mysql_query("INSERT INTO voted_educ SET stud_id='$id', position='$position' ")or die(mysql_error());
				echo " Your vote has been casted!";
	}else{
	$votes+=1;
	mysql_query("UPDATE  res_educ SET candidateID='$can_id', candidate_name='$name', votes='$votes' WHERE candidateID = '$can_id' ")or die(mysql_error());
	mysql_query("INSERT INTO voted_educ SET stud_id='$id', position='$position' ")or die(mysql_error());		
			echo " Your vote has been casted!";
	
	}
}else{
	echo"You already voted for this position!";
}


?>