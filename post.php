<?php

if(isset($_POST['name'])) {
  echo $_POST['name'];
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Super Globals: POST</title>
</head>
<body>
  <form action="post.php" method="post">
    <input type="text" name="name" placeholder="Enter your name">
    <input type="submit" name="submit" value="SUBMIT">
  </form>
</body>
</html>
