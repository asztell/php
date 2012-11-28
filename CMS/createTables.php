<?php
	error_reporting(0);
	include( 'db_connection_info.inc' );
	
	echo '
	<!Doctype html>
	<html>
		<head>
			<title>album</title>
			<style type="text/css">
				.logo h1
				{
					font-size: 3.25em;
					text-align: center;
				}
				body
				{
					font-size: 100%;
					background-color: #909090;
				}
				input
				{
					color: #700000;
					background-color: #999999;
				}
				.headerContainer
				{
					background-color: #707070;
					margin: 30px auto;
					text-align: center;
					width: 500px;
					border: 1px solid black;
				}
				.form
				{
					background-color: #707070;
					margin: 50px auto;
					text-align: center;
					width: 500px;
					border: 1px solid black;
				}
				#artistFormID
				{
					text-align: center;
					margin: 1px auto;
					width: 480px;
				}
				#albumFormID
				{
					text-align: center;
					margin: 1px auto;
					width: 440px;
				}
				#searchFormID
				{
					text-align: center;
					margin: 1px auto;
					width: 475px;
				}
				table
				{
					border: 0px;
				}
				.add_artist_button 
				{
					float: left;
					margin: 30px 35px;
				}
				.add_album_button
				{
					float: right;
					margin: 30px 35px;
				}
				.search_button 
				{
					float: center;
					margin: 30px 35px;
				}
				.mysql_message
				{
					text-align: center;
				}
			</style>
		</head>
		<body>
			<div class="logo">
				<h1>M U Z I C W O R L D</h1>
			</div>
			<div class="headerContainer">
				<div class="add_artist_button">
					<form action="createTables.php" method="post">
						<input type="submit" value="Add new artist" name="add_artist_button">
					</form>
				</div>
				<div class="add_album_button">
					<form action="createTables.php" method="post">
						<input type="submit" value="Add new album" name="add_album_button">
					</form>
				</div>
				<div class="search_button">
					<form action="createTables.php" method="post">
						<input type="submit" value="Search" name="search_button">
					</form>			
				</div>
			</div>
	';
	if ($_POST['add_artist_button']) {
		echo $addArtistForm;
	}
	if ($_POST['add_album_button']) {
		echo $addAlbumForm;
	}
	if ($_POST['search_button']) {
		echo $searchForm;
	}	
		
	$conn = mysqli_connect( 'localhost', $cs85Username, $cs85Password, 'albums' );

	$result = mysqli_query( $conn, '
	drop table if exists asztalos_arpad_attil_artist;
	');

	if ( !$result ) {
		echo mysqli_error( $conn );
	} else {
//		echo "<div class='mysql_message'>table artist dropped<br /></div>";
	}
	
	$result = mysqli_query( $conn, '
	drop table if exists asztalos_arpad_attil_album;
	');

	if ( !$result ) {
		echo mysqli_error( $conn );
	} else {
//		echo "<div class='mysql_message'>table album dropped<br /></div>";
	}

	$result = mysqli_query( $conn, '
	create table if not exists asztalos_arpad_attil_artist(
	firstName varchar( 15 ),
	lastName varchar( 15 ),
	style varchar( 25 ),
	artist_id int( 7 ),
	constraint pk_artist_id primary key (artist_id)
	);
	');

	if ( !$result ) {
		echo mysqli_error( $conn );
	} else {
//		echo "<div class='mysql_message'>table artist created<br /></div>";
	}

	$result = mysqli_query( $conn, '
	create table if not exists asztalos_arpad_attil_album( 
	album_id int( 7 ),
	album_title varchar( 30 ),
	realease_year int( 4 )
	);
	');

	if ( !$result ) {
		echo mysqli_error( $conn );
	} else {
//		echo "<div class='mysql_message'>table album created<br /></div>";
	}

$searchForm = '
			<div class="form">
			<h1>Search</h1>
				<p>Enter the title of the CD or name of the artist you want to find.</p>
				<div class="innerForm" id="searchFormID">
					<form action="createTables.php" method="POST">
					   <table id="">
						  <tr>
							 <td align="right">Title:</td>
							 <td><input type="text" name="title_or_name" maxlength="40" size="40"><br />
							 </td>
						  </tr>
						  <tr>
							 <td colspan="2">
								<p align="center"><input type="submit" value="Search" name="submit_album"></p>
							 </td>
						  </tr>
					   </table>
					</form>
				</div>
			</div>
		</body>
	</html>';
		
$addArtistForm = '
			<div class="form">
			<h1>New Artist</h1>
				<div class="innerForm" id="artistFormID">	
					<form action="createTable.php" method="POST">
					   <table>
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
								<p align="center"><input type="submit" value="Save" name="submit_artist"></p>
							 </td>
						  </tr>
					   </table>
					</form>
				</div>
			</div>
		</body>
	</html>';
	
$addAlbumForm = '
			<div class="form">
			<h1>New Album</h1>
				<div class="innerForm" id="albumFormID">
					<form action="createTable.php" method="POST">
					   <table>
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
								<p align="center"><input type="submit" value="Save" name="submit_search"></p>
							 </td>
						  </tr>
					   </table>
					</form>
				</div>
			</div>
		</body>
	</html>';
echo $addArtistForm;
echo $addAlbumForm;
echo $searchForm;
?>

