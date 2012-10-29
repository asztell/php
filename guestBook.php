<?php


$fp = fopen('http://ciswebs.smc.edu/cs85/asztalos_arpad_attil/Data/guest.txt', 'r');

?>

<!DOCTYPE html>
<html>

	<head><title></title>
		<style type="text/css">
			body {
				background-color: #444D2E;
				color: red;
			}
		</style>
	</head>

	<body>
		<h3>GUEST BOOK</h3>
		<form action="guestBook.php" method="post">
		Input text: <input type="text" name="newText"/>
		</form>
	</body>

</html>
