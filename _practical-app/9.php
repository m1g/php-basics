<?php include "functions.php" ?>
<?php include "includes/header.php" ?>



	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>


		</aside><!--SIDEBAR-->


			<article class="main-content col-xs-8">



	<?php


	//  Create a link saying Click Here, and set the link href to pass some parameters and use the GET super global to see it
	if(isset($_GET['$id'])) {
		echo $_GET['id'] . "<br>";
	}

	$id = 1223;
	// Step 2 - Set a cookie that expires in one week

	$name = "keepitclassy";
	$value = 2266;
	$expiration = time() + (60 * 60 * 24 * 7);

	setcookie($name, $value, $expiration);

	// Step 3 - Start a session and set it to value, any value you want.

	session_start();

	$_SESSION['text'] = "Some Text"

	?>

<a href="9.php?id=<?php echo $id; ?>">Click Here</a>
<br>

<?php

if(isset($_COOKIE["keepitclassy"])) {
		echo $_COOKIE["keepitclassy"] . "<br>";
}

if(isset($_SESSION['text'])) {
	echo $_SESSION['text'];
}

?>

</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>
