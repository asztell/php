<!DOCTYPE html>
<html>
	<head><title>test4</title>
        <link rel="stylesheet" type="text/css" href="style.css">
	</head>
	
	<body>
<?php
	error_reporting(E_ALL & ~E_NOTICE);

	$bs = 'button_specs';
	$c = 'asztalos_arpad_attil_classes';
	$i = 'asztalos_arpad_attil_instructors';
	$s = 'submitted';
	$sr = 'search';
	$sn = 'section';
	$t4pa = 'test4.php?pageAction';	
	$tbid = 'text_box_ID';
	$tc = 'table_class';
	
	$search = <<<EOT
	<div class="form">
		<h1>Search Professor</h1>
<!--		<p>Enter the name of the artist you want to find.</p>-->
		<div>
		    <form action="$t4pa=" method="post">
		        <input type="hidden" name="$s" value="true">
		        <table class="$tc">
		            <tr>
		                <td>Section Number: </td>
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


	include('db2_connection_info.inc');

	$conn = mysqli_connect('localhost', $cs85Username, $cs85Password, 'classes');

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

	if ($pageAction == "") {

		$result = mysqli_query($conn, "
			DROP TABLE IF EXISTS $i;");
		if (!$result) {
		    array_push($output, mysqli_error($conn));
		} else {
		    array_push($output, "<div class='mysql_message'>table instructors dropped<br /></div>");
		}

		$result = mysqli_query($conn, "
			CREATE TABLE IF NOT EXISTS $i(
				instructor_id int(4) NOT NULL,
				name varchar(8) NOT NULL,
				phone int(4) NOT NULL,
				office varchar(5) NOT NULL,
				PRIMARY KEY (instructor_id)
			);
		");
		if (!$result) {
		    array_push($output, mysqli_error($conn));
		} else {
		    array_push($output, "<div class='mysql_message'>table instructors created<br /></div>");
		}

		$result = mysqli_query($conn, "
			DROP TABLE IF EXISTS $c;");
		if (!$result) {
		    array_push($output, mysqli_error($conn));
		} else {
		    array_push($output, "<div class='mysql_message'>table classes dropped<br /></div>");
		}

		$result = mysqli_query($conn, "
			CREATE TABLE IF NOT EXISTS $c(
				section int(4) NOT NULL,
				course_number varchar(4) NOT NULL,
				title varchar(19) NOT NULL,
				instructor_id int(4) NOT NULL,
				PRIMARY KEY (section)
			);
		");
//				,				FOREIGN KEY (instructor_id) REFERENCES $i(instructor_id)
		
		if (!$result) {
		    array_push($output, mysqli_error($conn));
		} else {
		    array_push($output, "<div class='mysql_message'>table classes created<br /></div>");
		}

		$result = mysqli_query($conn, "
			INSERT INTO $i
				(instructor_id, name, phone, office)
			VALUES 
				(1, 'Dehkhoda', 4629, 'B220E'),
				(2, 'Rogler', 8472, 'B220J'),
				(3, 'Geddes', 4628, 'B220T');
		");
		if (!$result) {
		    array_push($output, mysqli_error($conn));
		}

		$result = mysqli_query($conn, "
			INSERT INTO $c
				(section, course_number, title, instructor_id)
			VALUES
				(1441, 'CS80', 'Internet Programming', 3),
				(4118, 'CS55', 'Java Programming', 1),
				(4119, 'CS60', 'Database Concepts', 2),
				(4128, 'CS85', 'PHP Programming', 3);
		");
		if (!$result) {
		    array_push($output, mysqli_error($conn));
		}

	} else if ($pageAction == "" && $_POST["$s"]) {
			$filter2 = filter_input(INPUT_POST, "$sn");
			$result = mysqli_query($conn, "
				SELECT $c.course_number, $c.title, $i.name
				FROM $c, $i
				WHERE $c.instructor_id = $i.instructor_id
				AND $c.section = '$sn';

			");
			if (!$result) {
				array_push($output, mysqli_error($conn));
			} else {
				$pageAction = $sr;
				$display = display($result);
			}

	}

	//decide which form to show
	if ($pageAction == "") {
	 $formToDisplay = $search;
	} else if ($pageAction == $sr) {
	    $formToDisplay = $display;
	}

?>
			<div class="logo">
				<h1>TEST 4</h1>
			</div>
			<div class="container" id="form_container">
				<?php
					if ($_POST["$s"]) {
						if ($pageAction == $sr) {
							echo $display;
						}
					}
					$display = "";
					echo $formToDisplay;
				?>
			</div>
			<div class="server_output">
				<?php echo implode("<br>", $output);
					$output = "";
				?>
			</div>

	</body>
</html>	
