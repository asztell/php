<?php
session_start();
extract($_REQUEST);
	$_SESSION['counter'] = ( !$_SESSION['counter'] ) ? 0 : $_SESSION['counter'];
	if( $_POST['guess'] ) {
		$_SESSION['counter']++;
	}
	if (!$_SESSION['number']) {
		$_SESSION['number'] = rand( 1, 100 );
	}
	if ($_POST['guess']) {
		if (!is_numeric($_POST['guess'])) {
				$error_msg1 = "you inputed kaka";
		} else {
			if ($_POST['guess'] > $_SESSION['number']) {
				$hi_lo = " is too high :(";
				//echo "counter ". $_SESSION['counter']. "<br/>";
				//echo "number ". $_SESSION['number'];
			} else if($_POST['guess'] < $_SESSION['number']) {
				$hi_lo = " is too low :(";
				//echo "counter ". $_SESSION['counter']. "<br/>";
				//echo "number ". $_SESSION['number'];				
			} else {
				$hi_lo = " is corect :) !";
				$displayCounter = "It took you only ". $_SESSION['counter']. " guesses!";
				session_destroy();
			}
		}
	}
?>


<!DOCTYPE html>
<html>
	<head><title></title>
	</head>
	
	<body align="center">
		<h2>I'm thinking of a number between 1 and 100</h2>
		<h2>Can you guess what it is?</h2>
		<h2><?php echo $_POST['guess']. $hi_lo; ?></h2>
		<form method="post" action="numberGuessingGame.php">
			<input type="text" name="guess"/>
			<input type="submit" name="submit"/>
		</form>
		<h2><?php echo $displayCounter; ?></h2>	
	</body>

</html>
