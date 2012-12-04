<?php

	include('db_connection_info.inc');

	$conn = mysqli_connect('localhost', $cs85Username, $cs85Password, 'albums');
	$filter2 = filter_input(INPUT_POST, "first_name");
	
	$result = mysqli_query($conn, "
		SELECT asztalos_arpad_attil_artist.artist_id AS 'Artist id',
		FROM asztalos_arpad_attil_artist
		WHERE first_name LIKE '%$filter2%'
	;");
	
	$row == mysqli_fetch_assoc($result);
	echo $row;
	
?>
