<?php 
session_start();
?>
<?php
	$min = 1;
	$max = 100;
	$_SESSION['number'] = rand( $min, $max );
	$_SESSION['guess'] = 0; 
//	echo "<h1>You rolled ". $_SESSION['number']. "!</h1>";
	$_SESSION['counter'] = 0;
	$_SESSION['counter'] = ( !$_SESSION['counter'] ) ? 0 : $_SESSION['counter'];
	if( $_POST['submit'] ) {
		$_SESSION['counter']++;
	}
?>

<?php
	do {
		echo "I'm thinking of a number between 1 and 100<br/>";
		echo "Can you guess what it is?";		
		echo	'<form action="numberGuessingGame.php" method="post">
					<input type="text" name="guess"/>
					<input type="submit" value="submit guess!" name="submit"/>
				</form>';
	} while ($_SESSION['counter'] == 0);
	if ( $_POST['submit'] ) {
		if ( $_POST['guess'] < $_SESSION['number']) {
			echo "I'm thinking of a number between 1 and 100<br/>";
			echo "Try to guess what it is<br/>";
			echo "Your guess is <h3>lower</h3> than the number";
			echo "<br/>TRY AGAIN";
			echo	'<form action="numberGuessingGame.php" method="post">
						<input type="text" name="guess"/>
						<input type="submit" value="submit guess!" name="submit"/>
					</form>';
			echo "<h1>number: ". $_SESSION['number']. "</h1>";
			echo "<h1>counter: ". $_SESSION['counter']. "</h1>";
		} else if ( $_POST['guess'] > $_SESSION['number'] ) {
			echo "I'm thinking of a number between 1 and 100<br/>";
			echo "Try to guess what it is<br/>";
			echo "Your guess is <h3>higher</h3> than the number";
			echo "<br/>TRY AGAIN";
			echo	'<form action="numberGuessingGame.php" method="post">
						<input type="text" name="guess"/>
						<input type="submit" value="submit guess!" name="submit"/>
					</form>';
			echo "<h1>number: ". $_SESSION['number']. "</h1>";
			echo "<h1>counter: ". $_SESSION['counter']. "</h1>";
		} else {
			echo "You guessed right!";
			echo "Good job! It only took you ". $_SESSION['counter']. " tries!";
			session_destroy();
		}
	}
?>
