<?php

print_r($_GET); // creates an associative array

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Super Globals: GET</title>
</head>
<body>
  <?php
    $id = 10;
    $button = "SUBMIT";
  ?>

  <a href="get.php?id=<?php echo $id; ?>"><?php echo $button; ?></a>

</body>
</html>
