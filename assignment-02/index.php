<?php
	$index_title = "ITC240 Assignment 02";
?>
<!doctype html>
<html>
	<head>
		<title>
			<?php echo $index_title ?>
		</title>
	</head>
	<body>
	<center><h1>ITC240 - Assignment #2 - Mad Lib</h1></center>
	
	<?php
	$submitForm = $_SERVER["REQUEST_METHOD"];
	
	if ($submitForm == "POST") {//Form submit is true
		$noun = $_REQUEST["noun"];
		$adjective = $_REQUEST["adjective"];//'describing' word to qualify a noun
		$verb = $_REQUEST["verb"];
		$firstNumber = $_REQUEST["firstNumber"];
		$secondNumber = $_REQUEST["secondNumber"];

		// Programming comments presented in comments; I know:
		
		/* Trying some error checking.
		*  I liked the fact that you defined plagiarism as cut and copy code in 4/22 class.
		*  That was important as I use what I learned about a "sticky form" form from the PHP book I'm reading in the 
		*  commented error handling form below, not implemented.
		
		/* Even though a course in Logic isn't required I do now understand OR/AND in a logical implementation and I understand that
		*  after taking a course in Logic.
		
		
		if ($noun == null OR
			$adjective == null OR 
			$verb == null OR
			$firstNumber == null OR
			$secondNumber == null){ ?>

			<form method="post">
				<p>Provide a noun: <input name="noun" placeholder="Something" value=<?= $noun; ?>></p>
				<p>Provide an adjective: <input name="adjective" placeholder="Describe Something" value=<?= $adjective; >></p>
				<p>Provide a verb: <input name="verb" placeholder="Action word" value=<?= $verb; >></p>
				<p>Provide a number: <input name="firstNumber" placeholder="A number between 1-10" value=<?= $firstNumber; >></p>
				<p>Provide another number: <input name="secondNumber" placeholder="Another number between 1-10" value=<?= $secondNumber>></p>
				<button>Display Mad Lib</button>
			</form>
			
			<?php } else {
				//Show mad lib
			} ?>
		*/
		
		//echo "Peter is " . $age['Peter'] . " years old."; <- w3school indicated a dot is require and not "+" 4/21
		
		echo "Joe Momma took his " . $adjective . " " . $noun . " and went " . $verb . " with the " . $noun . ".  ";

		if ($firstNumber == 5){
			echo "Joe Momma did this " . $firstNumber . " times in a row.  ";
		} else if ($secondNumber > 5){
			echo "Joe Momma did this " . $secondNumber . " times repeatedly until he became tired.  ";
		} else {
			echo "Joe Momma did this " . $secondNumber . " times and thought he could have done it more.  ";
		}	
	
		echo "Silly J M.";

	} else { ?>
	
	<form method="post">
		<p>Provide a noun: <input name="noun" placeholder="Something"></p>
		<p>Provide an adjective: <input name="adjective" placeholder="Describe Something"></p>
		<p>Provide a verb: <input name="verb" placeholder="Action word"></p>
		<p>Provide a number: <input name="firstNumber" placeholder="A number between 1-10"></p>
		<p>Provide another number: <input name="secondNumber" placeholder="Another number between 1-10"></p>
		<button>Display Mad Lib</button>
	</form>
	
	<?php } ?>	
	</body>
</html>