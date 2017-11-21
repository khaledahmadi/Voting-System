<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>WELCOME STUDENTS!</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
<script type="text/javascript" src="jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="jquery.dropotron-1.0.js"></script>
<script type="text/javascript" src="jquery.slidertron-1.1.js"></script>
<script type="text/javascript">

	$(function() {
		$('#menu > ul').dropotron({
			mode: 'fade',
			globalOffsetY: 11,
			offsetY: -15
		});
		$('#slider').slidertron({
			viewerSelector: '.viewer',
			indicatorSelector: '.indicator span',
			reelSelector: '.reel',
			slidesSelector: '.slide',
			speed: 'slow',
			advanceDelay: 4000
		});
	});
</script>
</head>
<body>
<div id="wrapper">
	<div id="header">
		
	</div>
	<div id="cssmenu">
		<ul>
			<li class="first">
				
			<li><a href="#">Home</a></li>
			<li><a href="department/department.php" >Organizations</a></li>
			
			<div id="footer"><iframe name="right_side" src="" width="100%"  
			height="100%" frameBorder="0"></iframe>  </div>
			
			
		</ul>
		<br class="clearfix" />
	</div>
	<div id="slider">
		<div class="viewer">
			<div class="reel">
				
				
				<div class="slide">
					<img src="images/i.png" alt="" />
				</div>
				<div class="slide">
					<img src="images/a.png" alt="" />
				</div>
				<div class="slide">
					<img src="images/b.png" alt="" />
				</div>
				<div class="slide">
					<img src="images/c.png" alt="" />
				</div>
				<div class="slide">
					<img src="images/d.png" alt="" />
				</div>
				<div class="slide">
					<img src="images/e.png" alt="" />
				</div>
				<div class="slide">
					<img src="images/f.png" alt="" />
				</div>
				
				
			</div>
		</div>
		<div class="indicator">
			<span>1</span>
			<span>2</span>
			<span>3</span>
			<span>4</span>
			<span>5</span>
			<span>6</span>
			<span>7</span>
		</div>
	</div>
	</div>
	

</body>
</html>