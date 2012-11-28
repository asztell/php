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
		//echo "table artist created<br />";
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
		//echo "table album created<br />";
	}
	$result = mysqli_query( $conn, '
	alter table asztalos_arpad_attil_artist 
	add artist_id int( 7 )
	;
	');
		if ( !$result ) {
		echo mysqli_error( $conn );
	} else {
		//echo "artist_id created<br />";
	}
	$result = mysqli_query( $conn, '
	alter table asztalos_arpad_attil_artist
	add constraint pk_artist_id primary key (artist_id)
	;
	');
	if ( !$result ) {
		echo mysqli_error( $conn );
	} else {
		//echo "pk_artist_id created<br />";
	}


$searchForm = '
	<!Doctype html>
		<html>
			<head>
				<title>SEARCH</title>
			</head>
			<body>

				<h1>Search</h1>
				<p>Enter the title of the CD or name of the artist you want to find.</p>
				<form action="createTables.php" method="POST">
				   <table border="0">
					  <tr>
						 <td align="right">Title:</td>
						 <td><input type="text" name="title_or_name" maxlength="40" size="40"><br />
						 </td>
					  </tr>
					  <tr>
						 <td colspan="2">
							<p align="center"><input type="submit" value="Search"></p>
						 </td>
					  </tr>
				   </table>
				</form>

			</body>

		</html>';
		
$addArtistForm = '
	<!Doctype html>
	<html>
		<head>
			<title>New Artist</title>
		</head>
		<body>
			<h1>New Artist</h1>
			<form action="createTable.php" method="POST">
			   <table border="0">
				  <tr>
					 <td align="right">Artist\'s first name:</td>
					 <td><input type="text" name="first_name" maxlength="30" size="30"><br />
				  </tr>
				  <tr>
					 <td align="right">Artist\'s last name:</td>
					 <td><input type="text" name="last_name" maxlength="30" size="30"><br />
					 </td>
				  </tr>
				  <tr>
					 <td align="right">Style:</td>
					 <td><input type="text" name="style" maxlength="30" size="30"><br />
				  </tr>
				  <tr>
					 <td colspan="2">
						<p align="center"><input type="submit" value="Save"></p>
					 </td>
				  </tr>
			   </table>
			</form>
		</body>
	</html>';
	
$addAlbumForm = '
	<!Doctype html>
	<html>
		<head>
			<title>New Album</title>
		</head>
		<body>
			<h1>New Album</h1>
			<form action="createTable.php" method="POST">
			   <table border="0">
				  <tr>
					 <td align="right">Album title:</td>
					 <td><input type="text" name="album_title" maxlength="30" size="30"><br /></td>
				  </tr>
				  <tr>
					 <td align="right">Style:</td>
					 <td><input type="text" name="style" maxlength="30" size="30"><br /></td>
				  </tr>
				  <tr>
					 <td colspan="2">
						<p align="center"><input type="submit" value="Save"></p>
					 </td>
				  </tr>
			   </table>
			</form>
		</body>
	</html>';
echo $searchForm;
echo $addArtistForm;
echo $addAlbumForm;

?>

