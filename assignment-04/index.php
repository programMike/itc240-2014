<?php
/*
	Assignment 04
	Tried the card idea found difficultly:
		- I need to assign a one card from the database extract without reparations
		- I sure hope you know what I'm doing, it was only a Sunday start while working full time
		- I think I need to put the $CardQuery into an object, will still keep trying 5/12 @ 9ish
		- Have been trying a lot of different code, really !

*/




// Use as headers for display:
$thisTitle = "ITC240 Assignment 04";
$thisH1 = "POKER";
$thisH6 = "I hardly even know her";

//Re-use, it not good directory structure, but I'm going with it
include("../assignment-01/head.inc");

//Originally outside public_html directory, but relied on ".gitignore" as suggested
include("password.php"); 


$conMySQL = new mysqli("localhost", "mwemig02", $Secret, "mwemig02");

//$CardQuery = $conMySQL->query("SELECT * FROM dbCards LIMIT 5;");


for ($i = 0; $i <= 5; $i++) {

	$randNumber = mt_rand(1,55);//The table holds references 55 cards

	$CardQuery = $conMySQL->query("SELECT * FROM dbCards WHERE id=$randNumber LIMIT 5;");

}



?>
<table>
<?php
foreach ($CardQuery as $Card) {
?>
<td><img src="<?= $Card["ImgPath"] ?>"></br><?= $Card["CardLabel"] ?>

<?php
}
?>
</table>

<?php
include("../assignment-01/footer.inc");
?>