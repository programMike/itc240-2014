<?php
/* Left the index page 
*  include function to insert data
*/

include('fInsert.php');

// use request directly from a guaranteed post submission,
// otherwise the program wouldn't have used the request
insertData($_REQUEST["preformAct"], $_REQUEST["burnCal"]);

header("Location: index.php");
?>