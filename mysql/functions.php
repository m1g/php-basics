<?php include "db.php"; // included for the db to reference the connection

// wrapping our code in functions

function showAllData() {
  global $connection; // needs to be set to global (through other files) since it's currently local to this function
  $query = "SELECT * FROM users"; // selects everything from the users table in the loginapp database
  $result = mysqli_query($connection, $query);

  if(!$result) {
    die('Query FAILED' . mysqli_error()); // mysqli_error is a pre-built function that gives us the error
  }

  while($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    echo "<option value=''>$id</option>";
  }
}


?>
