<?php
/* 
 EDIT.PHP
 Allows user to edit specific entry in database
*/

 // creates the edit record form
 // since this form is used multiple times in this file, I have made it a function that is easily reusable
 function renderForm($candidateID,$studnum, $fname, $lname, $gender,$course, $yearlvl, $position, $partylist, $image, $error)
 {
 ?>
 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
 <html>
 <head>
 <title>Edit Record</title>
 </head>
 <body>
 <?php 
 // if there are any errors, display them
 if ($error != '')
 {
 echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
 }
 ?> 
 
 <form action="" method="post">
 <input type="hidden" name="candidateID" value="<?php echo $candidateID; ?>"/>
 <div>
 <p><strong>CandidateID:</strong> <?php echo $candidateID; ?></p>
 <strong>Student Number: *</strong> <input type="text" name="studnum" value="<?php echo $studnum; ?>"/><br/>
 <strong>First Name: *</strong> <input type="text" name="fname" value="<?php echo $fname; ?>"/><br/>
 <strong>Last Name: *</strong> <input type="text" name="lname" value="<?php echo $lname; ?>"/><br/>
 
 <strong>Course: *</strong>
 <select name="course">
 <option value = "Bachelor of Science in Civil Engineering" <?php if($course == "Bachelor of Science in Civil Engineering") { echo "selected"; }?>>Bachelor of Science in Civil Engineering</option> 
 <option value = "Bachelor of Science in Computer Engineering" <?php if($course == "Bachelor of Science in Computer Engineering") { echo "selected"; }?>>Bachelor of Science in Computer Engineering</option> 
 <option value = "Bachelor of Science in Electrical Engineering" <?php if($course == "Bachelor of Science in Electrical Engineering") { echo "selected"; }?>>Bachelor of Science in Electrical Engineering</option> 
 <option value = "Bachelor of Science in Electronics Engineering" <?php if($course == "Bachelor of Science in Electronics Engineering") { echo "selected"; }?>>Bachelor of Science in Electronics Engineering</option> 
 <option value = "Bachelor of Science in Industrial Engineering" <?php if($course == "Bachelor of Science in Industrial Engineering") { echo "selected"; }?>>Bachelor of Science in Industrial Engineering</option> 
 </select>
 <br />
 <tr><td><strong>Gender: *</strong> 
 <select name="gender">
 <option name="gender" value = "Male" <?php if($gender == "Male") { echo "selected"; }?>>Male </option>
 <option name="gender" value = "Female" <?php if($gender == "Female") { echo "selected"; }?>>Female</option>
 <br/></td></tr>
 </select>
 <br/>
 <tr><td><strong>Year Level: *</strong> 
 <select name = "yearlvl">
 <option name="yearlvl" value = "1st Year" <?php if($yearlvl == "1st Year") { echo "selected"; }?>>1st Year </option>
  <option name="yearlvl" value = "2nd Year" <?php if($yearlvl == "2nd Year") { echo "selected"; }?>>2nd Year </option>
  <option name="yearlvl" value = "3rd Year" <?php if($yearlvl == "3rd Year") { echo "selected"; }?>>3rd Year </option>
   <option name="yearlvl" value = "4th Year" <?php if($yearlvl == "4th Year") { echo "selected"; }?>>4th Year </option>
   <option name="yearlvl" value = "4th Year" <?php if($yearlvl == "5th Year") { echo "selected"; }?>>5th Year </option>
   <br/></td></tr>
   </select>
  <br/>
  <tr><td><strong>Position: *</strong> 
   <select name = "position">
   
   <?php
require("dbpos.php");
$getallPosition = mysql_query("SELECT * FROM cede_pos"); 
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
   
 <option name="position" value = "President" <?php if($position == "President") { echo "selected"; }?>>President </option>
  <option name="position" value = "Vice President External" <?php if($position == "Vice President External") { echo "selected"; }?>>Vice President External </option>
  <option name="position" value = "Vice President Internal" <?php if($position == "Vice President Internal") { echo "selected"; }?>>Vice President Internal </option>
   <option name="position" value = "Secretary" <?php if($position == "Secretary") { echo "selected"; }?>>Secretary </option>
   <option name="position" value = "Asst Secretary" <?php if($position == "Asst Secretary") { echo "selected"; }?>>Asst Secretary </option>
   <option name="position" value = "Treasurer" <?php if($position == "Treasurer") { echo "selected"; }?>>Treasurer</option>
   <option name="position" value = "Asst Treasurer" <?php if($position == "Asst Treasurer") { echo "selected"; }?>>Asst Treasurer </option>
   <option name="position" value = "Auditor" <?php if($position == "Auditor") { echo "selected"; }?>>Auditor</option>
   <option name="position" value = "Asst Auditor" <?php if($position == "Asst Auditor") { echo "selected";}?>>Asst Auditor</option>
   <option name="position" value = "Business Mngr" <?php if($position == "Business Mngr") { echo "selected"; }?>>Business Mngr  </option>
   <option name="position" value = "Sgt. at Arms" <?php if($position == "Sgt. at Arms") { echo "selected";}?>>Sgt. at Arms</option>
   <option name="position" value = "P.R.O" <?php if($position == "P.R.O") { echo "selected"; }?>>P.R.O </option>
   <option name="position" value = "CE Rep" <?php if($position == "CE Rep") { echo "selected";}?>>CE Rep</option>
 <option name="position" value = "ECE/EEC Rep" <?php if($position == "ECE/EEC Rep") { echo "selected";}?>>ECE/EEC Rep</option>
 <option name="position" value = "COE Rep" <?php if($position == "COE Rep") { echo "selected";}?>>COE Rep</option>
 <option name="position" value = "ME Rep" <?php if($position == "ME Rep") { echo "selected";}?>>ME Rep</option>
 <option name="position" value = "CE Rep" <?php if($position == "CE Rep") { echo "selected";}?>>CE Rep</option>
 <option name="position" value = "LE Rep<" <?php if($position == "LE Rep<") { echo "selected";}?>>LE Rep</option>
   <option name="position" value = "Muse" <?php if($position == "Muse") { echo "selected"; }?>>Muse</option>
   <option name="position" value = "Escort" <?php if($position == "Escort") { echo "selected"; }?>>Escort</option>
   <br/></td></tr>
   </select>
  <br/>
 <strong>Party List: *</strong> <input type="text" name="partylist" value="<?php echo $partylist; ?>"/><br/>
 <strong>Image: *</strong> <input type="file" name="image" class="font" value="<?php echo $image; ?>>"/><br/>
 <p>* Required</p>
 <input type="submit" name="submit" value="Submit">
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
 if ( $studnum == '' || $fname == '' || $lname == '' || $gender == '' ||$course == '' || $yearlvl == '' || $position == '' || $partylist == '' || $image == '')
 {
 // generate error message
 $error = 'ERROR: Please fill in all required fields!';
 
 //error, display form
  renderForm($studnum,$fname, $lname, $gender,$course, $yearlvl, $position, $partylist, $image, $error);
 }
 else
 {
 // save the data to the database
 mysql_query("UPDATE cede SET studnum='$studnum', fname='$fname', lname='$lname',  gender='$gender',course='$course',  yearlvl='$yearlvl',  position='$position',partylist='$partylist',image='$image' WHERE candidateID='$candidateID'")
 or die(mysql_error()); 
 
 // once saved, redirect back to the view page
 header("Location: CEDE_view_candidate.php"); 
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
 $result = mysql_query("SELECT * FROM cede WHERE candidateID=$candidateID")
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
 renderForm($candidateID, $studnum, $fname,$lname,$gender,$course,$yearlvl,$position,$partylist,$image, '');
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