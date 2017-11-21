<?php
/* 
 NEW.PHP
 Allows user to create a new entry in the database
*/
 
 // creates the new record form
 // since this form is used multiple times in this file, I have made it a function that is easily reusable
 function renderForm($studnum,$fname,$lname, $course, $yearlevel, $password, $error)
 {
 ?>
 <br>
 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
 <html>
 <head>

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
 <form action="" method="post">
 <div>
 
 <tr>
 <td><strong>Student Number: *</td>
 </tr>
 
 <tr>
 <td></strong> <input type="text" name="studnum" value="<?php echo $studnum; ?>" /><br/></td>
 </tr>
 
 <tr>
 <td><strong>First Name: *</td>
 </tr>
 <tr>
 <td></strong> <input type="text" name="fname" value="<?php echo $fname; ?>" /></td>
 </tr>
 <tr>
  <td><strong>Last Name: *</td>
  </tr>
  <tr>
  <td></strong> <input type="text" name="lname" value="<?php echo $lname; ?>" /></td>
 </tr> 
 <tr>
 <td><strong>Course: *</strong></td>
 </tr>
 <tr>
 <td><select name="course">
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
 <option>Bachelor of Science in Computer </option>
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
 </select></td>
 </tr>
<tr>
 <td><strong>Year Level: *</strong></td>
 </tr>
 <tr>
 <td><select name="yearlevel">
 <option>1st Year</option>
 <option>2nd Year</option>
 <option>3rd Year</option>
 <option>4th Year</option>
 <option>5th Year</option>
 </select></td>
 </tr>
 <tr
 
 


 
 
 <?php
  function generate_random_pass($length = 10) {
    $alphabets = range('A','Z');
    $numbers = range('0','9');
   // $additional_characters = array('$','%');
    $final_array = array_merge($alphabets,$numbers);
         
    $password = '';
  
    while($length--) {
      $key = array_rand($final_array);
      $password .= $final_array[$key];
    }
  
    return $password;
  }
    
  ?>

 
 <tr>
  <td><strong>password: *</td>
  </tr>
  <tr>
  <td></strong> <input type="text" name="password" value="<?php echo generate_random_pass(7) ?>" /></td>
 </tr>
 
  
 




<tr>
<td>
 <p>* required</p>
 <input type="submit" name="submit" value="Submit">
 </td>
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

 
 // check if the form has been submitted. If it has, start to process the form and save it to the database
 if (isset($_POST['submit']))
 { 
 // get form data, making sure it is valid
 $studnum = mysql_real_escape_string(htmlspecialchars($_POST['studnum']));
 $fname = mysql_real_escape_string(htmlspecialchars($_POST['fname']));
 $lname = mysql_real_escape_string(htmlspecialchars($_POST['lname']));
 $course = mysql_real_escape_string(htmlspecialchars($_POST['course']));
 $yearlevel = mysql_real_escape_string(htmlspecialchars($_POST['yearlevel']));
 $password = mysql_real_escape_string(htmlspecialchars($_POST['password']));
 
 
 $studnum = $_POST["studnum"];
				$query = mysql_query("SELECT * FROM   vbussc WHERE studnum='$studnum'");

			// check to make sure both fields are entered
			if ($studnum == '' || $fname == '' || $lname == '' || $course == ''|| $yearlevel == '' ||  $password == '')
			{
			// generate error message
			$error = 'ERROR: Please fill in all required fields!';
 
			// if either field is blank, display the form again
			renderForm($studnum, $fname, $lname, $course, $yearlevel, $password, $error);
			}
 
			else if (mysql_num_rows($query) != 0)
			 //check to make sure no duplication
						
				{	
				$error = 'ERROR: Student name already exist!';
				renderForm($studnum, $fname, $lname, $course, $yearlevel,$password, $error);
			
				}
				
 
 
 
 
 else
 {
 // save the data to the database
 mysql_query("INSERT vbussc SET studnum='$studnum', fname='$fname', lname='$lname',  course='$course',  yearlevel='$yearlevel' , username='$studnum', password='$password'  ")
 or die(mysql_error()); 
 
 
 
 
 // once saved, redirect back to the view page
 header("Location: index.php"); 
 }
 }
 else
 // if the form hasn't been submitted, display the form
 {
 renderForm('','','','','','','','','','','');
 }
 
 
?> 