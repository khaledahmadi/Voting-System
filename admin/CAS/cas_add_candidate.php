<?php
/* 
 NEW.PHP
 Allows user to create a new entry in the database
*/
 
 // creates the new record form
 // since this form is used multiple times in this file, I have made it a function that is easily reusable
 function renderForm($studnum,$fname,$lname, $gender, $course, $yearlvl, $position, $partylist, $image, $error)
 {
 ?>
 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
 <html>
 <head>
 <title>Add Candidates for BUSSC Election</title>
 </head>
 
 <body>
 <?php 
 // if there are any errors, display them
 if ($error != '')
 {
 echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
 }
 ?> 
 
 <table bgcolor="#367c2b" width="50%" border="0" cellspacing="10" cellpadding="5" valign="center" align = "center">
 <tr>
 <td width="25%" valign="top" align="center">
 <form action="" method="post">
 <div>
 
 
 <tr><td>
 <strong>Student Number: *</tr></td>
 <tr><td></strong> <input type="text" name="studnum" value="<?php echo $studnum; ?>" /><br/></tr></td>
 
 <tr><td><strong>First Name: *</tr></td><tr><td></strong> <input type="text" name="fname" value="<?php echo $fname; ?>" /><br/></tr></td>
 <tr><td><strong>Last Name: *</tr></td><tr><td></strong> <input type="text" name="lname" value="<?php echo $lname; ?>" /><br/></tr></td>
 
  <tr><td><strong>Gender: *</tr></td>
 <tr><td></strong><select name="gender">
<option>Male</option>
<option>Female</option>
</select>
 <br/></tr></td>

 <tr><td><strong>Course: *</tr></td>
 
 <tr><td></strong>
 <select name="course">
 <option>Bachelor of Arts in History</option>
 <option>Bachelor of Arts in Economics</option>
 <option>Bachelor of Arts in Psychology</option>
 <option>Bachelor of Arts in Political Science</option>
 <option>Bachelor of Arts in Communication</option>
 <option>Bachelor of Arts in Psychology</option>
 <option>Bachelor of Arts in Mathematics</option>
 <option>Bachelor of Arts in Social Work</option>
</select></tr></td>
 <br />
 
 <tr><td><strong>Year Level: *</tr></td>
 
 <tr><td></strong>
 <select name="yearlvl">
 <option>1st Year</option>
 <option>2nd Year</option>
 <option>3rd Year</option>
 <option>4th Year</option>

 </select></tr></td>
 <br/>
 
  <tr><td><strong>Position: *</tr></td>
  
  <tr><td></strong>
  <select name="position">
  
  <?php
require("dbpos.php");
$getallPosition = mysql_query("SELECT * FROM cas_pos");
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
 </select></tr></td>
  <br/>
 
 <tr><td> <strong>Party List *</tr></td><tr><td></strong> <input type="text" name="partylist" value="<?php echo $partylist; ?>" /><br/></tr></td>
  <br/>
 <tr><td><strong>Image: *</tr></td><tr><td></strong><input type="file" name="image" class="font"></tr></td>
 <tr><td><p>* required</p></tr></td>
 <tr><td><input type="submit" name="submit" value="Submit"></tr></td>
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
 mysql_query("INSERT cas SET studnum='$studnum',fname='$fname', lname='$lname',  gender='$gender',course='$course' ,yearlvl='$yearlvl',  position='$position',partylist='$partylist',image='$image'")
 or die(mysql_error()); 
 
 // once saved, redirect back to the view page
 header("Location: ccas.php"); 
 }
 }
 else
 // if the form hasn't been submitted, display the form
 {
 renderForm('','','','','','','','','','');
 }
?> 