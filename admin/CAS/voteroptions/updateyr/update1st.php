<?php
	
	require 'dbcon.php';
			
			
			
	if($_POST['update']) // from button name="update"
	{
		$checkbox = $_POST['checkbox']; //from name="checkbox[]"
		$countCheck = count($_POST['checkbox']);
		
		for($i=0;$i<$countCheck;$i++)
		{
			
			
			$up_id  = $checkbox[$i];
			$studnum = mysql_query("SELECT studnum FROM vcas where stud_id = '$up_id'") or die(mysql_error());
						 while ($row = mysql_fetch_array($studnum)){
						 $studnumber = $row['studnum'];
			$sql = mysql_query("UPDATE vcas SET yearlevel='2nd year' where yearlevel = '1st year' and stud_id = '$up_id'") or die(mysql_error());
					mysql_query("UPDATE vbussc SET yearlevel='2nd year' where yearlevel = '1st year' and studnum = '$studnumber' and dept = 'CAS'") or die(mysql_error());
		}
			if($sql)
		{	
				header('Location: 1styr.php');
			}
			else
			{
				echo "Error: ".mysql_error();
			}
	}
	}
?>