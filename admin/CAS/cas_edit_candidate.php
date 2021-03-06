<?php
/* 
 EDIT.PHP
 Allows user to edit specific entry in database
*/

 // creates the edit record form
 // since this form is used multiple times in this file, I have made it a function that is easily reusable
 function renderForm( $candidateID,$studnum, $fname, $lname, $gender, $course, $yearlvl, $position, $partylist, $image, $error)
 {
 ?>
 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
 <html>
 <head>
 
<link href="busscadmin.css" rel="stylesheet" type="text/css">
 
 <title>Edit Record</title>
 </head>
 <body>
 <?php 
 // if there are any errors, display them
 if ($error != '')
 {
  echo "<div class='designtable'>";
         echo "<table>";
 }
 ?> 
 <table bgcolor="#bbbbbb" width="50%" border="0" cellspacing="10" cellpadding="5" valign="center" align = "center">
<tr>
<td width="25%" valign="top" align="center">
 
 <form action="" method="post" onSubmit="return confirm('Are you sure you want to save changes?')">

 <input type="hidden" name="candidateID" value="<?php echo $candidateID; ?>"/></td>
 
 <div>
 <tr>
 <td><strong>Candidate ID:</strong> <?php echo $candidateID; ?></td>
 </tr>
 <tr>
 <td><strong>Student Number: *</strong><td>
</tr>
<tr>
 <td><input type="text" name="studnum" value="<?php echo $studnum; ?>"/></td>
 </tr>
 <tr>
 <td><strong>First Name: *</strong></td>
</tr>
<tr>
 <td><input type="text" name="fname" value="<?php echo $fname; ?>"/></td>
 </tr>
 <tr>
 <td><strong>Last Name: *</strong></td>
<tr>
 <td><input type="text" name="lname" value="<?php echo $lname; ?>"/></td>
 </tr>
 <tr>
  <td><strong>Gender: *</strong></td>
  </tr>
  <tr>
<td><select name="gender">

<option value = "Male" <?php if($gender == "Male") { echo "selected"; }?>>Male</option>
<option value = "Female" <?php if($gender == "Female") { echo "selected"; }?>>Female</option>
</select></td>
 <tr>
<td><strong>Course: *</strong></td>
</tr>
<tr><td>
  <select name="course">
 <option>Bachelor of Arts in History</option>
 <option>Bachelor of Arts in Economics</option>
 <option>Bachelor of Arts in Psychology</option>
 <option>Bachelor of Arts in Political Science</option>
 <option>Bachelor of Arts in Communication</option>
 <option>Bachelor of Arts in Psychology</option>
 <option>Bachelor of Arts in Mathematics</option>
 <option>Bachelor of Arts in Social Work</option>
</select></td></tr>
</tr> 
 <tr>
  <td><strong>Year Level: *</strong></td>
  </tr>
  <tr>
 <td><select name="yearlvl">
 <option value = "1st Year" <?php if($yearlvl == "1st Year") { echo "selected";}?>>1st Year</option>
 <option value = "2nd Year" <?php if($yearlvl == "2nd Year") { echo "selected";}?>>2nd Year</option>
 <option value = "3rd Year" <?php if($yearlvl == "3rd Year") { echo "selected";}?>>3rd Year</option>
 <option value = "4th Year" <?php if($yearlvl == "4th Year") { echo "selected";}?>>4th Year</option>
 <option value = "5th Year" <?php if($yearlvl == "5th Year") { echo "selected";}?>>5th Year</option>
 </select></td>
 </tr>
 <tr>
  <td><strong>Position: *</strong></td>
  </tr>
  <tr>
  <td><select name="position">
  
  <?php
require("dbpos.php");
$getallPosition = mysql_query("SELECT * FROM cas_pos"); 
while ($viewallPosition = mysql_fetch_array($getallPosition))
{
?> 
<?php
if($position == $viewallPosition['pNAME']) { 
?> 
<option id = "<?php echo $viewallPosition['pID']; ?>" selected ><?php echo $viewallPosition['pNAME']; ?></option> 
<?php } else { ?> 
<option id = "<?php echo $viewallPosition['pID']; ?>" ><?php echo $viewallPosition['pNAME']; ?></option> 
<?php } ?> 
<?php } ?>
  
 <option value = "President" <?php if($position == "President") { echo "selected";}?>>President</option>
 <option value = "Vice President" <?php if($position == "Vice President") { echo "selected";}?>>Vice President</option>
 <option value = "Secretary" <?php if($position == "Secretary") { echo "selected";}?>>Secretary</option>
 <option value = "Asst Secretary" <?php if($position == "Asst Secretary") { echo "selected";}?>>Asst Secretary</option>
 <option value = "Treasurer" <?php if($position == "Treasurer") { echo "selected";}?>>Treasurer</option>
 <option value = "Asst Treasurer" <?php if($position == "Asst Treasurer") { echo "selected";}?>>Asst Treasurer</option>
 <option value = "Auditor" <?php if($position == "Auditor") { echo "selected";}?>>Auditor</option>
 <option value = "Asst Auditor" <?php if($position == "Asst Auditor") { echo "selected";}?>>Asst Auditor</option>
 <option value = "Business Mngr" <?php if($position == "Business Mngr") { echo "selected";}?>>Business Mngr</option>
 <option value = "Asst Business Mngr" <?php if($position == "Asst Business Mngr") { echo "selected";}?>>Asst Business Mngr</option>
 <option value = "P.R.O" <?php if($position == "P.R.O") { echo "selected";}?>>P.R.O</option>
 <option value = "Sgt. at Arms" <?php if($position == "Sgt. at Arms") { echo "selected";}?>>Sgt. at Arms</option>
 </select></td>
  </tr>
  <tr>
   <td><strong>Party List *</strong></td>
</tr>
<tr>
   <td><input type="text" name="partylist" value="<?php echo $partylist; ?>" /></td>
  </tr>
 <tr>
 <td><strong>Image: *</strong></td>
 </tr>
 <tr>
 <td><input type="file" name="image" class="font" value="<?php echo $image; ?> " /s></td>
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
 // confirm that the 'id' value is a valid integer before getting the form data
 if (is_numeric($_POST['candidateID']))
 {
 // get form data, making sure it is valid
 $candidateID = $_POST['candidateID'];
 $studnum = mysql_real_escape_string(htmlspecialchars($_POST['studnum']));
 $fname = mysql_real_escape_string(htmlspecialchars($_POST['fname']));
 $lname = mysql_real_escape_string(htmlspecialchars($_POST['lname']));
 $gender = mysql_real_escape_string(htmlspecialchars($_POST['gender']));
 $course = mysql_real_escape_string(htmlspecialchars($_POST['course']));
 $yearlvl = mysql_real_escape_string(htmlspecialchars($_POST['yearlvl']));
 $position = mysql_real_escape_string(htmlspecialchars($_POST['position']));
 $partylist = mysql_real_escape_string(htmlspecialchars($_POST['partylist']));
 $image = mysql_real_escape_string(htmlspecialchars($_POST['image']));
 // check that firstname/lastname fields are both filled in
 if ($candidateID ==  '' || $studnum == '' || $fname == '' || $lname == '' || $gender == '' || $course == '' || $yearlvl == '' || $position == '' || $partylist == '' || $image == '')
 {
 // generate error message
 $error = 'ERROR: Please fill in all required fields!';
 
 //error, display form
renderForm($candidateID,$studnum,$fname,$lname, $gender,$course, $yearlvl, $position, $partylist, $image, $error);
 }
 else
 {
 // save the data to the database
 mysql_query("UPDATE cas SET studnum='$studnum', fname='$fname', lname='$lname',  gender='$gender',course='$course',  yearlvl='$yearlvl',  position='$position',partylist='$partylist',image='$image' WHERE candidateID='$candidateID'")
 or die(mysql_error()); 
 
 // once saved, redirect back to the view page
 header("Location: edit_candidate.php"); 
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
 if (isset($_GET['candidateID']) && is_numeric($_GET['candidateID']) && $_GET['candidateID'] > 0)
 {
 // query db
 $candidateID = $_GET['candidateID'];
 $result = mysql_query("SELECT * FROM cas WHERE candidateID=$candidateID")
 or die(mysql_error()); 
 $row = mysql_fetch_array($result);
 
 // check that the 'id' matches up with a row in the databse
 if($row)
 {
 
 // get data from db
 $candidateID = $row['candidateID'];
  $studnum = $row['studnum'];
 $fname = $row['fname'];
 $lname = $row['lname'];
$gender = $row['gender'];
$course = $row['course'];
$yearlvl = $row['yearlvl'];
$position = $row['position'];
$partylist = $row['partylist'];
$image = $row['image'];
	
 
 // show form
renderForm($candidateID,$studnum,$fname,$lname, $gender,$course, $yearlvl, $position, $partylist, $image, '');
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