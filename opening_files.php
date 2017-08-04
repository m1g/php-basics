<?php

// grant apache read/write access to folder in order to do this

$file = "example.txt"; // file that's created when this runs
$handle = fopen($file, 'w'); // opens the file
fclose($handle); // closes the file

?>
