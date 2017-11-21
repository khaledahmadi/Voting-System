<?php
	
	require 'dbcon.php';
			
			
			
	if($_POST['delete']) // from button name="delete"
	{
		$checkbox = $_POST['checkbox']; //from name="checkbox[]"
		$countCheck = count($_POST['checkbox']);
		
		for($i=0;$i<$countCheck;$i++)
		{
			
			
			$del_id  = $checkbox[$i];
			$studnum = mysql_query("SELECT studnum, fname, lname, course, yearlevel, username, password, datee  FROM vcbaa where stud_id = $del_id") or die(mysql_error());
						 while ($row = mysql_fetch_array($studnum))
						 {
						 $studnumber = $row['studnum'];
						 	 $fname = $row['fname'];
							  $lname = $row['lname'];
							   $course = $row['course'];
							    $yearlevel = $row['yearlevel'];
								 $username = $row['username'];
								  $password = $row['password'];
								   $datee = $row['datee'];
								   $dept="CBAA";
								   mysql_query("INSERT INTO deletevoter(ddate) VALUES(now()) where stud_id = $del_id" );
			$sql = mysql_query("DELETE from vcbaa where stud_id = $del_id") or die(mysql_error());
					mysql_query("DELETE FROM vbussc where studnum = $studnumber") or die(mysql_error());
						mysql_query("Insert deletevoter set studnum ='$username', fname='$fname', lname='$lname',  course='$course',  yearlevel='$yearlevel' , password='$password', dept='$dept' ,datee='$datee'") or die(mysql_error());
					
		}
			if($sql)
		{	
				header('Location: 3rdyr.php');
			}
			else
			{
				echo "Error: ".mysql_error();
			}
	}
	}
?>