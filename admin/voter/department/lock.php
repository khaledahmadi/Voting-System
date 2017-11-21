<html>
<head>
<title> DEPARTMENT</title>
<style type="text/css">
/* popup_box DIV-Styles*/
#popup_box {
    display:none; /* Hide the DIV */
    position:fixed;  
    _position:absolute; /* hack for internet explorer 6 */  
    height:300px;  
    width:600px;  
    background:#FFFFFF;  
    left: 300px;
    top: 150px;
    z-index:100; /* Layering ( on-top of others), if you have lots of layers: I just maximized, you can change it yourself */
    margin-left: 15px;  
   
    /* additional features, can be omitted */
    border:2px solid #ff0000;      
    padding:15px;  
    font-size:15px;  
    -moz-box-shadow: 0 0 5px #ff0000;
    -webkit-box-shadow: 0 0 5px #ff0000;
    box-shadow: 0 0 5px #ff0000;
   
}

#container {
    background: #d2d2d2; /*Sample*/
    width:100%;
    height:100%;
}

a{ 
cursor: pointer; 
text-decoration:none; 
}

/* This is for the positioning of the Close Link */
#popupBoxClose {
    font-size:20px;  
    line-height:15px;  
    right:5px;  
    top:5px;  
    position:absolute;  
    color:#6fa5e2;  
    font-weight:500;      
}
</style>    
<script src="http://jqueryjs.googlecode.com/files/jquery-1.2.6.min.js" type="text/javascript"></script>

<script type="text/javascript">
   
    $(document).ready( function() {
   
        // When site loaded, load the Popupbox First
        loadPopupBox();
   
        $('#popupBoxClose').click( function() {           
            unloadPopupBox();
        });
       
        $('#container').click( function() {
            unloadPopupBox();
        });

        function unloadPopupBox() {    // TO Unload the Popupbox
            $('#popup_box').fadeOut("slow");
            $("#container").css({ // this is just for style       
                "opacity": "1" 
            });
        }   
       
        function loadPopupBox() {    // To Load the Popupbox
            $('#popup_box').fadeIn("slow");
            $("#container").css({ // this is just for style
                "opacity": "0.3" 
            });        
        }       
    });
</script>    
</head>
<body>
<div id="popup_box">   
    <?php
include('dbcon.php');
$current_date = date('Y-m-d H:i:s');
$result = mysql_query("SELECT * FROM date") 
                or die(mysql_error());  
		$row = mysql_fetch_array($result);
		$datestart= $row['datestart'];
		$dateend= $row['dateend'];
		if($current_date >= $datestart && $current_date<=$dateend){
		echo "VOTING OPEN";
		}else{
		echo "VOTING CLOSE";
		}
?>
    <a id="popupBoxClose">Close</a>   
</div>

</body>
</html> 

