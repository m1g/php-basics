<?php include "db.php"; ?>
<?php include "functions.php" ?>

<!-- CRUD - Acronym for maintaining database: Create, Read, Update, Delete -->
<?php createRows(); ?>
<?php include "includes/header.php" ?>

  <div class="container">
    <div class="col-sm-6">
      <h1 class="text-center">Create</h1>
      <form action="login_create.php" method="post">
        <div class="form-group">
          <label for="username">Username</label>
          <input class="form-control" type="text" name="username">
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input class="form-control" type="password" name="password">
        </div>
        <input class="btn btn-primary" type="submit" name="submit" value="CREATE">
      </form>
    </div>
<?php include "includes/footer.php" ?>
