<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Associative Arrays</title>
</head>
<body>

  <?php

  $number = array("juanita", "maria", "josé");
  // echo $number[1] . "<br>";
  print_r($number);

  echo "<br>";

  $names = ["first_name" => "Miguel", "last_name" => "Malcolm"];

  /*
    braces for shorthand, associative arrays have a key and value
    this provides a label for the value of the index in an array.
  */
  // print_r($names);

  echo $names["first_name"] . " " . $names["last_name"];

  ?>

</body>
</html>
