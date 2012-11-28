<?php
	include( 'db_connection_info.inc' );
	$conn = mysqli_connect( 'localhost', $cs85Username, $cs85Password, 'albums' );
	$result = mysqli_query( $conn, '
	create table if not exists asztalos_arpad_attil_artist (
	firstName varchar( 15 ), 
	lastName varchar( 15 ) 
	);
	' );
	if ( !$result ) {
		echo mysqli_error( $conn );
	} else {
		echo "table artist created<br />";
	}
	$result = mysqli_query( $conn, '
	create table if not exists asztalos_arpad_attil_album ( 
	album_id int( 7 ), 
	album_title varchar( 30 ), 
	realease_year int( 4 ) 
	);
	');
	if ( !$result ) {
		echo mysqli_error( $conn );
	} else {
		echo "table album created<br />";
	}
	$result = mysqli_query( $conn, '
	alter table asztalos_arpad_attil_artist 
	add artist_id int( 7 )
	;
	');
		if ( !$result ) {
		echo mysqli_error( $conn );
	} else {
		echo "artist_id created<br />";
	}
	$result = mysqli_query( $conn, '
	alter table asztalos_arpad_attil_artist
	add constraint pk_artist_id primary key (artist_id);
	' );
	if ( !$result ) {
		echo mysqli_error( $conn );
	} else {
		echo "pk_artist_id created<br />";
	}

?>
