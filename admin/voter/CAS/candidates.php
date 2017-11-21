<link rel='stylesheet' type='text/css' href='style.css'>
<script type="text/javascript" src="jquery.js"></script>
	<?php require('dbcon.php');
			$position = $_POST['position'];
		$can_query = mysql_query("SELECT * FROM cas WHERE position='$position'")or die(mysql_error());
		if($position != 'select position'){
		?>
		<h3>Candidates</h3>
	
			<select id="pick" name="candidate">
				<option selected>--Select Candidate--</option>
		<?php
			while($row = mysql_fetch_array($can_query)){
				$fname = $row['fname'];
				$lname = $row['lname'];
				$can_id = $row['candidateID'];
				$name = $fname." ".$lname;
				echo "<option value='$can_id'> $name </option>";
	
				
			}
		
		?>
		</select>
	
		<?php
		}
		
		?>
		
		<script type="text/javascript">
		$(document).ready(function(){
		
				$('#pick').change(function(){
					var id = $('#pick').val();
					if(id !="select candidate"){
					$.ajax({
						url:"detail.php",
						type:"post",
						data:{id : id},
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
					}
				});
			
			
		});
			
	</script>