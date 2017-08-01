<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>

	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php

	// Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP

	$danny = "I love PHP";

	if($danny == "danny") {
		echo "danny is the guy";
	} elseif(10 > 13) {
		echo "the math checks out";
	} else {
		echo $danny . "<br>";
	}

	// Step 2: Make a forloop  that displays 10 numbers

	for($e = 0; $e < 10; $e++) {
		echo $e;
	}


	// Step 3 : Make a switch Statement that test againts one condition with 5 cases
	$danny = 16;

	switch($danny) {
		case 10:
		echo "<br> you've reached double digits!";
		break;

		case 13:
		echo "<br> you're a teenager!";
		break;

		case 21:
		echo "<br> you're old enough to drink!";
		break;

		case 16:
		echo "<br> you're old enough to drive! congrats";
		break;

		case 25:
		echo "<br> say bye to your parents insurance! buh-bye";
		break;

		default :
		echo "<br> you're not old enough mate";
	}

?>






</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>
