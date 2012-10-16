<?php
	$images = array( 0 => "2c", 1 => "3c", 2 => "4c", 3 => "5c", 4 => "6c", 5 => "7c", 6 => "8c", 7 => "9c", 8 => "tc", 9 => "kc", 10 => "qc", 11 => "jc", 12 => "ac", 13 => "2d", 14 => "3d", 15 => "4d", 16 => "5d", 17 => "6d", 18 => "7d", 19 => "8d", 20 => "9d", 21 => "td", 22 => "kd", 23 => "qd", 24 => "jd", 25 => "ad", 26 => "2s", 27 => "3s", 28 => "4s", 29 => "5s", 30 => "6s", 31 => "7s", 32 => "8s", 33 => "9s", 34 => "ts", 35 => "ks", 36 => "qs", 37 => "js", 38 => "as", 39 => "2h", 40 => "3h", 41 => "4h", 42 => "5h", 43 => "6h", 44 => "7h", 45 => "8h", 46 => "9h", 47 => "th", 48 => "kh", 49 => "qh", 50 => "jh", 51 => "ah" );

    $images = shuffle( $images );
//	$rand_images = array_rand( $images, 5 );
//	$card1 = $images[$rand_images[0]];
	$card1 = $images[5];
	$card2 = "9s.gif";
	$card3 = "3s.gif";
	$card4 = "kc.gif";
	$card5 = $images['4'];
?>

<!DOCTYPE html>
<html>

	<head><title></title>
	</head>

	<body>
		<form method="post" action="pokerHand.php">
<?php
	echo "<img src = 'http://ciswebs.smc.edu/cs85/geddes_james/labs/lab04/cards/".$card1.".gif' width='50' height='70' alt='card1'/>";
	echo "<img src = 'http://ciswebs.smc.edu/cs85/geddes_james/labs/lab04/cards/".$card2.".gif' width='50' height='70' alt='card2'/>";
	echo "<img src = 'http://ciswebs.smc.edu/cs85/geddes_james/labs/lab04/cards/".$card3.".gif' width='50' height='70' alt='card3'/>";
	echo "<img src = 'http://ciswebs.smc.edu/cs85/geddes_james/labs/lab04/cards/".$card4.".gif' width='50' height='70' alt='card4'/>";
	echo "<img src = 'http://ciswebs.smc.edu/cs85/geddes_james/labs/lab04/cards/".$card5.".gif' width='50' height='70' alt='card5'/>";
?>
		</form>
	</body>

</html>
