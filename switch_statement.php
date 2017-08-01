<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Switch Statment</title>
</head>
<body>

  <?php
    $number = 20;

    switch($number) { // tests a single parameter against multiple cases
      case 34:
      echo "is it 34";
      break; // breaks out if this is true

      case 37:
      echo "is it 37";
      break;

      case 35:
      echo "is it 35";
      break;

      case 24:
      echo "is it 24";
      break;

      default : // like the else statement, executes if nothing else is true
      echo "we could not find anything :(";
    }
  ?>

</body>
</html>
