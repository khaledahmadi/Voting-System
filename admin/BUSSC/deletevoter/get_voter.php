
<?php


require 'dbcon.php'; 

$query = "SELECT * FROM vbussc";

// run the query and store the results in the $result variable.
$result = mysql_query($query) or die(mysql_error());

if ($result) {
  
  // create a new form and then put the results
  // indto a table.
  echo "<center>";
  echo "<form method='post' action='delete.php' onSubmit='return confirm(`Are you sure you want to save changes?`)'>"; 
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
		echo '<td>' .$pass = $row['datee'] . '</td>';

		
	echo 
			"<td><input type='checkbox' name='checkbox[]' id='checkbox[]'  value=$id /></td>";
		
    }
	
	// when the loop is complete, close off the list.
	echo "</table><p align = 'center'>
	 
	<input id='delete' type='submit' class='button' name='delete' value='Delete Selected Voter'/></p></form>";
}

?>
