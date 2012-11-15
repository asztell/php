<!doctype html public "-//W3C//DTD HTML 4.0 //EN">
<html>
<head>
<title>Quiz Reader</title>
</head>
<body>
<?
//quiz reader
//demonstrates working with more complex XML files

//load up a quiz file
$xml = simplexml_load_file("python.xml");

//step through quiz as associative array
foreach ($xml->children() as $problem){

  //print each question as an ordered list.
  print <<<HERE
  <h3>$problem->question</h3>
  <ol type = "A">
    <li>$problem->answerA</li>
    <li>$problem->answerB</li>
    <li>$problem->answerC</li>
    <li>$problem->answerD</li>
  </ol>
HERE;
} // end foreach

//directly accessing a node:

print $xml->problem[0]->question;

?>
</body>
</html>
