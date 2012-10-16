<?php
	$images = array( 0 => "2c", 1 => "3c", 2 => "4c", 3 => "5c", 4 => "6c", 5 => "7c", 6 => "8c", 7 => "9c", 8 => "tc", 9 => "kc", 10 => "qc", 11 => "jc", 12 => "ac", 13 => "2d", 14 => "3d", 15 => "4d", 16 => "5d", 17 => "6d", 18 => "7d", 19 => "8d", 20 => "9d", 21 => "td", 22 => "kd", 23 => "qd", 24 => "jd", 25 => "ad", 26 => "2s", 27 => "3s", 28 => "4s", 29 => "5s", 30 => "6s", 31 => "7s", 32 => "8s", 33 => "9s", 34 => "ts", 35 => "ks", 36 => "qs", 37 => "js", 38 => "as", 39 => "2h", 40 => "3h", 41 => "4h", 42 => "5h", 43 => "6h", 44 => "7h", 45 => "8h", 46 => "9h", 47 => "th", 48 => "kh", 49 => "qh", 50 => "jh", 51 => "ah" );

    shuffle( $images );
	$card1 = $images[5];
	$card2 = $images[9];
	$card3 = $images[1];
	$card4 = $images[25];
	$card5 = $images['14'];
?>

<!DOCTYPE html>
<html>

	<head><title></title>
	</head>
	<style type="text/css">
		body {
			background-color: green;
			text-align: center;
			color: white;
		}
		img {
			margin-left: 1px;
			margin-right: 1px;
		}
		#content {
			width: 160px;
			margin-left: auto;
			margin-right: auto;
		}
		input[type=submit] {
			height: 12px;
			width: 30px;
			font-size: 8px;
			padding-top: 0px;
		}
	</style>
	<body>
		<div id="content">
			<form method="post" action="pokerHand.php">
			<?php
				echo "<h5>Poker Hand</h5>";
				echo "<img src = 'http://ciswebs.smc.edu/cs85/geddes_james/labs/lab04/cards/".$card1.".gif' width='30' height='45' alt='card1'/>";
				echo "<img src = 'http://ciswebs.smc.edu/cs85/geddes_james/labs/lab04/cards/".$card2.".gif' width='30' height='45' alt='card2'/>";
				echo "<img src = 'http://ciswebs.smc.edu/cs85/geddes_james/labs/lab04/cards/".$card3.".gif' width='30' height='45' alt='card3'/>";
				echo "<img src = 'http://ciswebs.smc.edu/cs85/geddes_james/labs/lab04/cards/".$card4.".gif' width='30' height='45' alt='card4'/>";
				echo "<img src = 'http://ciswebs.smc.edu/cs85/geddes_james/labs/lab04/cards/".$card5.".gif' width='30' height='45' alt='card5'/>";
			?>
				<br/><input type="submit" value="deal" onSubmit="window.location.reload()">
			</form>
		</div>
	</body>

</html>
