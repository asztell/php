<?php
session_start();
	$_SESSION['counter'] = 0;
	$_SESSION['counter'] = ( !$_SESSION['counter'] ) ? 0 : $_SESSION['counter'];
	if( $_POST['submit'] ) {
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
				$hi_lo = "is too high";
				echo "counter ". $_SESSION['counter']. "<br/>";
				echo "number ". $_SESSION['number'];
			} else if($_POST['guess'] < $_SESSION['number']) {
				$hi_lo = "is too low";
				echo "counter ". $_SESSION['counter']. "<br/>";
				echo "number ". $_SESSION['number'];				
			} else {
				$hi_lo = "is corect!";
				$displayCounter = "It took you ". $_SESSION['counter']. "guesses!";
				//session_destroy();
			}
		}
	}
?>


<!DOCTYPE html>
<html>
	<head><title></title>
	</head>
	
	<body>
		<h5>I'm thinking of a number between 1 and 100</h5>
		<h5>Can you guess what it is?</h5><br/>
		<h5><?php echo $guess. $hi_lo; ?></h5>
		<form method="post" action="numberGuessingGame.php">
			<input type="text" name="guess"/>
			<input type="submit" name="submit"/>
		</form>
	
	</body>

</html>
