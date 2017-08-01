<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>For Each</title>
</head>
<body>

  <?php

  $numbers = [345, 345, 676, 789, 232];

  // foreach works with arrays. numbers is the array and it assigns a value to each number

  foreach($numbers as $number) {
    echo $number . "<br>";
  }

  ?>

</body>
</html>
