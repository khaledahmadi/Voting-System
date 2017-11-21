<?php








	$con = mysql_connect("localhost","root");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}

	mysql_select_db("onlinevotingsystem", $con);
	$searchword=$_POST['searchtxt'];
	
	if($searchword!=""){
		$result=mysql_query("SELECT studnum,fname,lname,course,yearlevel,username,password from vcede WHERE studnum LIKE '%".$searchword."%' or lname LIKE '%".$searchword."%' ") or die(mysql_error());
echo "<p align = 'center'><font size = '20'>Search Results</font></p>";
		echo "<table align='center' border='1'>
		<tr>
<th>Student Number</th>
<th>Lastname</th>
<th>Firstname</th>
<th>Course</th>
<th>Year</th>
<th>Username</th>
<th>Password</th>
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
			echo "</tr>";
			}
			
		}
		
	}
	else {
		echo "<script> alert('Please input Student Number or Lastname of Student in search field.');
		window.location = 'voterlist.php';</script>";
	}
?>

