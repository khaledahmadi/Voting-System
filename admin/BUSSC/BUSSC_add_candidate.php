<?php
 function renderForm($studnum,$fname,$lname, $gender, $course, $yearlvl, $position, $partylist, $image, $error)
 {
 ?>
 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
 <html>
 <head>
 <title>Add Candidates</title>
 </head>
 <body>
 
 
 <?php 
 // if there are any errors, display them
 if ($error != '')
 {
 echo '<div style="padding:1px; border:1px solid red; color:red;">'.$error.'</div>';
 }
 ?> 
 <table bgcolor="#367c2b" width="50%" border="0" cellspacing="7" cellpadding="2" valign="center" align = "center">
 <tr>
 <td width="25%" valign="top" align="center">

 <form action="" method="post">
 <div>
 <tr>
 <td> <strong>Student Number: *</td>
 </tr>
 
 <tr>
 <td></strong> <input type="text" name="studnum" value="<?php echo $studnum; ?>" /><br/></td>
 </tr>
 
 <tr>
<td><strong>First Name: *</td>
</tr>

<tr><td>
</strong> <input type="text" name="fname" value="<?php echo $fname; ?>" /><br/></td>
 </tr>
 
 <tr>
 <td><strong>Last Name: *</td></tr>
 
 <tr>
 <td></strong> <input type="text" name="lname" value="<?php echo $lname; ?>" /><br/><td>
 </tr>
 
 
 <tr>
 <td><strong>Gender: *</strong></td></tr>
 
 <tr><td>
<select name="gender">
<option>Male</option>
<option>Female</option>
</select>
 <br/></td>
 </tr>

 <tr>
 <td><strong>Course: *</td><tr>
 
 <tr><td>
 </strong> <select name="course">
 <option>Bachelor of Arts in History</option>
 <option>Bachelor of Arts in Economics</option>
 <option>Bachelor of Arts in Psychology</option>
 <option>Bachelor of Arts in Political Science</option>
 <option>Bachelor of Arts in Communication</option>
 <option>Bachelor of Arts in Psychology</option>
 <option>Bachelor of Arts in Mathematics</option>
 <option>Bachelor of Arts in Social Work</option>
 <option>Bachelor of Science in Business Administration</option>
 <option>Bachelor of Science in Accountancy</option>
 <option>Bachelor of Elementary Education</option>
 <option>Bachelor of Secondary Education</option>
 <option>Bachelor of Science in Library and Information Science</option> 
 <option>Bachelor of Science in Civil Engineering</option> 
 <option>Bachelor of Science in Computer Engineering</option> 
 <option>Bachelor of Science in Electrical Engineering</option> 
 <option>Bachelor of Science in Electronics Engineering</option> 
 <option>Bachelor of Science in Industrial Engineering</option> 
 <option>Four-Year Bachelor of Science in Nursing</option> 
 <option>Bachelor of Science in Information Technology</option> 
 <option>Bachelor of Science in Computer Science </option>
 <option>Bachelor of Science in Information Systems</option>
 <option>Two-Year Associate in Computer Technology</option>
 <option>Bachelor of Science in Hospitality Management</option>
 <option>Bachelor of Science in Tourism Management</option>
 <option>Two-Year Electrical Technician Course</option>
 <option>Two-Year Refrigeration & Airconditioning Technician Course</option>
 <option>Two-Year Computer and Electronics Technician</option>
 <option>One-Year Consumer Electronics Servicing Course, NC II</option>
 <option>One-Year Computer Hardware Servicing Course, NC II</option>
 <option>One-Year Automotive Servicing Course, NC II</option>
 <option>Dual Training System</option>
 </select>
 <br /></td>
 </tr>
 
 
 <tr><td>
 <strong>Year Level: * </td></tr>
 
 
 
 <tr><td></strong>
 <select name="yearlvl">
 <option>1st Year</option>
 <option>2nd Year</option>
 <option>3rd Year</option>
 <option>4th Year</option>
 <option>5th Year</option>
 </select>
 <br/></td></tr>
 
 <tr><td>


  <strong>Position: * </td></tr>
  
  <tr><td></strong>
  <select name="position">
  
  <?php
require("dbpos.php");
$getallPosition = mysql_query("SELECT * FROM bussc_pos");
while ($viewallPosition = mysql_fetch_array($getallPosition)){
?>
<option id = "<?php echo $viewallPosition['pID']; ?>"><?php echo $viewallPosition['pNAME'] ?></option>
<?php } ?>
  
 <option>President</option>
 <option>Vice President</option>
 <option>Secretary</option>
 <option>Asst Secretary</option>
 <option>Treasurer</option>
 <option>Asst Treasurer</option>
 <option>Auditor</option>
 <option>Asst Auditor</option>
 <option>Business Mngr</option>
<option>Asst Business Mngr</option>
 <option>P.R.O</option>
  <option>Sgt. at Arms</option>
 </select>
  <br/></tr></td>
 
 <tr><td> <strong>Party List *</td><tr>
 
 <tr><td></strong> <input type="text" name="partylist" value="<?php echo $partylist; ?>" /><br/></td></tr>
  <br/>
 <tr><td><strong>Image: *</td></tr>
 <tr><td></strong><input type="file" name="image" class="font">

 <p>* required</p>
 <input type="submit" name="submit" value="Submit"></tr></td>
 
 
 
 </div>
 </form> 

 </body>
 </html>
 <?php 
 }
 
 
 

 // connect to the database
 include('dbcon.php');
 
 // check if the form has been submitted. If it has, start to process the form and save it to the database
 if (isset($_POST['submit']))
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
 
 
 // check to make sure both fields are entered
 if ($studnum == '' || $fname == '' || $lname == '' || $gender == '' ||$course == '' || $yearlvl == '' || $position == '' || $partylist == '' || $image == '')
 {
 // generate error message
 $error = 'ERROR: Please fill in all required fields!';
 
 // if either field is blank, display the form again
 renderForm($studnum,$fname,$lname, $gender, $course, $yearlvl, $position, $partylist, $image, $error);
 }
 else
 {
 // save the data to the database
 mysql_query("INSERT bussc SET studnum='$studnum',fname='$fname', lname='$lname',  gender='$gender',course='$course' ,yearlvl='$yearlvl',  position='$position',partylist='$partylist',image='$image'")
 or die(mysql_error()); 
 
 // once saved, redirect back to the view page
 header("Location: BUSSC_view_candidate.php"); 
 }
 }
 else
 // if the form hasn't been submitted, display the form
 {
 renderForm('','','','','','','','','','');
 }
?> 