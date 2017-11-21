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
 <title>Add Candidates for CEDE Election</title>
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
 <div>
 <strong>Student Number: *</strong> <input type="text" name="studnum" value="<?php echo $studnum; ?>" /><br/>
 <strong>First Name: *</strong> <input type="text" name="fname" value="<?php echo $fname; ?>" /><br/>
 <strong>Last Name: *</strong> <input type="text" name="lname" value="<?php echo $lname; ?>" /><br/>
 
 <strong>Gender: *</strong>
<select name="gender">
<option>Male</option>
<option>Female</option>
</select>
 <br/>

 <strong>Course: *</strong>
 <select name="course">
 <option>Bachelor of Science in Civil Engineering</option> 
 <option>Bachelor of Science in Computer Engineering</option> 
 <option>Bachelor of Science in Electrical Engineering</option> 
 <option>Bachelor of Science in Electronics Engineering</option> 
 <option>Bachelor of Science in Industrial Engineering</option> 
 </select>
 <br />
 
 <strong>Year Level: *</strong>
 <select name="yearlvl">
 <option>1st Year</option>
 <option>2nd Year</option>
 <option>3rd Year</option>
 <option>4th Year</option>
 <option>5th Year</option>
 </select>
 <br/>
 
  <strong>Position: *</strong>
  <select name="position">
  
  <?php
require("dbpos.php");
$getallPosition = mysql_query("SELECT * FROM cede_pos");
while ($viewallPosition = mysql_fetch_array($getallPosition)){
?>
<option id = "<?php echo $viewallPosition['pID']; ?>"><?php echo $viewallPosition['pNAME'] ?></option>
<?php } ?>
  
 <option>President</option>
 <option>Vice President External</option>
 <option>Vice President Internal</option>
 <option>Secretary</option>
 <option>Asst Secretary</option>
 <option>Treasurer</option>
 <option>Asst Treasurer</option>
 <option>Auditor</option>
 <option>Asst Auditor</option>
 <option>Business Mngr</option>
 <option>Sgt. at Arms</option>
 <option>P.R.O</option>
 <option>Muse</option>
 <option>Escort</option>
 <option>CE Rep</option>
 <option>ECE/EEC Rep</option>
 <option>COE Rep</option>
 <option>ME Rep</option>
 <option>CE Rep</option>
 <option>LE Rep</option>
 </select>
  <br/>
 
  <strong>Party List *</strong> <input type="text" name="partylist" value="<?php echo $partylist; ?>" /><br/>
  <br/>
 <strong>Image: *</strong><input type="file" name="image" class="font">

 <p>* required</p>
 <input type="submit" name="submit" value="Submit">
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
 mysql_query("INSERT cedeso SET studnum='$studnum',fname='$fname', lname='$lname',  gender='$gender',course='$course' ,yearlvl='$yearlvl',  position='$position',partylist='$partylist',image='$image'")
 or die(mysql_error()); 
 
 // once saved, redirect back to the view page
 header("Location: CEDE_view_candidate.php"); 
 }
 }
 else
 // if the form hasn't been submitted, display the form
 {
 renderForm('','','','','','','','','','');
 }
?> 