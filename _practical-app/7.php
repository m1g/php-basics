<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

<?php

$connection = mysqli_connect('localhost', 'root', '', 'practical_db');
if(!$connection) {
  die("Database connection interrupted" . mysqli_error($connection));
}

$query = "SELECT * FROM lists";
$result = mysqli_query($connection, $query);

if(!$result) {
  die("Query FAILED to return objects");
}


?>
	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>


		</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">


<?php
  while($list = mysqli_fetch_assoc($result)) {
      // print_r($list);

      echo $list['username'] . "<br>";
  }
?>

	<?php

// Step 1 - Create a database in PHPmyadmin - DONE

// Step 2 - Create a table like the one from the lecture - DONE

// Step 3 - Insert some Data - DONE

// Step 4 - Connect to Database and read data - DONE above


	?>





</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>
