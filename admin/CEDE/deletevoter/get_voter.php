
<?php


require 'dbcon.php'; 

$query = "SELECT * FROM vcede";

// run the query and store the results in the $result variable.
$result = mysql_query($query) or die(mysql_error());

if ($result) {
  
  // create a new form and then put the results
  // indto a table.
  echo "<form method='post' action='delete.php' onSubmit='return confirm(`Are you sure you want to save changes?`)'>"; 
  echo "<table cellspacing='0' cellpadding='15' align = 'center'>
  		
  		<th>Student Number</th>
  		<th>First Name</th>
		<th>Last Name</th>
		<th>Course</th>
		<th>Year</th>
		<th>Username</th>
		<th>Password</th>
		
		";
	
	
  while ($row = mysql_fetch_array($result)) {
   echo "<tr>";
     
		$id = $row['stud_id'];
		echo '<td>' .$studnum = $row['studnum'] . '</td>';
		echo '<td>' .$fname = $row['fname'] . '</td>';
		echo '<td>' .$lname = $row['lname'] . '</td>';
		echo '<td>' .$course = $row['course'] . '</td>';
		echo '<td>' .$yr = $row['yearlevel'] . '</td>';
		echo '<td>' .$uname = $row['username'] . '</td>';
		echo '<td>' .$pass = $row['password'] . '</td>';
		

		
	echo 
			"<td><input type='checkbox' name='checkbox[]' id='checkbox[]'  value=$id /></td>";
		
    }
	
	// when the loop is complete, close off the list.
	echo "</table><p align = 'center'>
	 
	<input id='delete' type='submit' class='button' name='delete' value='Delete Selected Voter'/></p></form>";
}

?>
