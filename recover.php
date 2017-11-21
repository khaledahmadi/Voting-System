<?php
include('connect.php');
$dsdsss=$_POST['username'];
$sadsdsd = $db->prepare("SELECT count(*) FROM students WHERE id= :h");
	$sadsdsd->bindParam(':h', $dsdsss);
	$sadsdsd->execute();
	$rowaas = $sadsdsd->fetch(PDO::FETCH_NUM);
	$wapakpak=$rowaas[0];
?>
<?php
if ($wapakpak != 0) {
$dsdas=$_POST['username'];
$resultas = $db->prepare("SELECT * FROM students WHERE id= :a");
	$resultas->bindParam(':a', $dsdas);
	$resultas->execute();
	for($i=0; $rowas = $resultas->fetch(); $i++){
	$dsds=$rowas['question'];
	echo 'Question: '.$dsds.'
<form action="recoverpassword.php" method="POST">
<span style="color: #f41313;">Answer</span><br>
<input type="hidden" name="username" value="'.$dsdas.'" /><input type="text" name="answer" value="" /><br><br>
<div class="btn-save"><input type="submit" value="Next" /></div>
</form>';
}
}
if ($wapakpak == 0) {
	echo '<div style="text-align:center; margin-top: 50px;">ID Number Not Found</div>';
}
?>

<head>
<style>
    .btn-save input{
    width: 80px;
    height: 40px;
    font-weight: bold;
    font-size: 15px;
    cursor: pointer;
    color: #fff;
    border-radius: 4px;
    border: none;
    background-color: #2ECC71;
    border-bottom: 4px solid #27AE60;
    margin-bottom: 20px;
    }
    input[type="text"]{
    height: 30px;
    width: 200px;
    font-size: 18px;
    border-radius: 3px; 
    margin-top: 10px;
}
    </style>
</head>