<?php 
include('dbcon.php');
$studnum = mysql_query("SELECT studnum FROM vcbaa where yearlevel = '5th year'") or die(mysql_error());
						 while ($row = mysql_fetch_array($studnum)){
						 $studnumber = $row['studnum'];
						 
$delete =  mysql_query("DELETE from vcbaa where yearlevel = '5th year'")
 or die(mysql_error()); 
	mysql_query("DELETE from vbussc where studnum = '$studnumber' and yearlevel = '5th year' and dept = 'CBAA'")
 or die(mysql_error());

 
header("Location: 5thyr.php");
}

?>