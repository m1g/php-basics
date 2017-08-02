<?php include "db.php"; ?>
<?php include "functions.php"; ?>

<!-- CRUD - Acronym for maintaining database: Create, Read, Update, Delete -->

<?php include "includes/header.php" ?>

  <div class="container">
    <div class="col-sm-6">
      <pre>
        <?php readRows(); ?>
      </pre>
    </div>
  </div>

<?php include "includes/footer.php" ?>
