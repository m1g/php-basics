<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">

	<?php Navigation();?>


		</aside><!--SIDEBAR-->


		<article class="main-content col-xs-8">



		<?php

	 	// Step 1: Make 2 variables called number1 and number2 and set 1 to value 10 and the other 20:
		$number1 = 10;
		$number2 = 20;

		// Step 2: Add the two variables and display the sum with echo:
		echo $number1 + $number2;
		echo "<br>";

		//  Step3: Make 2 Arrays with the same values, one regular and the other associative

		$array1 = ["john", "joe", "bill", "bob"];
		$array2 = ["first_name" => "john", "second_name" => "joe", "third_name" => "bill", "fourth_name" => "bob"];

		echo $array2["first_name"] . "<br>";
		echo $array1[0];

		// Step4: Make a constant and set it to the value of PHP. and use an echo to print it out

		define("CONSTANT", "PHP");
		echo  "<br>" . CONSTANT;

		?>



		</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>
