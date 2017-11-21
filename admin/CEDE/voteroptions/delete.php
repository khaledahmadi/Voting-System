<?php
	
	require 'dbcon.php';
			
			
			
	if($_POST['delete']) // from button name="delete"
	{
		$checkbox = $_POST['checkbox']; //from name="checkbox[]"
		$countCheck = count($_POST['checkbox']);
		
		for($i=0;$i<$countCheck;$i++)
		{
			
			
			$del_id  = $checkbox[$i];
			$studnum = mysql_query("SELECT studnum FROM vcede where stud_id = $del_id") or die(mysql_error());
						 while ($row = mysql_fetch_array($studnum)){
						 $studnumber = $row['studnum'];
			$sql = mysql_query("DELETE from vcede where stud_id = $del_id") or die(mysql_error());
					mysql_query("DELETE FROM vbussc where studnum = $studnumber") or die(mysql_error());
		}
			if($sql)
		{	
				header('Location: 5thyr.php');
			}
			else
			{
				echo "Error: ".mysql_error();
			}
	}
	}
?>