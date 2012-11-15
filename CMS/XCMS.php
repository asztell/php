<?
	extract( $_GET );
	if ( empty( $theXML ) ) {
	  $theXML = "kenMain.xml";
	}
	$xml = simplexml_load_file( $theXML );
	if ( !$xml ) {
	  print ( "there was a problem opening the XML" );
	} else {
		include( $xml->css );
		include( $xml->top );

		print "<span class= \"rightPanel\"> \n";
		include( $xml->right );
		print "</span> \n";
	
		print "<span class = \"menuPanel\"> \n";
		include ( $xml->menu );
		print "</span> \n";
	
		print "<span class = \"item\"> \n";
		include ( $xml->content ); 
		print "</span> \n";
	}
?>






