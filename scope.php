<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Scope</title>
</head>
<body>

<?php

$x = "outside"; // global

function convert() {
  global $x; // keyword global allows a global variable to be changed locally
  $x = "inside"; // local
}

echo $x;
echo "<br>";
convert();
echo $x;

?>

</body>
</html>
