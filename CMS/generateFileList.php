<?php
//var to reference current directory
$dir = opendir('.');
//read all files from current directory
while ($file=readdir($dir)) {
        //if directory, add trailing slash
        if (is_dir($file)) {
                $file = $file . '/';
        }
        echo '<a href="'.$file.'">'.$file."</a>";
        //added verbage for current and parent dirs
        if ($file == './') {
                        echo " Current Directory";
        }
        if ($file == '../') {
                        echo " Parent Directory";
        }
        echo "<br>\n";

}
?>