

<?

$xml = simplexml_load_file("python.xml");

$theCode = $xml->asXML();

$theCode = str_replace("<", "&lt;", $theCode);


$q = $xml->problem[0]->question[0];


foreach ($xml->problem as $p){
  print $p->question[0];
  print "<br />\n";
  print $p->answerA[0];
  print "<br />\n";
  print $p->answerB[0];
  print "<br />\n";
  print $p->answerC[0];
  print "<br />\n";
  print $p->answerD[0];
  print "<br />\n";
  print $p->correct[0];
  print "<br />\n";
  print "<hr />\n";
} // end foreach


print "<font color = 'red'>\n";
foreach ($xml->problem as $p){
	foreach ($p->children() as $title => $c){
		print "$title: $c <br />\n";
    } // end foreach
	print "<hr />\n";
} // end foreach
print "</font> \n";


?>



