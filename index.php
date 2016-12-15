<?php

function connect(){
	mysql_connect("localhost","ztest","password");
	mysql_select_db("ztest");
}

function pritect($string) {
	return mysql_real_escape_string( strip_tags(addslashes($string)) );
}

function output($string) {
	echo "<div id=\"output\">" . $string . "</div>";
}

echo "Testing 1,2,3";

?>