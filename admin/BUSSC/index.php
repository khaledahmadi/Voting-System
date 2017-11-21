<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<script src="js/jquery.min.js"></script>
<script src="js/main.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        var clientHeight = document.documentElement.clientHeight;
        $('#wrapperHeight').height(clientHeight+'px');
        var bodyHeight = clientHeight - $('#body_div').css("marginTop").replace('px', '') - $('#footer').outerHeight(true);
        $('#body_div').height(bodyHeight+'px');
    });
</script>

<head>
<link href="busscadmin.css" rel="stylesheet" type="text/css">
<title>BUSSC ADMIN</title>
</head>

<body>
<div id="container">

		
<div id="header">		
<pre> 																				    
																				
																				
																			
																        			<a href="/b/admin/admindepartment.php"><img src="images/logout.png" height="28"width="70"></a></pre></div>
<div id="examples">  
			<div id="menu">  
			<div class="examples">

    <div id="menu">
        <ul class="level1">
            
			 <li class="level1-li"><a class="level1-a" href="editd.php"target="right_side">Date</a></li>
			
			<li class="level1-li"><a class="level1-a" href="BUSSC_add_position.php"target="right_side">Add Position</a></li>
            <li class="level1-li"><a class="level1-a drop" href="#">Candidates</a>
     
                <ul class="level2">
                    <li><a href="bussc_add_candidate.php"target="right_side">ADD candidates</a></li>
                    <li><a href="BUSSC_view_candidate.php"target="right_side">VIEW candidates</a></li>
					<li><a href="edit_candidate.php"target="right_side">EDIT candidates</a></li>
                    <li><a href="bussc_delete_candidate.php"target="right_side">DELETE Candidates</a><b></b></li>
					
                </ul>
            
            
            <li class="level1-li"><a class="level1-a drop" href="#">Voter</a>
            
                <ul class="level2">
                   
					<li><a href="deletevoter/index.php"target="right_side">DELETE Voter</a></li>
					
					<li><a href="casvoterlist.php"target="right_side">C A S Voter List</a></li>
					<li><a href="cbaavoterlist.php"target="right_side">C B A A Voter List</a></li>
					<li><a href="cedevoterlist.php"target="right_side">C E D E Voter List</a></li>
					<li><a href="convoterlist.php"target="right_side">C O N Voter List</a></li>
					<li><a href="educvoterlist.php"target="right_side">C O E Voter List</a></li>
					<li><a href="sitevoterlist.php"target="right_side">S I T E Voter List</a></li>
					<li><a href="shmt.php"target="right_side">S H M T Voter List</a></li>
					<li><a href="stcvoterlist.php"target="right_side">S T C Voter List</a></li>
                </ul>
           
                   
           <li class="level1-li"><a class="level1-a" href="ccc.php"target="right_side">Canvassing</a></li>
		   <li class="level1-li"><a class="level1-a" href="search.php"target="right_side">Search Voter</a></li>
		    <li class="level1-li"><a class="level1-a" href="setting.php"target="right_side">Setting</a></li>
        </ul>
    </div>

    <div style="clear:both"></div>
</div>
</div>
</div>
</div>

	<div id="footer"><iframe name="right_side" src="" width="100%"  
			height="100%" frameBorder="0"></iframe>  </div>


</body>
</html>



