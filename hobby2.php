<?php
	include "SuperHTMLDef.php";
	$s = new SuperHTML("");
	$s->buildTop();
	
	if (!$_POST['Your_name']) {

		$s->addText("<form method=\"post\" action=\"\"> \n");
		$myArray = array( 
		  array($s->gTag("b","Your name: "), $s->gTextbox("Your_name")), 
		  array("Your email: ", $s->gTextbox("Your_email")), 
		  array("Your hobbies: ", $s->gTextbox("Your_hobbies")),
		); 

		$s->buildTable($myArray); 
		$s->submit(); 
		
		$s->addText("</form> \n"); 
	} else {
		$s->formResults();
	}

	$s->buildBottom();
	print $s->getPage();
?>
