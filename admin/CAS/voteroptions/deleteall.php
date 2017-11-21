<?php 
include('dbcon.php');
$studnum = mysql_query("SELECT studnum FROM vcas where yearlevel = '4th year'") or die(mysql_error());
						 while ($row = mysql_fetch_array($studnum)){
						 $studnumber = $row['studnum'];
						 
$delete =  mysql_query("DELETE from vcas where yearlevel = '4th year'")
 or die(mysql_error()); 
	mysql_query("DELETE from vbussc where studnum = '$studnumber' and yearlevel = '4th year' and dept = 'CAS'")
 or die(mysql_error());

 
header("Location:  /b/admin/cas/voteroptions/4thyear.php");
}

?>