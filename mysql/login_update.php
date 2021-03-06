<?php include "db.php"; ?>
<?php include "functions.php"; ?>

<!--
CRUD - Acronym for maintaining database: Create, Read, Update, Delete
Connection and functions were removed and placed into it's own file - included above
-->
<?php updateTable(); ?>

<?php include "includes/header.php" ?>

  <div class="container">
    <div class="col-sm-6">
      <h1 class="text-center">Update</h1>
      <form action="login_update.php" method="post">
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
        <input class="btn btn-primary" type="submit" name="submit" value="UPDATE">
      </form>
    </div>
    
<?php include "includes/footer.php" ?>
