<?php
	
	require 'dbcon.php';
			
	if($_POST['delete']) // from button name="delete"
	{
		$checkbox = $_POST['checkbox']; //from name="checkbox[]"
		$countCheck = count($_POST['checkbox']);
		
		for($i=0;$i<$countCheck;$i++)
		{
			$del_id  = $checkbox[$i];
			
			$sql = "DELETE from vbussc where stud_id = $del_id";
			$result = mysql_query($sql) or die(mysql_error());
			
		}
			if($result)
		{	
				header('Location: index.php');
			}
			else
			{
				echo "Error: ".mysql_error();
			}
	}
?>