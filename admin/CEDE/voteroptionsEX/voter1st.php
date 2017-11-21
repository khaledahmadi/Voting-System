
<?php


require 'dbcon.php'; 

$query = "SELECT * FROM vcede where yearlevel = '1st year'";

// run the query and store the results in the $result variable.
$result = mysql_query($query) or die(mysql_error());



 echo "<form method='post' action='delete1st.php' onSubmit='return confirm(`Are you sure you want to delete all 1st year voter?`)'>"; 
  echo "<table cellspacing='0' cellpadding='15' align = 'center'>";
  echo"
 
  		
  		<th>Student Number</th>
  		<th>First Name</th>
		<th>Last Name</th>
		<th>Course</th>
		<th>Year</th>
		<th>Username</th>
		<th>Password</th>
			<th>Birthday</th>
		";
  
if(mysql_num_rows($result) == 0) {
			echo "<script> alert('No 1st year Students Records Found');</script>";
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
		echo '<td>' .$pass = $row['datee'] . '</td>';

		
	echo 
			"<td><input type='checkbox' name='checkbox[]' id='checkbox[]'  value=$id /></td>";
		
    }
	
	// when the loop is complete, close off the list.
	echo "</table><p align = 'center'>
	 
	<input id='delete' type='submit' class='button' name='delete' value='Delete Selected Voter'/></p></form>";
}


?>
