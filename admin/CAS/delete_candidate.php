<?php
/* 
 DELETE.PHP
 Deletes a specific entry from the 'players' table
*/

 // connect to the database
 include('dbcon.php');
 
 // check if the 'id' variable is set in URL, and check that it is valid
 if (isset($_GET['candidateID']) && is_numeric($_GET['candidateID']))
 {
 // get id value
 $candidateID = $_GET['candidateID'];
 
 // delete the entry
 $result = mysql_query("DELETE FROM cas WHERE candidateID=$candidateID")
 or die(mysql_error()); 
 
 // redirect back to the view page
 header("Location: cas_delete_candidate.php");
 }
 else
 // if id isn't set, or isn't valid, redirect back to view page
 {
 header("Location: cas_view_candidate.php");
 }
 
?>