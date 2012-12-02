<?php

	$filter1 = filter_input(INPUT_POST, "album_title");
	$filter2 = filter_input(INPUT_POST, "first_name");
	$filter3 = filter_input(INPUT_POST, "last_name");
	$filter4 = filter_input(INPUT_POST, "band_name");

//	$filter1 = mysql_real_escape_string($filter1);
//	$filter2 = mysql_real_escape_string($filter2);
//	$filter3 = mysql_real_escape_string($filter3);
//	$filter4 = mysql_real_escape_string($filter4);

	$result = mysqli_query($conn, "
		SELECT asztalos_arpad_attil_albums.album_id as 'Album ID',
			asztalos_arpad_attil_album.album_title as 'Title',
			asztalos_arpad_attil_album.release_year as 'Release Year',
			asztalos_arpad_attil_artist.artist_id as 'Artist ID',
			asztalos_arpad_attil_artist.first_name as 'First Name',
			asztalos_arpad_attil_artist.last_name as 'Last Name',
			asztalos_arpad_attil_artist.style as 'Style',
			asztalos_arpad_attil_band.band_ID as 'Band ID',
			asztalos_arpad_attil_band.band_name as 'Band Name',
			asztalos_arpad_attil_band.member1 as '',
			asztalos_arpad_attil_band.member2 as '',
			asztalos_arpad_attil_band.member3 as '',
			asztalos_arpad_attil_band.member4 as '',
			asztalos_arpad_attil_band.member5 as ''
		FROM asztalos_arpad_attil_album,
			asztalos_arpad_attil_artist,
			asztalos_arpad_attil_band
		WHERE asztalos_arpad_attil_albums.album_title = '$filter1'
		OR asztalos_arpad_attil_artist.first_name = '$filter2'
		OR asztalos_arpad_attil_artist.lastst_name = '$filter3'
		OR asztalos_arpad_attil_band.band_name = '$filter4'
	");

	while($row = mysql_fetch_assoc($result)) {
		foreach ($row as $name => $value) {
			echo "$name: $value<br />\n";
		}
	}

?> 
