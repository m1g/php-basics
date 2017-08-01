<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Functions</title>
</head>
<body>

  <?php

  function init() {
    say_something();
    echo "<br>";
    calculate();
  }

  function calculate() {
    echo 796 + 875;
  }

  function say_something() {
    echo "Hello Maestro";
  }

  init();

  ?>

</body>
</html>
