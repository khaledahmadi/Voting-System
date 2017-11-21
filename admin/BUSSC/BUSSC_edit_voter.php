<?php
/* 
 EDIT.PHP
 Allows user to edit specific entry in database
*/

 // creates the edit record form
 // since this form is used multiple times in this file, I have made it a function that is easily reusable
 function renderForm( $stud_id,$studnum, $fname, $lname,$course, $yearlevel, $error)
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
 <table bgcolor="#bbbbbb" width="50%" border="0" cellspacing="10" cellpadding="5" valign="center" align = "center">
<tr>
<td width="25%" valign="top" align="center">
 
 <form   echo "<table border='1' cellpadding='10'>";>

 <input type="hidden" name="stud_id" value="<?php echo $stud_id; ?>"/></td>
 
 <div>
 <tr>
 <td><strong>Candidate ID:</strong> <?php echo $stud_id; ?></td>
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
<td><strong>Course: *</strong></td>
</tr>
<tr>
 <td><select name="course">
 <option value = "Bachelor of Arts in History" <?php if($course == "Bachelor of Arts in History") { echo "selected"; }?>>Bachelor of Arts in History</option>
 <option value = "Bachelor of Arts in Economics" <?php if($course == "Bachelor of Arts in Economics") { echo "selected"; }?>>Bachelor of Arts in Economics</option>
 <option value = "Bachelor of Arts in Psychology" <?php if($course == "Bachelor of Arts in Psychology") { echo "selected"; }?>>Bachelor of Arts in Psychology</option>
 <option value = "Bachelor of Arts in Political Science" <?php if($course == "Bachelor of Arts in Political Science") { echo "selected"; }?>>Bachelor of Arts in Political Science</option>
 <option value = "Bachelor of Arts in Communication" <?php if($course == "Bachelor of Arts in Communication") { echo "selected"; }?>>Bachelor of Arts in Communication</option>
 <option value = "Bachelor of Arts in Mathematics" <?php if($course == "Bachelor of Arts in Mathematics") { echo "selected"; }?>>Bachelor of Arts in Mathematics</option>
 <option value = "Bachelor of Arts in Social Work" <?php if($course == "Bachelor of Arts in Social Work") { echo "selected"; }?>>Bachelor of Arts in Social Work</option>
 <option value = "Bachelor of Arts in Business Administration" <?php if($course == "Bachelor of Arts in Business Administration") { echo "selected"; }?>>Bachelor of Science in Business Administration</option>
 <option value = "Bachelor of Science in Accountancy" <?php if($course == "Bachelor of Science in Accountancy") { echo "selected"; }?>>Bachelor of Science in Accountancy</option>
 <option value = "Bachelor of Elementary Education" <?php if($course == "Bachelor of Elementary Education") { echo "selected"; }?>>Bachelor of Elementary Education</option>
 <option value = "Bachelor of Secondary Education" <?php if($course == "Bachelor of Secondary Education") { echo "selected"; }?>>Bachelor of Secondary Education</option>
 <option value = "Bachelor of Science in Library and Information Science" <?php if($course == "Bachelor of Science in Library and Information Science") { echo "selected"; }?>>Bachelor of Science in Library and Information Science</option> 
 <option value = "Bachelor of Science in Civil Engineering" <?php if($course == "Bachelor of Science in Civil Engineering") { echo "selected"; }?>>Bachelor of Science in Civil Engineering</option> 
 <option value = "Bachelor of Science in Computer Engineering" <?php if($course == "Bachelor of Science in Computer Engineering") { echo "selected"; }?>>Bachelor of Science in Computer Engineering</option> 
 <option value = "Bachelor of Science in Electrical Engineering" <?php if($course == "Bachelor of Science in Electrical Engineering") { echo "selected"; }?>>Bachelor of Science in Electrical Engineering</option> 
 <option value = "Bachelor of Science in Electronics Engineering" <?php if($course == "Bachelor of Science in Electronics Engineering") { echo "selected"; }?>>Bachelor of Science in Electronics Engineering</option> 
 <option value = "Bachelor of Science in Industrial Engineering" <?php if($course == "Bachelor of Science in Industrial Engineering") { echo "selected"; }?>>Bachelor of Science in Industrial Engineering</option> 
 <option value = "Four-Year Bachelor of Science in Nursing" <?php if($course == "Four-Year Bachelor of Science in Nursing") { echo "selected"; }?>>Four-Year Bachelor of Science in Nursing</option> 
 <option value = "Bachelor of Science in Information Technology" <?php if($course == "Bachelor of Science in Information Technology") { echo "selected"; }?>>Bachelor of Science in Information Technology</option> 
 <option value = "Bachelor of Science in Computer Science" <?php if($course == "Bachelor of Science in Computer Science") { echo "selected"; }?>>Bachelor of Science in Computer Science</option>
 <option value = "Bachelor of Science in Information Systems" <?php if($course == "Bachelor of Science in Information Systems") { echo "selected"; }?>>Bachelor of Science in Information Systems</option>
 <option value = "Two-Year Associate in Computer Technology" <?php if($course == "Two-Year Associate in Computer Technology") { echo "selected"; }?>>Two-Year Associate in Computer Technology</option>
 <option value = "Bachelor of Science in Hospitality Management" <?php if($course == "Bachelor of Science in Hospitality Management") { echo "selected"; }?>>Bachelor of Science in Hospitality Management</option>
 <option value = "Bachelor of Science in Tourism Management" <?php if($course == "Bachelor of Science in Tourism Management") { echo "selected"; }?>>Bachelor of Science in Tourism Management</option>
 <option value = "Two-Year Electrical Technician Course" <?php if($course == "Two-Year Electrical Technician Course") { echo "selected"; }?>>Two-Year Electrical Technician Course</option>
 <option value = "Two-Year Refrigeration & Airconditioning Technician Course" <?php if($course == "Two-Year Refrigeration & Airconditioning Technician Course") { echo "selected"; }?>>Two-Year Refrigeration & Airconditioning Technician Course</option>
 <option value = "Two-Year Computer and Electronics Technician" <?php if($course == "Two-Year Computer and Electronics Technician") { echo "selected"; }?>>Two-Year Computer and Electronics Technician</option>
 <option value = "One-Year Consumer Electronics Servicing Course, NC II" <?php if($course == "One-Year Consumer Electronics Servicing Course, NC II") { echo "selected"; }?>>One-Year Consumer Electronics Servicing Course, NC II</option>
 <option value = "One-Year Computer Hardware Servicing Course, NC II" <?php if($course == "One-Year Computer Hardware Servicing Course, NC II") { echo "selected"; }?>>One-Year Computer Hardware Servicing Course, NC II</option>
 <option value = "One-Year Automotive Servicing Course, NC II" <?php if($course == "One-Year Automotive Servicing Course, NC II") { echo "selected"; }?>>One-Year Automotive Servicing Course, NC II</option>
 <option value = "Dual Training System" <?php if($course == "Dual Training System") { echo "selected"; }?>>Dual Training System</option>
 </select></td>
