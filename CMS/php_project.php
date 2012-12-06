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
			
			#form_container h4
			{
				text-align: center;
			}
			
			#display_output_form table
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
	error_reporting(0);

	$aal = 'add_album';
	$aar = 'add_artist';
	$ab = 'add_band';
	$al = 'asztalos_arpad_attil_album';
	$ar = 'asztalos_arpad_attil_artist';
	$at = 'album_title';	
	$b = 'asztalos_arpad_attil_band';
	$bn = 'band_name';
	$bs = 'button_specs';
	$ct = 'create_tables';	
	$ctpa = 'php_project.php?pageAction';
	$fn = 'first_name';
	$ln = 'last_name';
	$m = 'member';
	$ry = 'release_year';
	$sal = 'search_album';
	$sar = 'search_artist';
	$sb = 'search_band';
	$st = 'style';
	$s = 'submitted';
	$tbid = 'text_box_ID';
	$tc = 'table_class';


//Aux. variables which hold html for various forms
	$createTablesForm = <<<EOT
	<form action="$ctpa=$ct" method="post">
		<input type="hidden" name="$s" value="true">
		<input type="submit" value="create db tables">
	</form>
EOT;

	$PinkFloydForm = <<<EOT
	<form>
		<div id="img">
			<div id="img_div">
				<form action="$ctpa=" method="post">
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
		    <form action="$ctpa=$sar" method="post">
		        <input type="hidden" name="$s" value="true">
		        <table class="$tc">
		            <tr>
		                <td>Artist First Name: </td>
		                <td><input id="$tbid" type="text" name="$fn" maxlength="40" size="40"><br />
		                </td>
		            </tr>
		            <tr>
		                <td>Artist Last Name: </td>
		                <td><input id="$tbid" type="text" name="$ln" maxlength="40" size="40"><br />
		                </td>
		            </tr>                
		            <tr>
		                <td>Band Name He Plays In: </td>
		                <td><input id="$tbid" type="text" name="$bn" maxlength="40" size="40"><br />
		                </td>
		            </tr>
		            <tr>
		                <td>One Other Band Member Full Name: </td>
		                <td><input id="$tbid" type="text" name="$bmn" maxlength="40" size="40"><br />
		                </td>
		            </tr>                
		            <tr>
		                <td>Song Name: </td>
		                <td><input id="$tbid" type="text" name="$sn" maxlength="40" size="40"><br />
		                </td>
		            </tr>                

		            <tr>
		                <td colspan="2" id="$bs">
		                <p align="center"><input type="submit" value="Search Artist"></p>
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
		    <form action="$ctpa=$aar" method="post">
		        <input type="hidden" name="$s" value="true">
		        <table class="$tc">
		            <tr>
		                <td align="right">Artist's first name:</td>
		                <td><input id="$tbid" type="text" name="$fn" maxlength="30" size="30"><br />
		            </tr>
		            <tr>
		                <td align="right">Artist's last name:</td>
		                <td><input id="$tbid" type="text" name="$ln" maxlength="30" size="30"><br />
		            </td>
		            </tr>
		            <tr>
		                <td align="right">Style:</td>
		                <td><input id="$tbid" type="text" name="$st" maxlength="30" size="30"><br />
		            </tr>
		            <tr>
		                <td align="right">Name of band:</td>
		                <td><input id="$tbid" type="text" name="$bn" maxlength="30" size="30"><br /></td>
		            </tr>
		            <tr>
		                <td align="right">Member1:</td>
		                <td><input id="$tbid" type="text" name="member1" maxlength="30" size="30"><br /></td>
		            </tr>
		            <tr>
		                <td align="right">Member2:</td>
		                <td><input id="$tbid" type="text" name="member2" maxlength="30" size="30"><br /></td>
		            </tr>
		            <tr>
		                <td align="right">Member3:</td>
		                <td><input id="$tbid" type="text" name="member3" maxlength="30" size="30"><br /></td>
		            </tr>
		            <tr>
		                <td align="right">Member4:</td>
		                <td><input id="$tbid" type="text" name="member4" maxlength="30" size="30"><br /></td>
		            </tr>
		            <tr>
		                <td align="right">Album title:</td>
		                <td><input id="$tbid" type="text" name="$at" maxlength="30" size="30"><br /></td>
		            </tr>
		            <tr>
		                <td align="right">Release Year:</td>
		                <td><input id="$tbid" type="text" name="$ry" maxlength="30" size="30"><br /></td>
		            </tr>
		            <tr>
		                <td colspan="2" id="$bs">
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
	
	include('db_connection_info.inc');

	$conn = mysqli_connect('localhost', $cs85Username, $cs85Password, 'albums');

	//page action
	$pageAction = $_GET['pageAction'];

	//figure out which form to display to the user based upon the page action
	$formToDisplay = "";
