<?php
	$card_deck = array( "2c", "3c", "4c", "5c", "6c", "7c", "8c", "9c", "tc", "kc", "qc", "jc", "ac", "2d", "3d", "4d", "5d", "6d", "7d", "8d", "9d", "td", "kd", "qd", "jd", "ad", "2s", "3s", "4s", "5s", "6s", "7s", "8s", "9s", "ts", "ks", "qs", "js", "as", "2h", "3h", "4h", "5h", "6h", "7h", "8h", "9h", "th", "kh", "qh", "jh", "ah" );

    shuffle( $card_deck );
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
	</style>
	<body>
		<div id="content">
			<h5>Poker Hand</h5>
			<?php
				for ( $i = 0; $i < 5; $i++ ) {
					echo "<img src = 'http://ciswebs.smc.edu/cs85/geddes_james/labs/lab04/cards/".$card_deck[$i].".gif' width='30' height='45' alt='card1'/>";
				}
			?>
			<br/><a onclick="window.location.reload();">Deal</a>
		</div>
	</body>

</html>
