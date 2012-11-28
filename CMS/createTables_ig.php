<!DOCTYPE html>
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
    <!--/****************************************************************
        on the server:
        
        http://ciswebs.smc.edu/cs85/asztalos_arpad_attil/createTables_ig.php
        
        ****************************************************************/
    -->

<?php
	error_reporting(E_ALL);

    //Aux. variables which hold html for various forms

    $createTablesForm = <<<EOT
<form action="createTables_ig.php?pageAction=create_tables" method="post">
    <input type="hidden" name="submitted" value="true">
    <input type="submit" value="create db tables">
</form>
EOT;

    $searchForm = <<<EOT
<div class="form">
    <h1>Search</h1>
    <p>Enter the title of the CD or name of the artist you want to find.</p>
    <div class="innerForm" id="searchFormID">
        <form action="createTables_ig.php?pageAction=search" method="POST">
            <input type="hidden" name="submitted" value="true">
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
EOT;
		
    $addArtistForm = <<<EOT
<div class="form">
    <h1>New Artist</h1>
    <div class="innerForm" id="artistFormID">	
        <form action="createTables_ig.php?pageAction=add_artist" method="POST">
            <input type="hidden" name="submitted" value="true">
            <table>
                <tr>
                    <td align="right">Artist's first name:</td>
                    <td><input type="text" name="first_name" maxlength="30" size="30"><br />
                </tr>
                <tr>
                    <td align="right">Artist's last name:</td>
                    <td><input type="text" name="last_name" maxlength="30" size="30"><br />
                </td>
                </tr>
                <tr>
                    <td align="right">Style:</td>
                    <td><input type="text" name="style" maxlength="30" size="30"><br />
                </tr>
                <tr>
                    <td colspan="2">
                        <p align="center">
                            <input type="submit" value="Save" name="submit_artist">
                        </p>
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
    <div class="innerForm" id="albumFormID">
        <form action="createTables_ig.php?pageAction=add_album" method="POST">
            <input type="hidden" name="submitted" value="true">
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
EOT;
	include( 'db_connection_info.inc' );

	$conn = mysqli_connect( 'localhost', $cs85Username, $cs85Password, 'albums' );

    //page action
    $pageAction = $_GET['pageAction'];


    //figure out which form to display to the user based upon the page action
    $formToDisplay = "";

    $output = array(); //store output to display to the user later

    //decide which form to show
    if ($pageAction == "create_tables") {
        $formToDisplay = $createTablesForm;
    } else if ($pageAction == "add_artist") {
        $formToDisplay = $addArtistForm;
    } else if ($pageAction == "add_album") {
        $formToDisplay = $addAlbumForm;
    } else if ($pageAction == "search") {
        $formToDisplay = $searchForm;
    }
		

    //actual logic to process submitted forms

    if ($pageAction == "create_tables" && $_POST['submitted']) {
        array_push($output, "Processing creating tables");

        $result = mysqli_query( $conn, '
            DROP TABLE IF EXISTS asztalos_arpad_attil_artist;
        ');

        if ( !$result ) {
            array_push($output, mysqli_error( $conn ));
        } else {
            array_push($output, "<div class='mysql_message'>table artist dropped<br /></div>");
        }

        $result = mysqli_query( $conn, '
            DROP TABLE IF EXISTS asztalos_arpad_attil_album;
        ');

        if ( !$result ) {
            array_push($output, mysqli_error( $conn ));
        } else {
            array_push($output, "<div class='mysql_message'>table album dropped<br /></div>");
        }

        $result = mysqli_query( $conn, '
            CREATE TABLE asztalos_arpad_attil_artist(
                artist_id int( 7 ),
                firstName varchar( 15 ),
                lastName varchar( 15 ),
                style varchar( 25 ),
                CONSTRAINT pk_artist_id PRIMARY KEY (artist_id)
            );
        ');

        if ( !$result ) {
            array_push($output, mysqli_error( $conn ));
        } else {
            array_push($output, "<div class='mysql_message'>table artist created<br /></div>");
        }

        $result = mysqli_query( $conn, '
            CREATE TABLE asztalos_arpad_attil_album( 
                album_id int( 7 ),
                album_title varchar( 30 ),
                realease_year int( 4 ),
                CONSTRAINT pk_album_id PRIMARY KEY (album_id)
            );
        ');
        if ( !$result ) {
            array_push($output, mysqli_error( $conn ));
        } else {
            array_push($output, "<div class='mysql_message'>table album created<br /></div>");
        }

    } else if ($pageAction == "add_artist" && $_POST['submitted']) {
        array_push($output, "Processing adding an artist goes here");
    } else if ($pageAction == "add_album" && $_POST['submitted']) {
        array_push($output, "Processing adding an album goes here");
    } else if ($pageAction == "search" && $_POST['submitted']) {
        array_push($output, "Processing a search goes here");
    }

?>

        <div class="logo">
            <h1>M U Z I C W O R L D</h1>
        </div>
        <ul class="nav">
            <li><a href="createTables_ig.php?pageAction=create_tables">Create DB tables</a></li>
            <li><a href="createTables_ig.php?pageAction=add_artist">Add New Artist</a></li>
            <li><a href="createTables_ig.php?pageAction=add_album">Add New Album</a></li>
            <li><a href="createTables_ig.php?pageAction=search">Search</a></li>
        </ul>
        <div class="form-container">
            <?php echo $formToDisplay ?>
        </div>
        <div class="server-output">
            <?php echo implode("<br>", $output) ?>
        </div>
    </body>
</html>
