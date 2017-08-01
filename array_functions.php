<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Array Functions</title>
</head>
<body>

<?php

$list = [343, 34, 323, 23, 54, 232, 453];
echo max($list); // finds the max value in an array
echo "<br>";

echo min($list); // finds the min value in an array
echo "<br>";

sort($list); // sorts from smallest value to largest
echo "<br>";

print_r($list); // prints all the values in an array
echo "<br>";


?>

<h4><a href="http://php.net/manual/en/ref.array.php">Php Array Docs</a></h4>

</body>
</html>
