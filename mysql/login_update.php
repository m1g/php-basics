<?php include "db.php"; ?>
<?php include "functions.php"; ?>

<!--
CRUD - Acronym for maintaining database: Create, Read, Update, Delete
Connection and functions were removed and placed into it's own file - included above
-->

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
      <form action="login_create.php" method="post">
        <div class="form-group">
          <label for="username">Username</label>
          <input class="form-control" type="text" name="username">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input class="form-control" type="password" name="password">
        </div>
        <div class="form-group">
          <select name="id" id="">
            <!-- imported function -->
            <?php showAllData(); ?>
          </select>
        </div>
        <input class="btn btn-primary" type="submit" name="submit" value="SUBMIT">
      </form>
    </div>

  </div>

</body>
</html>
