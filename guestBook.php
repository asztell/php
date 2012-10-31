<?php
	$filename = "guestBook.txt";
	echo "<h6>print file: <br/>";
	$list = file($filename);
	foreach ( $list as $row ) {
		echo $row."<br/>";
	}
	echo "</h6>";
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
