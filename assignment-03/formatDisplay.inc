<!doctype html>

<html>

	<body>		
		<center><h1>Lowered Expectations<h1></center>

		<p>The meeting site for people not afraid to admit they couldn't do worse.</p>

		<p>There are <?= count($siteClients); ?> are current clients of our meeting site services</p>

		<a href="?displayClients=Female">Registered Clients that are women</a></br>

		<a href="?displayClients=Male">Registered Clients that are men</a></br>

	<?php

	foreach($siteClients as $listClients){

	/* This sort of works after the request has been made.
	*  Submitting the assignment as is for the submission.
	*  I'm afraid a fix would need more time and a review whole review of the program.
	*
	*  Although this wasn't my original idea for the assignment the
	*  fake social site will be useful for the MySQL portion.
	*/
	
	
	switch($_REQUEST['displayClients']){
		case 'allClients':
			include('displayAllClients.inc');
			break;

		case 'Female':
			if ($listClients['gender'] == 'Female'){
			include('displayFemaleClients.inc');
			}
			break;

		case 'Male':
			if ($listClients['gender'] == 'Male'){
			include('displayMaleClients.inc');
			}
			break;

		default:
			print "<p> Error - Warning - Warning </p>";
			break;
	}//end switch
	}//end foreach
		
			
			?>

		

	</body>



</html>