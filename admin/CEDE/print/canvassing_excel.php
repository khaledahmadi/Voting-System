<?php
  require_once('OLEwriter.php');
  require_once('BIFFwriter.php');
  require_once('Worksheet.php');
  require_once('Workbook.php');
  require_once('dbcon.php');
  


    function HeaderingExcel($filename) {
      header("Content-type: application/vnd.ms-excel");
      header("Content-Disposition: attachment; filename=$filename" );
      header("Expires: 0");
      header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
      header("Pragma: public");
      }
	  
	  // HTTP headers
HeaderingExcel('Voter_List.xls');// Creating a workbook
$workbook = new excel("-");
// Creating the first worksheet
$worksheet1 =& $workbook->add_worksheet('candidate result');
$worksheet1->freeze_panes(1, 0);
  $worksheet1->set_column(0, 0, 25);
  $worksheet1->set_column(1, 1, 20);
  $worksheet1->set_column(1, 2, 20);
  $worksheet1->set_column(1, 3, 20);
  $worksheet1->set_column(1, 4, 20);
  $worksheet1->set_column(1, 5, 20);
  $worksheet1->set_column(1, 6, 20);
  $worksheet1->set_column(1, 7, 20);







   $worksheet1->write_string(1,0,"Baliuag University ");
   $worksheet1->write_string(1,1,"College of Environment Design and Engineering");
  
   $worksheet1->write_string(4,0,"Canvassing Report");
   $worksheet1->write_string(5,0,"Results List");
   $worksheet1->write_string(7,0,"Position");
   $worksheet1->write_string(7,1,"Party");
   $worksheet1->write_string(7,2,"FirstName");
   $worksheet1->write_string(7,3,"LastName");
   $worksheet1->write_string(7,4,"Course");
   $worksheet1->write_string(7,5,"Gender");
   $worksheet1->write_string(7,6,"Year");
   $worksheet1->write_string(7,7,"No.of Votes");






/////////////////
	
$name = mysql_query("SELECT * from bussc")  or die(mysql_error()); 
		$rows = mysql_fetch_array( $name );
		$names = $rows['fname']." ".$rows['lname'];
		$j=8;
			
        $result = mysql_query("SELECT b.candidateID,  fname,gender,
							lname, yearlvl , course,  partylist, votes, position
								FROM cede b left join res_cede r on b.candidateID = r.candidateID order by b.candidateID")or die(mysql_error()); 
								while($row = mysql_fetch_array( $result )) {
			
			$j=$j+1;
			$Position = $row['position'];
			$Party = $row['partylist'];
			$FirstName = $row['fname'];
			$LastName = $row['lname'];
			$Course = $row['course'];
			$Gender = $row['gender'];
			$Year = $row['yearlvl'];
			$Votes = $row['votes'];
		
			
			
				
			
			
			 $worksheet1->write_string($j,0,"$Position");
			 $worksheet1->write_string($j,1,"$Party");
			 $worksheet1->write_string($j,2,"$FirstName");
			 $worksheet1->write_string($j,3,"$LastName");
			 $worksheet1->write_string($j,4,"$Course");
			 $worksheet1->write_string($j,5,"$Gender");
			 $worksheet1->write_string($j,6,"$Year");
			 $worksheet1->write_string($j,7,"$Votes");
		
			
			 
	}
	
	
	
/////////////////
  
  

  
$workbook->close();
?>