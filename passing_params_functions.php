<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Functions: Passing Paramaters</title>
</head>
<body>
  <!-- <?php

  function greeting($message) {
    echo $message;
  }

  greeting("Hello Maestro");

  ?> -->

  <?php

  function add_numbers($number1, $number2) {
    $sum = $number1 + $number2;
    echo $sum;
  }

  add_numbers(48, 48);

  ?>
</body>
</html>
