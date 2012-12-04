<!DOCTYPE html>
<html>
    <head>
        <title>album</title>
        <style type="text/css">

			a:active,
			a:focus,
			#button_specs input
			{
				outline: 0;
				outline-style: none;
				outline-width: 0;
			}

			body
			{
				font-size: 100%;
				color: #eeeeee;
				font-family: Times New Roman;
				background-color: #959595;
			}

			.form
			{
				background-color: #959595;
				margin: 0px auto;
				text-align: center;
				width: 500px;
				border: 0px solid #808080;
			}
			
			#form_container
			{
				text-align: center;
			}
			
			#form_container table
			{
				margin: 0px auto;
			}

			#header_container li
			{
				margin: 0px 41px;
			}

			#img
			{
				height: 260px;
				width: 470px;
				margin: 0px auto;
				border: 0px solid #FFFFFF;
			}

			#img img
			{
				height: 260px;
				width: 470px;
			}
			
			#img_div
			{
				height: 260px;
				width: 470px;			
				margin: 0px auto;
			}

			input
			{
				color: #700000;
				background-color: #999999;
			}

			.logo
			{
				border: 0px solid #FFFFFF;
				width: 500px;
				margin: -30px auto -10px;
			}

			.logo h1
			{
				font-size: 3.13em;
				text-align: center;
			}

			.nav
			{
				background-color: #959595;
				margin: 0px auto 0px;
				text-align: center;
				width: 500px;
				border: 0px solid #858585;
				height: 50px;
				list-style: none;                
			}

			.nav li
			{
				float: left;
				margin: 25px 25px 0px;
			}
			
			.nav li a,
			#button_specs input
			{
				font-family: Arial;
				color: #ffffff;
				font-size: 15px;
				padding: 1px;
				text-decoration: none;
				-webkit-border-radius: 5px;
				-moz-border-radius: 5px;
				border-radius: 5px;
				-webkit-box-shadow: 0px 1px 3px #959595;
				-moz-box-shadow: 0px 1px 3px #959595;
				box-shadow: 0px 1px 3px #959595;
				text-shadow: 1px 1px 3px #959595;
				border: solid #909f94 1px;
				background: -webkit-gradient(linear, 0 0, 0 100%, from(#909f94), to(#8c8584));
				background: -moz-linear-gradient(top, #909f94, #8c8584);
			}

			.nav li a:hover, 
			#button_specs input:hover
			{
				background: -webkit-gradient(linear, 0 0, 0 100%, from(#8c8584), to(#909f94));
				background: -moz-linear-gradient(top, #8c8584, #909f94);
			}

			.page
			{
/*				width: 502px;*/
			}

			.table_class
			{
				width: 90%;
				text-align: center;
				margin: 0px auto;
				border: 0px;
			}

			#text_box_ID
			{
				background-color: #FFFFFF;
				width: 300px;
			}

			.save
			{
				margin: 10px auto 0px;
			}

		</style>
	</head>
	<body>

<?php
	error_reporting(E_ALL);

	//Aux. variables which hold html for various forms
	$createTablesForm = <<<EOT
<form action="createTables_ig.php?pageAction=create_tables" method="post">
	<input type="hidden" name="submitted" value="true">
	<input type="submit" value="create db tables">
</form>
EOT;

	$PinkFloydForm = <<<EOT
<form>
	<div id="img">
		<div id="img_div">
			<form action="createTables_ig.php?pageAction=" method="post">
				<img src="pinkfloydgirls.jpg" alt="music is cool man...">
			</form>
		</div>
	</div>
</form>
EOT;

	$searchArtistForm = <<<EOT
<div class="form">
    <h1>Search Artist</h1>
    <p>Enter the name of the artist you want to find.</p>
    <div>
        <form action="createTables_ig.php?pageAction=search_artist" method="post">
            <input type="hidden" name="submitted" value="true">
            <table class="table_class">
                <tr>
                    <td>Artist First Name: </td>
                    <td><input id="text_box_ID" type="text" name="first_name" maxlength="40" size="40"><br />
                    </td>
                </tr>
                <tr>
                    <td>Artist Last Name: </td>
                    <td><input id="text_box_ID" type="text" name="last_name" maxlength="40" size="40"><br />
                    </td>
                </tr>                
                <tr>
                    <td colspan="2" id="button_specs">
                    <p align="center"><input type="submit" value="Search Artist"></p>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
EOT;

    $searchBandForm = <<<EOT
<div class="form">
    <h1>Search Band</h1>
    <p>Enter the name of the band or name of band member you want to find.</p>
    <div>
        <form action="createTables_ig.php?pageAction=search_band" method="post">
            <input type="hidden" name="submitted" value="true">
            <table class="table_class">
                <tr>
                    <td>Band Name: </td>
                    <td><input id="text_box_ID" type="text" name="band_name" maxlength="40" size="40"><br />
                    </td>
                </tr>
                <tr>
                    <td>One Band Member Full Name: </td>
                    <td><input id="text_box_ID" type="text" name="member_name" maxlength="40" size="40"><br />
                    </td>
                </tr>                
                <tr>
                    <td colspan="2" id="button_specs">
                    <p align="center"><input type="submit" value="Search Band"></p>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
EOT;

    $searchAlbumForm = <<<EOT
<div class="form">
    <h1>Search Album</h1>
    <p>Enter the title of the album you want to find.</p>
    <div>
        <form action="createTables_ig.php?pageAction=search_album" method="post">
            <input type="hidden" name="submitted" value="true">
            <table class="table_class">
                <tr>
                    <td>Album Title: </td>
                    <td><input id="text_box_ID" type="text" name="album_title" maxlength="40" size="40"><br />
                    </td>
                </tr>
                <tr>
                    <td>Release Year: </td>
                    <td><input id="text_box_ID" type="text" name="release_year" maxlength="40" size="40"><br />
                    </td>
                </tr>                
                <tr>
                    <td colspan="2" id="button_specs">
                    <p align="center"><input type="submit" value="Search Album"></p>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
EOT;
		
    $addArtistForm = <<<EOT
<div class="form">
    <h1>New Artist</h1>
    <div>	
        <form action="createTables_ig.php?pageAction=add_artist" method="post">
            <input type="hidden" name="submitted" value="true">
            <table class="table_class">
                <tr>
                    <td align="right">Artist's first name:</td>
                    <td><input id="text_box_ID" type="text" name="first_name" maxlength="30" size="30"><br />
                </tr>
                <tr>
                    <td align="right">Artist's last name:</td>
                    <td><input id="text_box_ID" type="text" name="last_name" maxlength="30" size="30"><br />
                </td>
                </tr>
                <tr>
                    <td align="right">Style:</td>
                    <td><input id="text_box_ID" type="text" name="style" maxlength="30" size="30"><br />
                </tr>
                <tr>
                    <td colspan="2" id="button_specs">
                        <p align="center" class="save">
                            <input type="submit" value="Save">
                        </p>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
EOT;

    $addBandForm = <<<EOT
<div class="form">
    <h1>New Band</h1>
    <div>
        <form action="createTables_ig.php?pageAction=add_band" method="post">
            <input type="hidden" name="submitted" value="true">
            <table class="table_class">
                <tr>
                    <td align="right">Name of band:</td>
                    <td><input id="text_box_ID" type="text" name="band_name" maxlength="30" size="30"><br /></td>
                </tr>
                <tr>
                    <td align="right">Style:</td>
                    <td><input id="text_box_ID" type="text" name="style" maxlength="30" size="30"><br /></td>
                </tr>
                <tr>
                    <td align="right">Member1:</td>
                    <td><input id="text_box_ID" type="text" name="member1" maxlength="30" size="30"><br /></td>
                </tr>
                <tr>
                    <td align="right">Member2:</td>
                    <td><input id="text_box_ID" type="text" name="member2" maxlength="30" size="30"><br /></td>
                </tr>
                <tr>
                    <td align="right">Member3:</td>
                    <td><input id="text_box_ID" type="text" name="member3" maxlength="30" size="30"><br /></td>
                </tr>
                <tr>
                    <td align="right">Member4:</td>
                    <td><input id="text_box_ID" type="text" name="member4" maxlength="30" size="30"><br /></td>
                </tr>
                <tr>
                    <td align="right">Member5:</td>
                    <td><input id="text_box_ID" type="text" name="member5" maxlength="30" size="30"><br /></td>
                </tr>
                <tr>
                    <td colspan="2" id="button_specs">
                        <p align="center" class="save"><input type="submit" value="Save"></p>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
EOT;

    $addAlbumForm = <<<EOT
<div class="form">
    <h1>New Album</h1>
    <div>
        <form action="createTables_ig.php?pageAction=add_album" method="post">
            <input type="hidden" name="submitted" value="true">
            <table class="table_class">
                <tr>
                    <td align="right">Album title:</td>
                    <td><input id="text_box_ID" type="text" name="album_title" maxlength="30" size="30"><br /></td>
                </tr>
                <tr>
                    <td align="right">Style:</td>
                    <td><input id="text_box_ID" type="text" name="style" maxlength="30" size="30"><br /></td>
                </tr>
                <tr>
                    <td align="right">Release Year:</td>
                    <td><input id="text_box_ID" type="text" name="release_year" maxlength="30" size="30"><br /></td>
                </tr>
                <tr>
                    <td colspan="2" id="button_specs">
                        <p align="center" class="save"><input type="submit" value="Save"></p>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
EOT;

	include('db_connection_info.inc');

	$conn = mysqli_connect('localhost', $cs85Username, $cs85Password, 'albums');

    //page action
    $pageAction = $_GET['pageAction'];

    //figure out which form to display to the user based upon the page action
    $formToDisplay = "";
//    $searchResultDisplayString = array();
//    $searchResultDisplayString = "o";
    $output = array(); //store output to display to the user later
	
	function display($result) {
//		var_dump($result);
		$output = "";
		$output .= "<h4>Search returned the following results: </h4>";
		$output .= "<table border='0'>";
		while($row = mysqli_fetch_assoc($result)) {
			foreach ($row as $name => $value) {
				$output .= <<<EOT
<tr>
	<td>$name</td>
	<td>: $value</td>
</tr>
EOT;
			}
		}
		$output .= "</table>";
		return $output;
	};

    //decide which form to show
    if ($pageAction == "") {
    	$formToDisplay = $PinkFloydForm;
    } else if ($pageAction == "add_artist") {
        $formToDisplay = $addArtistForm;
    } else if ($pageAction == "add_band") {
        $formToDisplay = $addBandForm;
    } else if ($pageAction == "add_album") {
        $formToDisplay = $addAlbumForm;
    } else if ($pageAction == "search_artist") {
        $formToDisplay = $searchArtistForm;
    } else if ($pageAction == "search_band") {
        $formToDisplay = $searchBandForm;
    } else if ($pageAction == "search_album") {
        $formToDisplay = $searchAlbumForm;
    }

    //actual logic to process submitted forms
    if ($pageAction == "create_tables"/* && $_POST['submitted']*/) {
        array_push($output, "Processing creating tables");

        $result = mysqli_query( $conn, '
            DROP TABLE IF EXISTS asztalos_arpad_attil_artist;
        ');
        if (!$result) {
            array_push($output, mysqli_error($conn));
        } else {
            array_push($output, "<div class='mysql_message'>table artist dropped<br /></div>");
        }

        $result = mysqli_query( $conn, '
            DROP TABLE IF EXISTS asztalos_arpad_attil_band;
        ');
        if (!$result) {
            array_push($output, mysqli_error($conn));
        } else {
            array_push($output, "<div class='mysql_message'>table band dropped<br /></div>");
        }

        $result = mysqli_query( $conn, '
            DROP TABLE IF EXISTS asztalos_arpad_attil_album;
        ');
        if (!$result) {
            array_push($output, mysqli_error($conn));
        } else {
            array_push($output, "<div class='mysql_message'>table album dropped<br /></div>");
        }

        $result = mysqli_query($conn, '
            CREATE TABLE asztalos_arpad_attil_artist (
                artist_id int(7) NOT NULL AUTO_INCREMENT,
                first_name varchar(15) NOT NULL,
                last_name varchar(15) NOT NULL,
                style varchar(25),
                CONSTRAINT pk_artist_id PRIMARY KEY (artist_id));
        ');
        if (!$result) {
            array_push($output, mysqli_error($conn));
        } else {
            array_push($output, "<div class='mysql_message'>table artist created<br /></div>");
        }

        $result = mysqli_query($conn, '
            CREATE TABLE asztalos_arpad_attil_band (
                band_id int(7) NOT NULL AUTO_INCREMENT,
                band_name varchar(35) NOT NULL,
                style varchar(25),
                member1 varchar(35),
                member2 varchar(35),                
                member3 varchar(35),
                member4 varchar(35),
                member5 varchar(35),
                CONSTRAINT pk_band_id PRIMARY KEY (band_id));
        ');
        if (!$result) {
            array_push($output, mysqli_error($conn));
        } else {
            array_push($output, "<div class='mysql_message'>table band created<br /></div>");
        }

        $result = mysqli_query($conn, '
            CREATE TABLE asztalos_arpad_attil_album ( 
                album_id int(7) NOT NULL AUTO_INCREMENT,
                album_title varchar(30) NOT NULL,
                style varchar(25),
                release_year int(4),
                CONSTRAINT pk_album_id PRIMARY KEY (album_id));
        ');
        if (!$result) {
            array_push($output, mysqli_error($conn));
        } else {
            array_push($output, "<div class='mysql_message'>table album created<br /></div>");
        }

    } else if ($pageAction == "add_artist" && $_POST['submitted']) {
//        array_push($output, "Processing adding an artist");
        $result = mysqli_query($conn, '
        	INSERT INTO asztalos_arpad_attil_artist(
        	first_name, last_name, style)
        	VALUES ("'.$_POST['first_name'].'", "'.$_POST['last_name'].'", "'.$_POST['style'].'"
        	);
        ');
        if (!$result) {
            array_push($output, mysqli_error($conn));
            array_push($output, "You must at least enter the first name of the artist");
        } else {
            array_push($output, "<div class='mysql_message'>artist ".$_POST['first_name']." ".$_POST['last_name']." has been added</div>");
        }

    } else if ($pageAction == "add_band" && $_POST['submitted']) {
//        array_push($output, "Processing adding a band");
        $result = mysqli_query($conn, '
        	INSERT INTO asztalos_arpad_attil_band(
        	band_name, style, member1, member2, member3, member4, member5)
        	VALUES ("'.$_POST['band_name'].'", "'.$_POST['style'].'", "'.$_POST['member1'].'", "'.$_POST['member2'].'", "'.$_POST['member3'].'", "'.$_POST['member4'].'", "'.$_POST['member5'].'"
        	);
        ');        
        if (!$result) {
            array_push($output, mysqli_error($conn));
            array_push($output, "You must at least enter the band's name");            
        } else {
            array_push($output, "<div class='mysql_message'>band ".$_POST['band_name']." has been added</div>");
        }

    } else if ($pageAction == "add_album" && $_POST['submitted']) {
//        array_push($output, "Processing adding an album");
        $result = mysqli_query($conn, '
        	INSERT INTO asztalos_arpad_attil_album(
        	album_title, style, release_year)
        	VALUES ("'.$_POST['album_title'].'", "'.$_POST['style'].'", "'.$_POST['release_year'].'"
        	);
        ');
        if (!$result) {
            array_push($output, mysqli_error($conn));
            array_push($output, "You must at least enter the name of the album");            
        } else {
            array_push($output, "<div class='mysql_message'>album ".$_POST['album_title']." has been added</div>");
        }

	} else if ($pageAction == "search_artist" && $_POST['submitted']) {
//		array_push($output, "Processing an artist search");
		$filter2 = filter_input(INPUT_POST, "first_name");
		$filter3 = filter_input(INPUT_POST, "last_name");
/*         * QUESTION: for brevity, you can do something like this (assign alias to table)
        SELECT
            a.artist_id AS 'Artist id',
            a.first_name AS 'First Name',
            ......
        http://dev.mysql.com/doc/refman/5.0/en/string-comparison-functions.html#operator_like
         */
		$result = mysqli_query($conn, "
				SELECT asztalos_arpad_attil_artist.artist_id AS 'Artist id',
					asztalos_arpad_attil_artist.first_name AS 'First Name',
					asztalos_arpad_attil_artist.last_name AS 'Last Name',
					asztalos_arpad_attil_artist.style AS 'Style'
				FROM asztalos_arpad_attil_artist
				WHERE first_name LIKE '$filter2'
					OR last_name LIKE '$filter3'
			;");
		if (!$result) {
			array_push($output, mysqli_error($conn));
		} else {
//			echo "inside else clause @ line 562";
			$searchResultDisplayString = "";
			$searchResultDisplayString = display($result);
			
//			echo "strlen(\$searchResultDisplayString) = ".strlen($searchResultDisplayString);
//			echo $searchResultDisplayString;
//			echo "bla";
		}
	
	} else if ($pageAction == "search_band" && $_POST['submitted']) {
		array_push($output, "Processing a band search");
		$filter4 = filter_input(INPUT_POST, "band_name");
		$filter5 = filter_input(INPUT_POST, "member_name");
		$result = mysqli_query($conn, "
				SELECT asztalos_arpad_attil_band.band_id AS 'Band ID',
					asztalos_arpad_attil_band.band_name AS 'Band Name',
					asztalos_arpad_attil_band.style AS 'Style',
					asztalos_arpad_attil_band.member1,
					asztalos_arpad_attil_band.member2,
					asztalos_arpad_attil_band.member3,
					asztalos_arpad_attil_band.member4,
					asztalos_arpad_attil_band.member5
				FROM asztalos_arpad_attil_band
				WHERE band_name LIKE '%$filter4%'
					OR member1 LIKE '%$filter5%'
					OR member2 LIKE '%$filter5%'
					OR member3 LIKE '%$filter5%'
					OR member4 LIKE '%$filter5%'
					OR member5 LIKE '%$filter5%'					
			;");
		if (!$result) {
            array_push($output, mysqli_error($conn));
        } else {
        	echo "inside else";
        	while($row == mysqli_fetch_assoc($result)) {
				foreach ($row as $name => $value) {
					$query_result = <<<EOT
<table border='0'>
	<tr>
		<td>$name</td>
		<td>:$value</td>
	</tr>
</table>
EOT;
					echo $query_result;
				}
			}
		}

    } else if ($pageAction == "search_album" && $_POST['submitted']) {
        array_push($output, "Processing an album search");
		$filter1 = filter_input(INPUT_POST, "album_title");
		$result = mysqli_query($conn, "
				SELECT asztalos_arpad_attil_album.album_title AS 'Album Title',
					asztalos_arpad_attil_album.release_year AS 'Release Year'
				FROM asztalos_arpad_attil_album
				WHERE asztalos_arpad_attil_album.album_title = '$filter1'
			;");
		if (!$result) {
            array_push($output, mysqli_error($conn));
        } else {
			echo "<table border='0'>";
        	while($row == mysqli_fetch_assoc($result)) {
				foreach ($row as $name => $value) {
					$query_result = <<<EOT
	<tr>
		<td>$name</td>
		<td>:$value</td>
	</tr>
EOT;
					echo $query_result;
				}
			}
			echo "</table>";			
		}
    }

?>
		<div class="page">
		    <div class="logo">
		        <h1>M U S I C W O R L D</h1>
		    </div>
		    <div class="container" id="header_container">
				<ul class="nav">
					<li class="button_specs"><a href="createTables_ig.php?pageAction=search_artist">SrchArtist</a></li>
					<li class="button_specs"><a href="createTables_ig.php?pageAction=search_band">SrchBand</a></li>
					<li class="button_specs"><a href="createTables_ig.php?pageAction=search_album">SrchAlbum</a></li>
				</ul>
		    </div>
		    <div class="container" id="form_container">
		        <?php
		        	echo $searchResultDisplayString;
		        	echo $formToDisplay;		        	
		        ?>
		    </div>
		    <div class="server_output">
		        <?php echo implode("<br>", $output) ?>
		    </div>
		    <div class="container" id="footer_container">
				<ul class="nav">
				    <li class="button_specs"><a href="createTables_ig.php?pageAction=add_artist">Add New Artist</a></li>
				    <li class="button_specs"><a href="createTables_ig.php?pageAction=add_band">Add New Band</a></li>		        
				    <li class="button_specs"><a href="createTables_ig.php?pageAction=add_album">Add New Album</a></li>
				</ul>
			</div>
<?php
		if ( $pageAction != "") {
			echo '
			<div>
				<ul class="nav">
					<li class="button_specs"><a href="createTables_ig.php?pageAction="> <- back to the naked ladies</a></li>
					<li class="button_specs"><a href="createTables_ig.php?pageAction=create_tables">DB tables</a></li>			    
				</ul>
			</div> ';
		}
?>
		</div>
    </body>
</html>
