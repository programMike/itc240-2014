<?php
// Rework assignment 06 to use functions
include('fInc.php');

inc('head');
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

inc('footer');
?>