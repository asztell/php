<?php
	include "SuperHTMLDef.php";
	$s = new SuperHTML("");
	$s->buildTop();
	
	if (!$value) {

		$s->addText("<form> \n");
		$myArray = array( 
		  array($s->gTag("b","Your name: "), $s->gTextbox("Your name")), 
		  array("Your email: ", $s->gTextbox("Your email")), 
		  array("Your hobbies: ", $s->gTextbox("Your hobbies")),
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
