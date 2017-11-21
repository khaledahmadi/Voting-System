<?php

 function renderForm($dateid,$datestart,$dateend,$error)
 {
 ?>
 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
 <html>
 <head>
 <style>
 form {
  clear: both;
  font-size: 100%;
  border-color: #000000;
  border-width: 1px 0 0 0;
  border-style: solid none none none;
  padding: 10px;
  margin: 0 0 0 0;
}
</style>
 <title>EDIT DATE OF ELECTION</title>
 </head>
 <body>
 <?php 

 if ($error != '')
 {
 echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
 }
 ?> 
 <table bgcolor="#367c2b" width="50%" border="0" cellspacing="10" cellpadding="5" valign="center" align = "center">
<tr>
<td width="25%" valign="top" align="center">
 
 <form action="" method="post" onSubmit="return confirm('Are you sure you want to save changes?')">

 <input type="hidden" name="dateid" value="<?php echo $dateid; ?>"/></td>
 
 <div>

 <tr>
 <td><strong>DATE START: *  YEAR - MONTH - DAY and HOURS:MINUTES:SECONDS</strong><td>
 
</tr>
<tr>
 <td><input type="text" name="datestart" value="<?php echo $datestart; ?>"/></td>
 </tr>
 
  <tr>
 <td><strong>DATE END: *  YEAR - MONTH - DAY and HOURS:MINUTES:SECONDS</strong><td>
 
</tr>
<tr>
 <td><input type="text" name="dateend" value="<?php echo $dateend; ?>"/></td>
 </tr>
 
 <tr>
 <td>* Required</td>
</tr>
<tr>
 <td><input type="submit" name="submit" value="Submit"></td>
 </tr>
 </table>
 </div>
 </form> 
 </body>
 </html> 
 <?php
 }



 // connect to the database
 include('dbcon.php');
 
 // check if the form has been submitted. If it has, process the form and save it to the database
 if (isset($_POST['submit']))
 { 

 if (is_numeric($_POST['dateid']))
 {
 $dateid = $_POST['dateid'];
 $datestart = mysql_real_escape_string(htmlspecialchars($_POST['datestart']));
 $dateend = mysql_real_escape_string(htmlspecialchars($_POST['dateend']));

 if ($dateid ==  '' || $datestart == ''||$dateend === '' )
 {
 // generate error message
 $error = 'ERROR: Please set the date of election';
 
 //error, display form
renderForm($dateid,$datestart,$dateend, $error);
 }
 else
 {
 // save the data to the database
 mysql_query("UPDATE date SET datestart='$datestart',dateend='$dateend'  WHERE dateid='$dateid' and org = 'bussc'")
 or die(mysql_error()); 
 
 // once saved, redirect back to the view page
 header("Location: editd.php"); 
 }
 }
 else
 {
 // if the 'id' isn't valid, display an error
 echo 'Error!';
 }
 }
 else
 // if the form hasn't been submitted, get the data from the db and display the form
 {
 
 // get the 'id' value from the URL (if it exists), making sure that it is valid (checing that it is numeric/larger than 0)
 if (isset($_GET['dateid']) && is_numeric($_GET['dateid']) && $_GET['dateid'] > 0)
 {
 // query db
 $dateid = $_GET['dateid'];
 $result = mysql_query("SELECT * FROM date WHERE dateid='$dateid' and org = 'bussc'")
 or die(mysql_error()); 
 $row = mysql_fetch_array($result);
 
 // check that the 'id' matches up with a row in the databse
 if($row)
 {
 
 // get data from db
 $dateid = $row['dateid'];
  $datestart = $row['datestart'];
 $dateend = $row['dateend'];
 
 // show form
renderForm($dateid,$datestart,$dateend, '');
 }
 else
 // if no match, display result
 {
 echo "No results!";
 }
 }
 else
 // if the 'id' in the URL isn't valid, or if there is no 'id' value, display an error
 {
 echo 'Error!';
 }
 }
?>