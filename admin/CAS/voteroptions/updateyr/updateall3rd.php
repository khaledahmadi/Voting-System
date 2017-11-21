<?php 
include('dbcon.php');
$studnum = mysql_query("SELECT studnum FROM vcas where yearlevel = '3rd year'") or die(mysql_error());
						 while ($row = mysql_fetch_array($studnum)){
						 $studnumber = $row['studnum'];
						 
$update =  mysql_query("UPDATE vcas set yearlevel = '4th year' where yearlevel = '3rd year'")
 or die(mysql_error()); 
	mysql_query("UPDATE vbussc set yearlevel = '4thyear' where studnum = '$studnumber' and yearlevel = '3rd year' and dept = 'CAS'")
 or die(mysql_error());

 
header("Location:  /b/admin/cas/voteroptions/updateyr/3rdyr.php");
}

?>