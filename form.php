<?php
// isset checks if a variable is set or not
if(isset($_POST['submit'])) { // a super global variable turns the info into an associative array

  $name = [
    "Edwin",
    "Miguel",
    "John",
    "Chevy",
    "Idris",
    "Issa"
  ];

  $minimum = 5;
  $maximum = 10;

  $username = $_POST['username'];
  $password = $_POST['password'];

  // echo "Hello " . $username;
  // echo " Your Password is " . $password;
  
  // Validations

  if(strlen($username) < $minimum) {
    echo "username must be at least 6 characters";
  }

  if(strlen($username) > $maximum) {
    echo "username cannot be longer than 10 characters";
  }

  if(!in_array($username, $name)) {
    echo "sorry, there's no user by that name";
  } else {
    echo "Welcome " . $username . "!";
  }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Forms</title>
</head>
<body>

<form action="form.php" method="post">
  <!-- Name attribute is required to send values to super globals -->
  <input type="text" placeholder="Enter Username" name="username">
  <input type="password" placeholder="Enter Password" name="password">
  <br>
  <input type="submit" name="submit">
  <!-- Submit sends all values in the form -->
</form>


</body>
</html>
