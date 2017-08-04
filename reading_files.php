<?php

$file = "example.txt"; // file that's created when this runs

if($handle = fopen($file, 'r')) {

  echo $content = fread($handle, 10); // each byte is one character
  // filesize($file) instead of bytes gives you entire file

  fclose($handle);

} else {
  echo "The files could not be written";
}

?>