//	$searchResultDisplayString = "";
	$output = array(); //store output to display to the user later

	function display($result) {
		// var_dump($result);
		$output = "";
		$output .= "<h4>Search returned the following results: </h4>";
		$output .= "<div id='display_output_form'>";
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
		$output .= "</div>";
		return $output;
	};

	//decide which form to show
	if ($pageAction == "") {
	 $formToDisplay = $PinkFloydForm;
	} else if ($pageAction == $aar) {
	    $formToDisplay = $addArtistForm;
	} else if ($pageAction == $sar) {
	    $formToDisplay = $searchArtistForm;
	}

	//actual logic to process submitted forms
	if ($pageAction == $ct) {
//	    array_push($output, "Processing creating tables");

	    $result = mysqli_query( $conn, "
			DROP TABLE IF EXISTS $ar;
		");
	    if (!$result) {
	        array_push($output, mysqli_error($conn));
	    } else {
	        array_push($output, "<div class='mysql_message'>table artist dropped<br /></div>");
	    }

	    $result = mysqli_query( $conn, "
			DROP TABLE IF EXISTS $b;
		");
	    if (!$result) {
	        array_push($output, mysqli_error($conn));
	    } else {
	        array_push($output, "<div class='mysql_message'>table band dropped<br /></div>");
	    }

	    $result = mysqli_query( $conn, "
			DROP TABLE IF EXISTS $al;
		");
	    if (!$result) {
	        array_push($output, mysqli_error($conn));
	    } else {
	        array_push($output, "<div class='mysql_message'>table album dropped<br /></div>");
	    }

	    $result = mysqli_query($conn, "
			CREATE TABLE $ar (
				artist_id int(7) NOT NULL AUTO_INCREMENT,
				$fn varchar(15) NOT NULL,
				$ln varchar(15) NOT NULL,
				$st varchar(25),
				CONSTRAINT pk_artist_id PRIMARY KEY (artist_id));
		");
	    if (!$result) {
	        array_push($output, mysqli_error($conn));
	    } else {
	        array_push($output, "<div class='mysql_message'>table artist created<br /></div>");
	    }

	    $result = mysqli_query($conn, "
			CREATE TABLE $b (
				artist_id int(7) NOT NULL,
				band_id int(7) NOT NULL AUTO_INCREMENT,
				$bn varchar(35) NOT NULL,
				$st varchar(25),
				member1 varchar(35),
				member2 varchar(35),
				member3 varchar(35),
				member4 varchar(35),
				member5 varchar(35),
				CONSTRAINT pk_band_id PRIMARY KEY (band_id));
		");
	    if (!$result) {
	        array_push($output, mysqli_error($conn));
	    } else {
	        array_push($output, "<div class='mysql_message'>table band created<br /></div>");
	    }

	    $result = mysqli_query($conn, "
			CREATE TABLE $al (
				artist_id int(7) NOT NULL,			
				album_id int(7) NOT NULL AUTO_INCREMENT,
				$at varchar(30) NOT NULL,
				$st varchar(25),
				$ry int(4),
				CONSTRAINT pk_album_id PRIMARY KEY (album_id),
				CONSTRAINT fk_artist_id FOREIGN KEY (artist_id)
				REFERENCES $ar(artist_id));
		");
	    if (!$result) {
	        array_push($output, mysqli_error($conn));
	    } else {
	        array_push($output, "<div class='mysql_message'>table album created<br /></div>");
	    }

	    $result = mysqli_query($conn, "
			CREATE TABLE $al (
				artist_id int(7) NOT NULL,			
				album_id int(7) NOT NULL AUTO_INCREMENT,
				CONSTRAINT pk_album_id PRIMARY KEY (album_id),
				CONSTRAINT fk_artist_id FOREIGN KEY (artist_id)
				REFERENCES $ar(artist_id));
		");
	    if (!$result) {
	        array_push($output, mysqli_error($conn));
	    } else {
	        array_push($output, "<div class='mysql_message'>table album created<br /></div>");
	    }

	
	} else if ($pageAction == $aar && $_POST["$s"]) {
	// array_push($output, "Processing adding an artist");

	    $result = mysqli_query($conn, "
			INSERT INTO $ar(
			$fn, $ln, $st)
			VALUES ('".$_POST['first_name']."', '".$_POST['last_name']."', '".$_POST['style']."'
			);
		");
	    if (!$result) {
	        array_push($output, mysqli_error($conn));
	        array_push($output, "You must at least enter the first name of the artist");
	    } else {
	        array_push($output, "<div class='mysql_message'>artist ".$_POST["$fn"]." ".$_POST["$ln"]." has been added</div>");
	    }

	    $result = mysqli_query($conn, "
			INSERT INTO $b(
			$bn, $st, member1, member2, member3, member4, member5)
			VALUES ('".$_POST['band_name']."', '".$_POST['style']."', '".$_POST['member1']."', '".$_POST['member2']."', '".$_POST['member3']."', '".$_POST['member4']."', '".$_POST['member5']."'
			);
		");
	    if (!$result) {
	        array_push($output, mysqli_error($conn));
	        array_push($output, "You must at least enter the band's name");
	    } else {
	        array_push($output, "<div class='mysql_message'>band ".$_POST['band_name']." has been added</div>");
	    }

	    $result = mysqli_query($conn, "
			INSERT INTO $al(
			$at, $st, $ry)
			VALUES ('".$_POST['album_title']."', '".$_POST['style']."', '".$_POST['release_year']."'
			);
		");
	    if (!$result) {
	        array_push($output, mysqli_error($conn));
	        array_push($output, "You must at least enter the name of the album");
	    } else {
	        array_push($output, "<div class='mysql_message'>album ".$_POST['album_title']." has been added</div>");
	    }

	} else if ($pageAction == $sar && $_POST["$s"]) {

		$filter2 = filter_input(INPUT_POST, "$fn");
		$filter3 = filter_input(INPUT_POST, "$ln");
		$result = mysqli_query($conn, "
			SELECT $ar.artist_id AS 'Artist id',
			$ar.$fn AS 'First Name',
			$ar.$ln AS 'Last Name',
			$ar.$st AS 'Style'
			FROM $ar
			WHERE $fn LIKE '$filter2'
			OR $ln LIKE '$filter3'
		;");
		if (!$result) {
			array_push($output, mysqli_error($conn));
		} else {
			$searchResultDisplayString = display($result);
		}

		$filter4 = filter_input(INPUT_POST, "$bn");
		$filter5 = filter_input(INPUT_POST, "$mn");
		if (strlen($filter5) <= 0) {
			$query = "
				SELECT $b.band_id AS 'Band ID',
					$b.$bn AS 'Band Name',
					$b.$st AS 'Style',
					$b.member1,
					$b.member2,
					$b.member3,
					$b.member4,
					$b.member5
				FROM $b
				WHERE $bn LIKE '$filter4'
			;";
		} else {
			$query = "
				SELECT $b.band_id AS 'Band ID',
					$b.$bn AS 'Band Name',
					$b.$st AS 'Style',
					$b.member1,
					$b.member2,
					$b.member3,
					$b.member4,
					$b.member5
				FROM $b
				WHERE $bn LIKE '$filter4'
					OR member1 LIKE '$filter5'
					OR member2 LIKE '$filter5'
					OR member3 LIKE '$filter5'
					OR member4 LIKE '$filter5'
					OR member5 LIKE '$filter5'
			;";
		}
		$result = mysqli_query($conn, $query);
		if (!$result) {
	        array_push($output, mysqli_error($conn));
	    } else {
			$searchResultDisplayString = display($result);
		}

		$filter1 = filter_input(INPUT_POST, "$at");
		$filter6 = filter_input(INPUT_POST, "$ry");	
		$result = mysqli_query($conn, "
			SELECT $al.$at AS 'Album Title',
			$al.$st AS 'Style',
			$al.$ry AS 'Release Year'
			FROM $al
			WHERE $al.$at LIKE '$filter1'
			OR $al.$ry LIKE '$filter6'
		;");
		if (!$result) {
	        array_push($output, mysqli_error($conn));
	    } else {
			$searchResultDisplayString = display($result);
		}
	}
?>
			<div class="page">
				<div class="logo">
					<h1>M U S I C W O R L D</h1>
				</div>
			<div class="container" id="header_container">
				<ul class="nav">
					<li class="button_specs"><a href="php_project.php?pageAction=search_artist">SrchArtist</a></li>
				</ul>
			</div>
			<div class="container" id="form_container">
				<?php
					if ($_POST["$s"]) {
						if ($pageAction == $sar) {
							if (mysqli_num_rows($result) == 0) {
								echo "<h4>wrong artist name</h4>";
								echo "<h4>try again</h4>";
							} else {
								echo $searchResultDisplayString;
							}
						}
					}
					$searchResultDisplayString = "";
					echo $formToDisplay;
				?>
			</div>
			<div class="server_output">
				<?php echo implode("<br>", $output) ?>
			</div>
			<div class="container" id="footer_container">
				<ul class="nav">
					<li class="button_specs"><a href="php_project.php?pageAction=add_artist">Add New Artist</a></li>
				</ul>
			</div>
		<?php
			if ( $pageAction != "") {
				echo '
				<div>
				<ul class="nav">
				<li class="button_specs"><a href="php_project.php?pageAction="> <- back to the naked ladies</a></li>
				<li class="button_specs"><a href="php_project.php?pageAction=create_tables">DB tables</a></li>
				</ul>
				</div> ';
			}
		?>
		</div>
	</body>
</html>
