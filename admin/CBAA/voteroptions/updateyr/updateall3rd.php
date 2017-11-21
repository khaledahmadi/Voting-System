<?php 
include('dbcon.php');
$studnum = mysql_query("SELECT studnum FROM vcbaa where yearlevel = '3rd year'") or die(mysql_error());
						 while ($row = mysql_fetch_array($studnum)){
						 $studnumber = $row['studnum'];
						 
$update =  mysql_query("UPDATE vcbaa set yearlevel = '4th year' where yearlevel = '3rd year'")
 or die(mysql_error()); 
	mysql_query("UPDATE vbussc set yearlevel = '4th year' where studnum = '$studnumber' and yearlevel = '3rd year' and dept = 'CBAA'")
 or die(mysql_error());

 
header("Location:  /b/admin/CBAA/voteroptions/updateyr/3rdyr.php");
}

?>