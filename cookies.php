<?php

$name = "personname";
$value = 100;
$expiration = time() + (60 * 60 * 24 * 7); // seconds * mins * hours * days for a week (multiply by # of weeks)

setcookie($name, $value, $expiration); // php pre-built function that takes 3 paramaters



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cookies</title>
</head>
<body>

<?php

  if(isset($_COOKIE["personname"])) { // Super global that gets the value of the cookie
    $someOne = $_COOKIE["personname"];
    echo $someOne;
  } else {
    $someOne = "";
  }

?>

</body>
</html>
