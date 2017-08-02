<?php

  $connection = mysqli_connect('localhost', 'root', '', 'loginapp'); // connects to the database via the server, username, password, database name

  if(!$connection) {
    die("database connection failure");
  }

?>
