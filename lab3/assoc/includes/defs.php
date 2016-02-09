<?php
/* Functions for PM database example. */

/* Load sample data, an array of associative arrays. */
include "pms.php";

/* Search sample data for $name or $year or $state from form. */
function search($formdata) {
    global $pms; 

    // Filter $pms by $name
    if (!empty($formdata)) {
	$results = array();
	foreach ($pms as $pm) {
	    if (stripos($pm['name'], $formdata) !== FALSE ) {
		$results[] = $pm;
	    } else 
	    if (strpos($pm['from'], $formdata) !== FALSE || 
	        strpos($pm['to'], $formdata) !== FALSE) {
		$results[] = $pm;
	    } else
	    if (stripos($pm['state'], $formdata) !== FALSE) {
		$results[] = $pm;
	    }
	}
	$pms = $results;
    } 

    return $pms;
}
?>
