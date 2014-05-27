<?php

// Left the index page and required another connection to the table:
include('../incPass/password.php');
$connTbl = new mysqli("localhost", "mwemig02", $Secret, "mwemig02");

$preFormData = $connTbl->prepare('INSERT INTO logActCal (act, cal, entryDate) VALUES (?, ?, NOW());');
	$preFormData->bind_param(
					"si",
					$_REQUEST["preformAct"],
					$_REQUEST["burnCal"]
				);
$preFormData->execute();

header("Location: index.php");
?>