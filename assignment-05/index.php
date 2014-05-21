<?php

$thisTitle = "ITC240 Assignment 05";
// Defined salesperson expenses:
$thisH1 = "Willy Loman Expenses";
include("head.inc");

?>

<form action="index.php" method="POST">
	
	<!--Restrict entry values for Month Day Year:-->
	<!--TO DO: Define possible entry dates based upon the month-->
	
	<select name="Month">
	<?php
		for ($i=1; $i<=12; $i++) {
			echo "<option value='$i'>$i</option>";
		}
	?>
	</select>

	<select name="Day">
	<?php
		for ($i=1; $i<=31; $i++) {
			echo "<option value='$i'>$i</option>";
		}
	?>
	</select>

	<select name="Year">
	<?php
		// 2050 should be a point where the salesperson should consider retirement
		// a "new" app should have come along by this point
		for ($i=2014; $i<=2050; $i++) {
			echo "<option value='$i'>$i</option>";
		}
	?>
	</select>
	
	<!--Restrict entry values to 100 as reflected in the table structure:-->
	<!--To DO: Apply an error indication if the input exceeds 100 text characters-->
	<input name="expenseItem" placeholder="Expense Item" size="100">
	<input name="expenseValue" placeholder="$: Expense Value">
	<input type="Submit" value="Submit Entry">
</form>

<?php

include("password.php");

//connect to database's table: connectTBL
$connectTBL = new mysqli("localhost", "mwemig02", $Secret, "mwemig02");


if ($_SERVER["REQUEST_METHOD"] == "POST") {

/*	THIS works and focusing on presenting 

	$insertQuery = 'INSERT INTO logExpense (Month, Day, Year, expenseItem, expenseValue) VALUES (?, ?, ?, ?, ?);';
  
	$scrubedQuery = $connectTBL->prepare($insertQuery);
	
	// Reflect the column values in the table:
	$scrubedQuery->bind_param("iiiss", $_REQUEST["Month"], $_REQUEST["Day"], $_REQUEST["Year"], $_REQUEST["expenseItem"], $_REQUEST["expenseValue"]);

	$scrubedQuery->execute();

	// This version is cleaned up from all the chaos of commenting out lines and lingering variables

*/

	$queryTBL = 'SELECT * FROM logExpense';
	
	$selectData = $connectTBL->prepare($queryTBL);	

	$selectData->execute();

	$returnedData = $selectData->get_result();

//Ahh, I'm in my other class and time is running low !!! I actually understand from your e-mailed explanation that an insert wouldn't have a "get_result()" return 
	
?>
<table>
<?php	
	foreach ($returnedData as $presentData) {
	//print_r($presentData["expenseItem"]);
	//Table, just started to code and test
?>
		<tr>
		<td><?= $presentData["expenseItem"] ?>
<?php
	}// END Foreach
?>
</table>
<?php	
} // END IF Posted	
?>

<?php
include("footer.inc");
?>