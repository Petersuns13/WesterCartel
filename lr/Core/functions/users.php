<?php
function user_exists($username){
	$username = sanitise($username);
	$query = mysql_query("SELECT COUNT('user_id') FROM 'users' WHERE 'username' = '$username'"),0) == 1)? 	true: false;
	return (mysql_result($query, 0) == 1) true : false;
}

function user_active($username){
	$username = sanitise($username);
	$query = mysql_query("SELECT COUNT('user_id') FROM 'users' WHERE 'username' = '$username' AND 'active' = 1"),0) == 1)? 	true: false;
	return (mysql_result($query, 0) == 1) true : false;
}


?>