<?php
	session_start();	
 if(!isset($_SESSION['uname'])){
     header('location: index.php ');
	}

?>
<doctype html>
<html lan="en">
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
	<head>
		<title> Cast Your Vote!</title>
		<link rel='stylesheet' type='text/css' href='style.css'>
		<script type="text/javascript" src="jquery.js"></script>
	
	</head>
	<body>
<div id="wrapper">
	<div id="header">


<br>
<br>
<br>

								<a href="index.php" id="logout">LOGOUT <?php echo $_SESSION['uname'];?></a></div>
										
		<div id="cssmenu">
		<ul>
			<li class="first">
				
			<li><a href="vote.php"  >Vote</a></li>
		
			
			
			
			
		</ul>
		<br class="clearfix" />
	</div>
	
<div id="slider">
		<div class="viewer">
			<div class="reel">
				
				
				
	
	
	

	
	<?php
	 require('dbcon.php');
		$query_position = mysql_query("SELECT DISTINCT position FROM cas ")or die(mysql_error());

	 ?>
	
	<div id="vote">
	
	<h1>Vote</h1>
		<h3>Position</h3>
		<select name='position' id="position">
			<option value= "select position" selected>--Select Position--</option>
			<?php
				while($row_position = mysql_fetch_array($query_position)){
					$position = $row_position['position'];
					echo "<option value='$position'>$position </option>";
				
				}
			?>
		</select><br>
			
		<?php  
		 $query_position = mysql_query("Select distinct position from cas")or die(mysql_error());
		 while($row_position = mysql_fetch_array($query_position)){	
		 $position = $row_position['position'];
		?>
			<div id="<?php echo str_replace(' ','',$position); ?>"  class='position' style='display:none'>
			<a href="#" class='close' title='close' name='<?php echo str_replace(' ','',$position); ?>' >x</a>	
			  <?php
			   echo "<span><h2>Candidates for ".$row_position['position']."</h2></span>";
			   $query_positions = mysql_query("Select * from cas where position='$position'")or die(mysql_error());
			   while($row_positions = mysql_fetch_array($query_positions)){
			   ?>
			   <div  class="candidate">
			   <?php
			   $image = $row_positions['image'];
			   $id = $row_positions['candidateID'];
			 
				echo "<a href='#' class='modal'  name='$id'><img src='images/$image' >";
			   echo $row_positions['fname']." ".$row_positions['lname']."</a>";
			   ?>
			   </div>
			   <?php
			   }
			  
			  ?>
			</div>
	<?php } ?>
	
		
			<div id='candidate_det'>
			<a href="#" class='close' title='close' name='' >x</a>	
				<div id='det'>
				</div>
			</div>
		
	</div>
	
	<div id="mask"></div>
		<script type="text/javascript">
		$(document).ready(function(){
				$('#position').change(function(){
					var pos = $('#position').val();
				var position = pos.replace(/\s+/g, '');
			
				     $('#'+position).fadeIn('fast');
					 
				});
		$('.close').click(function(){
		if($(this).attr('name')!=""){
			var id = $(this).attr('name');
			$('#'+id).fadeOut('fast');
			}else{
			
			$('#candidate_det').fadeOut('fast');
			$('#mask').fadeOut('fast');
			}
				});
			
		$('.modal').click(function(){
				var id = $(this).attr('name');
			$('#mask').fadeIn('fast');
			$('#candidate_det').fadeIn('fast');
				$.ajax({
						url:'detail.php',
						type:'post',
						data:'id='+id,
						success: function (data){
						if(data !=" "){
								$('#candidate_det').html(data);
									$('#mask').fadeIn('fast');
								$('#candidate_det').fadeIn('fast');
							
							}else{
								$('#candidate_det').fadeOut('slow');
							}
								
						}
					
					});
			});
		$('#cyv').click(function(){
			$('#yvoted_wrapper').slideToggle();
			var id = $(this).attr('name');
			$.ajax({
			 url:'cyv.php',
			 type:'post',
			 data:'id='+id,
			 success:function(data){
				$('#yvoted').html(data);
			 }
			});
		});
			
		});
	</script>
	
	</body>
</html>