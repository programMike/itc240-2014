<h3>Activities to Date:</h3>

<?php

	include('../incPass/password.php');
	$connTbl = new mysqli("localhost", "mwemig02", $Secret, "mwemig02");

	$preRowData = $connTbl->prepare('SELECT * FROM logActCal');
	$preRowData->execute();
	$rowData = $preRowData->get_result();
?>
<table>
	<thead>
		<tr>
			<th>Activity:
			<th>Calories Burned:
			<th>Entry Date:
	<tbody>
<?php
		foreach ($rowData as $rowAt) {
?>
		<tr>
			<!-- Secure output from table -->
			<td><?= htmlentities($rowAt["act"]) ?>
			<td><?= htmlentities($rowAt["cal"]) ?>
			<td><?= htmlentities($rowAt["entryDate"]) ?>
<?php
		}//END foreach
?>
</table>

<?php
	$preSumCal = $connTbl->prepare('SELECT SUM(cal) AS sumCal FROM logActCal ORDER BY entryDate DESC ;');
	$preSumCal->execute();
	$sumCal = $preSumCal->get_result();
	$sumOfCal = $sumCal->fetch_array();
?>

</br>
<p>Neko, you have burned <?= $sumOfCal["sumCal"] ?> so far !!!</p>

<?php
	$preMaxCal = $connTbl->prepare('SELECT * FROM logActCal WHERE cal = (SELECT MAX(cal) FROM logActCal) LIMIT 1;');
	$preMaxCal->execute();
	$maxCal = $preMaxCal->get_result();
	$maxOfCal = $maxCal->fetch_array();
?>

<p>Neko, you have burned a maximum of <?= $maxOfCal["cal"] ?> calories when you where do this activity, <i>"<?= $maxOfCal["act"] ?>"</i> on <?= $maxOfCal["entryDate"] ?></p>