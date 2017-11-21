<?php 
include('dbcon.php');
$studnum = mysql_query("SELECT studnum FROM vcas where yearlevel = '2nd year'") or die(mysql_error());
						 while ($row = mysql_fetch_array($studnum)){
						 $studnumber = $row['studnum'];
						 
$update =  mysql_query("UPDATE vcas set yearlevel = '3rd year' where yearlevel = '2nd year'")
 or die(mysql_error()); 
	mysql_query("UPDATE vbussc set yearlevel = '3rd year' where studnum = '$studnumber' and yearlevel = '2nd year' and dept = 'CAS'")
 or die(mysql_error());

 
header("Location:  /b/admin/cas/voteroptions/updateyr/2ndyear.php");
}

?>