<?php

// CRUD - Acronym for maintaining database: Create, Read, Update, Delete

if(isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];


  $connection = mysqli_connect('localhost', 'root', '', 'loginapp'); // connects to the database via the server, username, password, database name

    if($connection) {
      echo "database is connected";
    } else {
      die("database connection failure");
    }

//   if($username && $password) {
//     echo $username;
//     echo $password;
//   } else {
//     echo "no username or password provided";
//   }
//
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

  <div class="container">
    <div class="col-sm-6">
      <form action="login.php" method="post">
        <div class="form-group">
          <label for="username">Username</label>
          <input class="form-control" type="text" name="username">
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input class="form-control" type="password" name="password">
        </div>
        <input class="btn btn-primary" type="submit" name="submit" value="SUBMIT">
      </form>
    </div>

  </div>

</body>
</html>
