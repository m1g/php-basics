<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>


	</aside><!--SIDEBAR-->

<article class="main-content col-xs-8">


	<?php


	// Step 1: Use the Make a class called Dog
	class Dog {
		// Step 2: Set some properties for Dog, Example, eye colors, nose, or fur color
		var $eye_color = "blue";
		var $legs = 4;
		var $fur_color = "brown";

		// Step 3: Make a method named ShowAll that echos all the properties
		function showAll() {
			echo $this -> eye_color . "<br>";
			echo $this -> legs . "<br>";
			echo $this -> fur_color . "<br>";
		}

	}

	// Step 4: Instantiate the class / create object and call it pitbull
	$pitbull = new Dog();
	// Step 5: Call the metshod ShowAll
	$pitbull -> showAll();

	?>





</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>
