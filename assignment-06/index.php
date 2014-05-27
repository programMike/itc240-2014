<?php

$thisTitle = "ITC240 Assignment 06";
$thisH1 = "Neko's - \"Pounds Away\"";

// Address appropriate Directory structure:
include('../incHead/head.inc');

// Get the connection to the table and keep the variable accessible to the "includes" since the include is just like a "insert code here"
include('../incPass/password.php');
$connTbl = new mysqli("localhost", "mwemig02", $Secret, "mwemig02");
?>

<form action="insertData.php" method="POST">
	<table>
		<thead>
			<tr>
				<th>Activity:
				<th>Calories Burned:
		<tbody>
			<tr>
				<td>
					<input name="preformAct" placeholder="Enter Activity Preformed" size="80">
				<td>
					<select name="burnCal">
<?php
					// Increment by 10 keeping the number as a number less than 200 - for a cat that is
					for ($i=0; $i<=20; $i++) {
					$ix10 = $i * 10;
					echo "<option value='$ix10'>$ix10</option>";
					}
?>
					</select>
	</table>
	<input type="Submit" value="Log Entry">
</form>
<?php
include('displayData.php');

// Address appropriate Directory structure:
include('../incFooter/footer.inc');
?>