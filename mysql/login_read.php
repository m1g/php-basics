<?php

// CRUD - Acronym for maintaining database: Create, Read, Update, Delete

    $connection = mysqli_connect('localhost', 'root', '', 'loginapp'); // connects to the database via the server, username, password, database name

      if($connection) {
        echo "database is connected";
      } else {
        die("database connection failure");
      }

      $query = "SELECT * FROM users"; // selects everything from the users table in the loginapp database


      $result = mysqli_query($connection, $query);

      if(!$result) {
        die('Query FAILED' . mysqli_error()); // mysqli_error is a pre-built function that gives us the error
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

      <?php

      while($row = mysqli_fetch_assoc($result)) { // fetches the result to a variable $row. associative arrays allow us to read the values
        ?>
        <!-- ESCAPES the php code to print the results to the screen -->
        <pre>
          <?php
            print_r($row);
          ?>
        </pre>

        <!-- ENDS the escape -->
        <?php
      }

      ?>

    </div>

  </div>

</body>
</html>
