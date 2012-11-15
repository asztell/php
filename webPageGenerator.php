<?php	
    //Later configure this in main php config file
    error_reporting(E_ALL);

	//header("Content-type: text/css");
	$bgcolor = $_POST['bgcolor'];
	$color = $_POST['fontcolor'];
	//$dkgreen = '#008400';
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php$_POST['pagename']?></title>
        <style type="text/css">
        body {
            background: <?=$bgcolor?>;
            color: <?=$color?>;
        }		
        </style>
    </head>
    <body>
        <h1><?php$_POST['content']?><h1>
        <br /><hr /> 
    </body>
</html> 
