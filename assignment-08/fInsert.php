<?php
/* Modular function file
*  function: insert data into the database
*  I'm guessing at some point commenting on the intent is good,
*  I have seen it done before
*/

include('../incPass/password.php');
$connTbl = new mysqli("localhost", "mwemig02", $Secret, "mwemig02");

// 1st function: to meet assignment requirement
function insertData($act, $cal){
	global $connTbl;
	$preFormData = $connTbl->prepare('INSERT INTO logActCal (act, cal, entryDate) VALUES (?, ?, NOW());');
	$preFormData->bind_param(
		"si",
		$act,
		$cal
	);
	$preFormData->execute();
}
?>