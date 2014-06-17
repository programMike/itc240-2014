<!doctype html>
<title>#09 Speed-Screen Play</title>

<!-- Just working upon the assignment requirements to finish up this course as I
have a whole "new" direction in my studies now an in the upcoming future !!! -->

<pre>
	
	<!-- Ohh yeah, I'm going after the "old" teletype effect -->

	"Howard Payne: Pop quiz, hotshot."</br>
	"There's a bomb on a bus. Once the bus goes 50 miles an hour, the bomb is armed."</br>
	"If it drops below 50, it blows up. What do you do? What do you do?"</br>

<?php

	include("Bus.php");

	$objBus = new Bus();

	$objBus->setBusSpeed(20);

	// repetitive echo code, but I was just testing more so than anything else
	echo "	The bus is current at a speed of " . $objBus->getBusSpeed() . " mph. </br>";
	
	$objBus->setBusSpeed(55);
	
	echo "	The bus is current at a speed of " . $objBus->getBusSpeed() . " mph. </br>";
	
	$objBus->setBusSpeed(80);

	echo "	The bus is current at a speed of " . $objBus->getBusSpeed() . " mph. </br>";
	
	$objBus->setBusSpeed(30);
	
	// rewrite:
	$objBus->explodeBus = false;
	
	if($objBus->explodeBus == false){
		echo "	Everyone off the bus...";
	}
	
	$objBus->triggerExplosive();
	
?>

</pre>