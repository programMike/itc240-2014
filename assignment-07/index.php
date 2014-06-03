<?php

/* Not modular, even scattered, I was more concerned with submitting something.
*
*  6/3/14 @ 5:50 am "Just realized, if the mysql table had a boolean check in status then that is how I might have handled the checking in an out of books.  My first thought was to remove the row from the table that just didn't seem right."
*
*  Use of forms to control flow, yet I think there could have been a more clever way to accomplish the tasks.
*/

	// Head vars:
	$thisTitle = 'ITC240 Assignment 07';
	$thisH1 = 'Eating @ the Library';

	include('../incHead/incHead.php');

	//Still in some testing mode with cookies:
	//setcookie('fred','something',time()+60*60,'/');
	
	if(isset($_POST['BGGray'])){
		setcookie(
			'changeBG',
			$_POST['BGGray'],
			time() + 60 * 60 * 24,
			'/',
			".no-ip.org"
		);
?>
	<body style="background-color:<?= $_POST['BGGray']; ?>;">
<?php		
	}// END IF post BGGray
	
	if(isset($_POST['BGYellow'])){
		setcookie(
			'changeBG', 
			$_POST['BGYellow'],
			time() + 60 * 60 * 24,
			'/',
			".no-ip.org"
		);

?>
	<body style="background-color:<?= $_POST['BGYellow'];?>;">
<?php
	}// END IF post BGYellow
	
	
	if(isset($_COOKIE['changeBG'])){
?>
	<body style="background-color:<?= $_COOKIE['changeBG'] ?>;">
<?php
	}// END IF set Cookie
?>

<form action="index.php" method="POST">
  Alter Background Color to:
  <button name="BGGray" type="submit" value="#888888">Background Grey</button>
  <button name="BGYellow" type="submit" value="#FFFFCC">Background Yellow</button>
</form>


<?php
include('../incPass/password.php');
$connTbl = new mysqli("localhost", "mwemig02", $Secret, "mwemig02");

// Default query 
$queryTBL = ('SELECT * FROM currentBooks');
	
	if(isset($_POST['sortTitle']) && $_POST['sortTitle'] == "ascending"){
		$queryTBL = ('SELECT * FROM currentBooks ORDER BY title ASC');
	}// END IF post ascending
	
	if(isset($_POST['sortTitle']) && $_POST['sortTitle'] == "descending"){
		$queryTBL = ('SELECT * FROM currentBooks ORDER BY title DESC');
	}// END IF post descending

$preRowData = $connTbl->prepare($queryTBL);
$preRowData->execute();
$rowData = $preRowData->get_result();
?>

<form action="index.php" method="POST">
	Sort title by:
	<select name="sortTitle">
		<option value="ascending">Ascending</option>
		<option value="descending">Descending</option>
	</select>
	<button type="submit">Sort</button>
</form>

<table border="1">
	<thead>
		<tr>
			<th>Title:
			<th>Author:
			<th>Cover:
			<th>Short Description:
	<tbody>
<?php
		foreach ($rowData as $rowAt) {
?>
		<tr>
			<!-- Secure output from table -->
			<td><?= htmlentities($rowAt["title"]) ?>
			<td><?= htmlentities($rowAt["author"]) ?>
			<td><img src="<?= htmlentities($rowAt["imgCoverPath"]) ?>">
			<td><?= htmlentities($rowAt["shortDescription"]) ?>

<?php
			}//END foreach
?>
</table>


<?php
	// Footer
	include('../incFooter/incFooter.php');
?>
