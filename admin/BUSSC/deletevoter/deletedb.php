<?php 
include('dbcon.php');

$delete = mysql_query("TRUNCATE TABLE res_bussc");
		mysql_query("TRUNCATE TABLE res_cas");
		mysql_query("TRUNCATE TABLE res_cbaa");
		mysql_query("TRUNCATE TABLE res_cede");
		mysql_query("TRUNCATE TABLE res_educ");
		mysql_query("TRUNCATE TABLE res_con");
		mysql_query("TRUNCATE TABLE res_shmt");
		mysql_query("TRUNCATE TABLE res_site");
		mysql_query("TRUNCATE TABLE voted_bussc");
		mysql_query("TRUNCATE TABLE voted_cas");
		mysql_query("TRUNCATE TABLE voted_cbaa");
		mysql_query("TRUNCATE TABLE voted_cede");
		mysql_query("TRUNCATE TABLE voted_educ");
		mysql_query("TRUNCATE TABLE voted_con");
		mysql_query("TRUNCATE TABLE voted_shmt");
		mysql_query("TRUNCATE TABLE voted_site")or die(mysql_error());
header("Location:  /b/admin/bussc/ccc.php");
?>