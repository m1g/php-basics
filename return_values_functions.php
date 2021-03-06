<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Functions: Returning Values</title>
</head>
<body>

  <?php
    function addNumbers($number1, $number2) {
      $sum = $number1 + $number2;

      return $sum; // return takes data from the function
    }

    $result = addNumbers(34, 42); // stores the returned value in a variable

    // echo $result;

    $result = addNumbers(100, $result);

    echo $result;

  ?>

</body>
</html>
