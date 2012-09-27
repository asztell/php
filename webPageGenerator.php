<?php

	$HTML_Header = "<html><head><title>".$_POST['pagename']."
</title>";
	$HTML_Style = 
	'<style type="text/css">
		body {
			background-color = "'.$_POST['bgcolor'].'";
			color = "'.$_POST['fontcolor'].'";
		}
	</style>'; 

	$HTML_Content = "</head><body><h1><center>".$_POST['content']."</center><h1><br /><hr />"; 
	$HTML_Footer =  "</body></html>"; 

	$newpage = "$_POST['pagename'].html";
	$handle = fopen( '$newpage', 'w' );
	
	fwrite($handle, $HTML_Header);
	fwrite($handle, $HTML_Style);
	fwrite($handle, $HTML_Content);
	fwrite($handle, $HTML_Footer);

	fclose($handle);

	header("location:$newpage");

?>
