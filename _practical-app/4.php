<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>


	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">


	<?php

// Step1: Define a function and make it return a calculation of 2 numbers
function addition() {
	echo 35 + 36 . "<br>";
}

echo addition();

// OR

function plus() {
	$number1 = 10;
	$number2 = 20;
	$sum = $number1 + $number2;
	return $sum . "<br>";
}

$theSum = plus();
echo $theSum;


// Step 2: Make a function that passes parameters and call it using parameter values

function addNumbers($num1, $num2) {
	return $num1 + $num2;
}

echo addNumbers(54,45);

?>



</article><!--MAIN CONTENT-->


<?php include "includes/footer.php" ?>