</tr> 
 <tr>
  <td><strong>Year Level: *</strong></td>
  </tr>
  <tr>
 <td><select name="yearlevel">
 <option value = "1st Year" <?php if($yearlevel == "1st Year") { echo "selected";}?>>1st Year</option>
 <option value = "2nd Year" <?php if($yearlevel == "2nd Year") { echo "selected";}?>>2nd Year</option>
 <option value = "3rd Year" <?php if($yearlevel == "3rd Year") { echo "selected";}?>>3rd Year</option>
 <option value = "4th Year" <?php if($yearlevel == "4th Year") { echo "selected";}?>>4th Year</option>
 <option value = "5th Year" <?php if($yearlevel == "5th Year") { echo "selected";}?>>5th Year</option>
 </select></td>
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
 if (is_numeric($_POST['stud_id']))
 {
 // get form data, making sure it is valid
 $stud_id = $_POST['stud_id'];
 $studnum = mysql_real_escape_string(htmlspecialchars($_POST['studnum']));
 $fname = mysql_real_escape_string(htmlspecialchars($_POST['fname']));
 $lname = mysql_real_escape_string(htmlspecialchars($_POST['lname']));
 $course = mysql_real_escape_string(htmlspecialchars($_POST['course']));
 $yearlevel = mysql_real_escape_string(htmlspecialchars($_POST['yearlevel']));


 // check that firstname/lastname fields are both filled in
 if ($stud_id ==  '' || $studnum == '' || $fname == '' || $lname == ''|| $course == '' || $yearlevel == ''  )
 {
 // generate error message
 $error = 'ERROR: Please fill in all required fields!';
 
 //error, display form
renderForm($stud_id,$studnum,$fname,$lname,$course, $yearlevel, $error);
 }
 else
 {
 // save the data to the database
 mysql_query("UPDATE vbussc SET studnum='$studnum', fname='$fname', lname='$lname', course='$course',  yearlevel='$yearlevel',   WHERE stud_id='$stud_id'")
 or die(mysql_error()); 
 
 // once saved, redirect back to the view page
 header("Location: voterlist.php"); 
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
 if (isset($_GET['stud_id']) && is_numeric($_GET['stud_id']) && $_GET['stud_id'] > 0)
 {
 // query db
 $stud_id = $_GET['stud_id'];
 $result = mysql_query("SELECT * FROM vbussc WHERE $stud_id=$stud_id")
 or die(mysql_error()); 
 $row = mysql_fetch_array($result);
 
 // check that the 'id' matches up with a row in the databse
 if($row)
 {
 
 // get data from db
 $stud_id = $row['stud_id'];
  $studnum = $row['studnum'];
 $fname = $row['fname'];
 $lname = $row['lname'];
$course = $row['course'];
$yearlevel = $row['yearlevel'];


	
 
 // show form
renderForm($stud_id,$studnum,$fname,$lname,$course, $yearlevel,'');
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