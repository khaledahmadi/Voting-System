<link href="../cbaaadmin.css" rel="stylesheet" type="text/css">
<?php


require 'dbcon.php'; 

$query = "SELECT * FROM vcbaa where yearlevel = '3rd year'";

// run the query and store the results in the $result variable.
$result = mysql_query($query) or die(mysql_error());



 echo "<form method='post' action='delete3rd.php' onSubmit='return confirm(`Are you sure you want to delete all 3rd year voter?`)'>"; 
 echo "<div class='designtable'>";
         echo "<table>
 
  		
  		<td>Student Number</td>
  		<td>First Name</td>
		<td>Last Name</td>
		<td>Course</td>
		<td>Year</td>
		<td>Username</td>
		<td>Password</td>
		<td>Birthday</td>
		<td>Action</td>
		";
  
if(mysql_num_rows($result) == 0) {
			echo "<script> alert('No 3rd year Students Records Found');</script>";
}
		else {
  

	
	
  while ($row = mysql_fetch_array($result)) {
   echo "<tr>";
     
		$id = $row['stud_id'];
		echo '<td>' .$username = $row['username'] . '</td>';
		echo '<td>' .$fname = $row['fname'] . '</td>';
		echo '<td>' .$lname = $row['lname'] . '</td>';
		echo '<td>' .$course = $row['course'] . '</td>';
		echo '<td>' .$yr = $row['yearlevel'] . '</td>';
		echo '<td>' .$uname = $row['username'] . '</td>';
		echo '<td>' .$pass = $row['password'] . '</td>';
		echo '<td>' .$datee= $row['datee'] . '</td>';

		
	echo 
			"<td><input type='checkbox' name='checkbox[]' id='checkbox[]'  value=$id /></td>";
		
    }
	
	// when the loop is complete, close off the list.
	echo "</table><p align = 'center'>
	 
	<input id='delete' type='submit' class='button' name='delete' value='Delete Selected Voter'/></p></form>";
}


?>
