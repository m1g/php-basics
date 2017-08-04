<?php

$file = "example.txt"; // file that's created when this runs

if($handle = fopen($file, 'w')) {

  fwrite($handle, "I love Php");

  fclose($handle);

} else {
  echo "The files could not be written";
}

?>
