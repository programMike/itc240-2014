<?php
	$index_title = "ITC240 Assignment 01";
	//PHP functions to include source code from other files:
	include("head.inc");
	include("body.inc");
	include("footer.inc");

	/* I did find if you introduce a PHP var before the include that uses that var an error is introduced.
	 * To place the $index_title after an include which uses the var and error occurs and is
	 * displayed in the title of the page!!!  Since that is where I echoed the var.
	 * There is no magic wand to replace the procedural nature of programming.
	*/
?>