<?php 
include('dbcon.php');
$studnum = mysql_query("SELECT studnum FROM vcede where yearlevel = '3rd year'") or die(mysql_error());
						 while ($row = mysql_fetch_array($studnum)){
						 $studnumber = $row['studnum'];
						 
$update =  mysql_query("UPDATE vcede set yearlevel = '4th year' where yearlevel = '3rd year'")
 or die(mysql_error()); 
	mysql_query("UPDATE vbussc set yearlevel = '4th year' where studnum = '$studnumber' and yearlevel = '3rd year' and dept = 'CEDE'")
 or die(mysql_error());

 
header("Location:  /b/admin/CEDE/voteroptions/updateyr/3rdyr.php");
}

?>