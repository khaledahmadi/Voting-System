<html>


<style>
<link href="casadmin.css" rel="stylesheet" type="text/css">
</style>
<center> Search Results</center>
<?php








	$con = mysql_connect("localhost","root");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}

	mysql_select_db("onlinevotingsystem", $con);
	$searchword=$_POST['searchtxt'];
	
	if($searchword!=""){
		$result=mysql_query("SELECT studnum,fname,lname,course,yearlevel,username,password,datee from vcas WHERE studnum LIKE '%".$searchword."%' or lname LIKE '%".$searchword."%' ") or die(mysql_error());
		
		 echo "<div class='designtable'>";
         echo "<table>
		<tr>
		<td>Student Number</td>
  		<td>First Name</td>
		<td>Last Name</td>
		<td>Course</td>
		<td>Year</td>
		<td>Username</td>
		<td>Password</td>
		<td>Birthday</td>
</tr>";
		
		if(mysql_num_rows($result) == 0) {
			echo "<script> alert('No Student Record Found');</script>";
		}
		
		else {
			while($row = mysql_fetch_array($result)){
			echo "<tr>";
				echo "<td>".$row['studnum']."<br />"."</td>";
				echo "<td>".$row['lname']."<br />"."</td>";
				echo "<td>".$row['fname']."<br />"."</td>";
				echo "<td>".$row['course']."<br /><br />"."</td>";
				echo "<td>".$row['yearlevel']."<br /><br />"."</td>";
				echo "<td>".$row['username']."<br /><br />"."</td>";
				echo "<td>".$row['password']."<br /><br />"."</td>";
				echo "<td>".$row['datee']."<br /><br />"."</td>";
			echo "</tr>";
			}
			
		}
		
	}
	else {
		echo "<script> alert('Please input Student Number or Lastname of Student in search field.');
		window.location = 'voterlist.php';</script>";
	}
?>
</html>
