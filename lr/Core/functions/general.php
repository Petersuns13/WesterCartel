<?php
function sanitise($data){
	return mysql_real_escape_string($data);
}

?>