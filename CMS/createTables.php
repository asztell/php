<?php
	include( 'db_connection_info.inc' );
	$conn = mysqli_connect( 'localhost', $cs85Username, $cs85Password, 'albums' );
	$result = mysqli_query( $conn, 'create table if not exists asztalos_arpad_attil_artist ( firstName varchar( 15 ), lastName varchar( 15 ) );' );
	if ( !$result ) {
		echo mysqli_error( $conn );
	} else {
		echo "table created";
	}
?>
