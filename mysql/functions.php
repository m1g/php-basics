<?php include "db.php"; // included for the db to reference the connection

// wrapping our code in functions

function createRows() {
  if(isset($_POST['submit'])) {
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($connection, $username); // privacy feature: prevents sql injections
    $password = mysqli_real_escape_string($connection, $password);

    // pass encrypt
    $hashFormat = "$2y$10$"; // hashes 10x
    $salt = "iusesomecrazystrings22";
    $hashF_and_salt = $hashFormat . $salt;

    $password = crypt($password, $hashF_and_salt);
    // end encrypt


    $query = "INSERT INTO users(username, password) "; // inserts into table in database
    $query .= "VALUES('$username', '$password')"; // concatenates the variable. uses quotes because it's strings

    $result = mysqli_query($connection, $query);

    if(!$result) {
      die('Query FAILED' . mysqli_error()); // mysqli_error is a pre-built function that gives us the error
    } else {
      echo "Record Created";
    }
  }
}

function readRows() {
  global $connection;
  $query = "SELECT * FROM users"; // selects everything from the users table in the loginapp database
  $result = mysqli_query($connection, $query);

  if(!$result) {
    die('Query FAILED' . mysqli_error()); // mysqli_error is a pre-built function that gives us the error
  }

  while($row = mysqli_fetch_assoc($result)) {
    print_r($row);
  }
}


function showAllData() {
  global $connection; // needs to be set to global (access other files) since it's currently local to this function
  $query = "SELECT * FROM users"; // selects everything from the users table in the loginapp database
  $result = mysqli_query($connection, $query);

  if(!$result) {
    die('Query FAILED' . mysqli_error()); // mysqli_error is a pre-built function that gives us the error
  }

  while($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    echo "<option value='$id'>$id</option>";
  }
}


function updateTable() {
  if(isset($_POST['submit'])) {
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "UPDATE users SET ";
    $query .= "username = '$username', "; // concatenated variable
    $query .= "password = '$password' ";
    $query .= "WHERE id = $id ";

      $result = mysqli_query($connection, $query);
      if(!$result) {
        die("query FAILED " . mysqli_error($connection));
      } else {
        echo "Record Updated";
      }
  }
}

function deleteRows() {
  if(isset($_POST['submit'])) {
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "DELETE FROM users ";
    $query .= "WHERE id = $id ";

      $result = mysqli_query($connection, $query);
      if(!$result) {
        die("query FAILED " . mysqli_error($connection));
      } else {
        echo "Record Deleted";
      }
  }
}


?>
