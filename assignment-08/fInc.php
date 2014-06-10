<?php
/* Modular function file
*  function: return include file
*/

// 2nd function w/arg & return
function inc($incThis){
	return include('../inc/' . $incThis . '.php');
}

?>