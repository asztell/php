<!doctype html public "-//W3C//DTD HTML 4.0 //EN">
<html>
<head>
<title>XML Demo</title>
</head>
<body>

<h1>XML Demo</h1>

<?
//load up main.xml and examine it

$xml = simplexml_load_file("main.xml");

print "<h3>original XML</h3> \n";

$xmlText = $xml->asXML();
$xmlText = htmlentities($xmlText);
print "<pre>$xmlText</pre> \n";

print "<h3>extract a named element</h3> \n";
print "$xml->title";
print "<br />";

print "<h3>Extract as an array</h3> \n";
foreach ($xml->children() as $name => $value){
  print "<b>$name:</b>   $value<br /> \n";
} // end foreach

?>
</body>
</html>
