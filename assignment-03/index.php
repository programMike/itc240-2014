<?php

	/* - Original idea was to work with a full deck of 52 cards
	*  - 4 sets of 13 cards wrapped in an $deckCards multidimensional array
	*  - "shuffle" the deck
	*  - Present the a hand of 5 cards from the deck of 52 cards
	*  - I became lost in how to do it and lost some time before abandoning the idea
	*  - tried some "social" stuff...
	*
	*  - Finding trouble with the first visit to the page
	*
	*  - Modular programming in PHP is something I never even thought of
	*    although in other programming languages it seems so natural
	*/

	include("siteClients.inc");// Data

	$displayClients = "allClients";

	if(isset($_REQUEST["displayClients"])) {

		$displayClients = $_REQUEST["displayClients"];
	}

	include("formatDisplay.inc");

?>