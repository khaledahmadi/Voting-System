<?php
/* 
 NEW.PHP
 Allows user to create a new entry in the database
*/
 
 // creates the new record form
 // since this form is used multiple times in this file, I have made it a function that is easily reusable
 function renderForm($pNAME, $error)
 {
 ?>
 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
 <html>
 <br>
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
 <center>
 ADD Position
 <title>New position</title>
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
 <strong>Position Name: *</strong> <input type="text" name="pNAME" value="<?php echo $pNAME; ?>" /><br/>
	

 <input type="submit" name="submit" value="Submit">
 </div>
 </form> 
 </body>
 </html>
 <?php 
 }
 
 
 

 // connect to the database
 include('dbpos.php');
 
 // check if the form has been submitted. If it has, start to process the form and save it to the database
 if (isset($_POST['submit']))
 { 
 // get form data, making sure it is valid
 $pNAME = mysql_real_escape_string(htmlspecialchars($_POST['pNAME']));

 // check to make sure both fields are entered
 if ($pNAME == '' )
 {
 // generate error message
 $error = 'ERROR: Please fill in all required fields!';
 
 // if either field is blank, display the form again
 renderForm($pNAME, $error);
 }
 else
 {
 // save the data to the database
 mysql_query("INSERT cede_pos SET pNAME='$pNAME'")
 or die(mysql_error()); 
 
 // once saved, redirect back to the view page
 header("Location: cede_add_position.php"); 
 }
 }
 else
 // if the form hasn't been submitted, display the form
 {
 renderForm('','');
 }
?> 