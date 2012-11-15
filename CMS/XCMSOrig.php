<?

//XCMS
//XML-Based Simple CMS system
//Andy Harris for PHP/MySQL Adv. Beg 2nd Ed.
// NOTE:  Requires simpleXML extensions in PHP 5.0!

//get an XML file or load a default
if (empty($theXML)){
  $theXML = "main.xml";
} // end if

//Open up XML file 
$xml = simplexml_load_file($theXML);

if ( !$xml){
  print ("there was a problem opening the XML");

} else {

  include ($xml->css);
  include($xml->top);

  print "<span class = \"menuPanel\"> \n";
  include ($xml->menu);
  print "</span> \n";

  print "<span class = \"item\"> \n";
  include ($xml->content);
  print "</span> \n";

} // end if

?>






