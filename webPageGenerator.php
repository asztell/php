
	<!Doctype html><html><head><title><?php$_POST['pagename']?></title>
<?php	
	header("Content-type: text/css");
	$bgcolor = "$_POST['bgcolor']";
	$color = "$_POST['fontcolor']";
	//$dkgreen = '#008400';
?>
	body {
		background:<?=$bgcolor?>;
		color:<?=$color?>;
	}		
	<!-->	<style type="text/css">
			body {
				background-color = "'<?php$_POST['bgcolor']?>'";
				color = <?php$_POST['fontcolor']?>;
			}
		</style> //-->

	</head><body><h1><?php$_POST['content']?><h1><br /><hr /> 
	</body></html> 
