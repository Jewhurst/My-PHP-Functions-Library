<?php
/*
Get time of something and return it relative to how long ago
Example: 45m ago, 45s ago, 12h ago
Anything over 24 over hours just prints the date
*/
function getTime($t_time){
	$pt = time() - $t_time;
	if ($pt>=86400)
		$p = date("F j, Y",$t_time);
	elseif ($pt>=3600)
		$p = (floor($pt/3600))."h ago";
	elseif ($pt>=60)
		$p = (floor($pt/60))."m ago";
	else
		$p = $pt."s ago";
	return $p;
}

/*
Return date into format
Example: May 5, 2010
*/

function fix_the_date($d) {
		$newDate = new DateTime($d);
		return $newDate->format('F j, Y');
		
}

/*
Return date into smaller format
Example: May 5
*/

function fix_the_date_small($d) {
		$newDate = new DateTime($d);
		return $newDate->format('M j');
		
}

/*
Return time into smaller format
Example: 02:15 am/pm
*/

function fix_the_time($t) {
		$newTime = new DateTime($t);
		return $newTime->format('h:i a');
		
}

/*
Return time into smaller format
Example: 2:15am/pm
*/

function fix_the_time_small($t) {
		$newTime = new DateTime($t);
		return $newTime->format('g:ia');
		
}
?>