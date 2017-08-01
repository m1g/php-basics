<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>


		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">


	<?php


// Step1: Use a pre-built math function here and echo it
$num = 3.4;
echo round($num);
echo "<br>";

// OR

echo rand(1,1000);
echo "<br>";

// Step 2:  Use a pre-built string function here and echo it
$string = "Miguel";
echo strlen($string);
echo "<br>";

// Step 3:  Use a pre-built Array function here and echo it
$myArray = ["ronnie", "bobby", "ricky", "mike"];
sort($myArray);
print_r($myArray);

//OR


?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>
