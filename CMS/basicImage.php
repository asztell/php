<?
//circle.php
$img = imagecreate(400, 400);

//first color allocated will become background
$white = imagecolorallocate($img, 255, 255, 255);
$red = imagecolorallocate($img, 255, 0, 0);

//draw a circle
imagefilledellipse($img, 200, 200, 200, 200, $red);

//print out the element
header("Content-type: image/png");

imagepng($img);
imagedestroy($img);
?>





