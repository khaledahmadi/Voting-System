<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">



<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>DEPARTMENT</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />

 
<script type="text/javascript">
	
</script>
</head>


<body>
<div id="wrapper">
	<div id="header"></div>
										
		<div id="cssmenu">
		<ul>
			<li class="first">
				
			<li ><a href="../index.php" >Home</a></li>
			<li><a href="#"  >Organizations</a></li>
				
			<div id="footer"><iframe name="right_side" src="" width="100%"  
			height="100%" frameBorder="0"></iframe>  </div>
			
			
		</ul>
		<br class="clearfix" />
	</div>
	
<div id="slider">
		<div class="viewer">
			<div class="reel">
				
				
				
	
	
	
	
<pre>
                <a href="#" onClick = "return confirmDate();"><img src="images/bussc.png"height="110"width="80"></a>     <a href="#" onClick = "return Datecas();"><img src="images/cas.png" height="110"width="80"></a>     <a href="#" onClick = "return Datecbaa();"><img src="images/cbaa.png"height="110"width="80"></a>    <a href="#" onClick = "return Dateeduc();"><img src="images/educ.png" height="110"width="80"></a>    
                <a href="#" onClick = "return Datecede();"><img src="images/cede.png"height="112"width="80"></a>     <a href="#" onClick = "return Datecon();"><img src="images/nursing.png"height="115"width="80"></a>     <a href="#" onClick = "return Datesite();"><img src="images/site.png" height="115"width="80"></a>    <a href="#" onClick = "return Dateshmt();"><img src="images/shtm.png"height="110"width="80"></a>   
</pre>

	
	
	
	
	</div>
	
	
	
		<br class="clearfix" />
	</div>	
</div>
</div>
<?php
include('dbcon.php');
$current_date = date('Y-m-d h:i:s');
$result = mysql_query("SELECT * FROM date where org = 'bussc'") 
                or die(mysql_error());  
		$row = mysql_fetch_array($result);
		$datestart= $row['datestart'];
		$dateend= $row['dateend'];
?>
<script type = "text/javascript">
function confirmDate(){
var currentdate = "<?php echo $current_date; ?>";
var datestart = "<?php echo $datestart; ?>";
var dateend = "<?php echo $dateend; ?>";

if(currentdate <= dateend && currentdate >= datestart){
alert("VOTING IS OPEN");
window.location = '/b/voter/BUSSC/index.php';
}

else{
alert("VOTING IS CLOSE");
}}

</script>

<?php
include('dbcon.php');
$current_date = date('Y-m-d h:i:s');
$result = mysql_query("SELECT * FROM date where org ='cas'") 
                or die(mysql_error());  
		$row = mysql_fetch_array($result);
		$datestart= $row['datestart'];
		$dateend= $row['dateend'];
?>
<script type = "text/javascript">
function Datecas(){
var currentdate = "<?php echo $current_date; ?>";
var datestart = "<?php echo $datestart; ?>";
var dateend = "<?php echo $dateend; ?>";

if(currentdate <= dateend && currentdate >= datestart){
alert("VOTING IS OPEN");
window.location = '/b/voter/CAS/index.php';
}

else{
alert("VOTING IS CLOSE");
}}

</script>

<?php
include('dbcon.php');
$current_date = date('Y-m-d h:i:s');
$result = mysql_query("SELECT * FROM date where org ='cbaa'") 
                or die(mysql_error());  
		$row = mysql_fetch_array($result);
		$datestart= $row['datestart'];
		$dateend= $row['dateend'];
?>
<script type = "text/javascript">
function Datecbaa(){
var currentdate = "<?php echo $current_date; ?>";
var datestart = "<?php echo $datestart; ?>";
var dateend = "<?php echo $dateend; ?>";

if(currentdate <= dateend && currentdate >= datestart){
alert("VOTING IS OPEN");
window.location = '/b/voter/CBAA/index.php';
}

else{
alert("VOTING IS CLOSE");
}}

</script>

<?php
include('dbcon.php');
$current_date = date('Y-m-d h:i:s');
$result = mysql_query("SELECT * FROM date where org ='cede'") 
                or die(mysql_error());  
		$row = mysql_fetch_array($result);
		$datestart= $row['datestart'];
		$dateend= $row['dateend'];
?>
<script type = "text/javascript">
function Datecede(){
var currentdate = "<?php echo $current_date; ?>";
var datestart = "<?php echo $datestart; ?>";
var dateend = "<?php echo $dateend; ?>";

if(currentdate <= dateend && currentdate >= datestart){
alert("VOTING IS OPEN");
window.location = '/b/voter/CEDE/index.php';
}

else{
alert("VOTING IS CLOSE");
}}

</script>

<?php
include('dbcon.php');
$current_date = date('Y-m-d h:i:s');
$result = mysql_query("SELECT * FROM date where org ='con'") 
                or die(mysql_error());  
		$row = mysql_fetch_array($result);
		$datestart= $row['datestart'];
		$dateend= $row['dateend'];
?>
<script type = "text/javascript">
function Datecon(){
var currentdate = "<?php echo $current_date; ?>";
var datestart = "<?php echo $datestart; ?>";
var dateend = "<?php echo $dateend; ?>";

if(currentdate <= dateend && currentdate >= datestart){
alert("VOTING IS OPEN");
window.location = '/b/voter/NURSING/index.php';
}

else{
alert("VOTING IS CLOSE");
}}

</script>

<?php
include('dbcon.php');
$current_date = date('Y-m-d h:i:s');
$result = mysql_query("SELECT * FROM date where org ='site'") 
                or die(mysql_error());  
		$row = mysql_fetch_array($result);
		$datestart= $row['datestart'];
		$dateend= $row['dateend'];
?>
<script type = "text/javascript">
function Datesite(){
var currentdate = "<?php echo $current_date; ?>";
var datestart = "<?php echo $datestart; ?>";
var dateend = "<?php echo $dateend; ?>";

if(currentdate <= dateend && currentdate >= datestart){
alert("VOTING IS OPEN");
window.location = '/b/voter/SITE/index.php';
}

else{
alert("VOTING IS CLOSE");
}}

</script>

<?php
include('dbcon.php');
$current_date = date('Y-m-d h:i:s');
$result = mysql_query("SELECT * FROM date where org ='educ'") 
                or die(mysql_error());  
		$row = mysql_fetch_array($result);
		$datestart= $row['datestart'];
		$dateend= $row['dateend'];
?>
<script type = "text/javascript">
function Dateeduc(){
var currentdate = "<?php echo $current_date; ?>";
var datestart = "<?php echo $datestart; ?>";
var dateend = "<?php echo $dateend; ?>";

if(currentdate <= dateend && currentdate >= datestart){
alert("VOTING IS OPEN");
window.location = '/b/voter/EDUC/index.php';
}

else{
alert("VOTING IS CLOSE");
}}

</script>

<?php
include('dbcon.php');
$current_date = date('Y-m-d h:i:s');
$result = mysql_query("SELECT * FROM date where org ='shmt'") 
                or die(mysql_error());  
		$row = mysql_fetch_array($result);
		$datestart= $row['datestart'];
		$dateend= $row['dateend'];
?>
<script type = "text/javascript">
function Dateshmt(){
var currentdate = "<?php echo $current_date; ?>";
var datestart = "<?php echo $datestart; ?>";
var dateend = "<?php echo $dateend; ?>";

if(currentdate <= dateend && currentdate >= datestart){
alert("VOTING IS OPEN");
window.location = '/b/voter/SHMT/index.php';
}

else{
alert("VOTING IS CLOSE");
}}

</script>

</body>
</html>