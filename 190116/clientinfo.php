<?php
	$ip = $_SERVER["REMOTE_ADDR"];
	$browser = $_SERVER["HTTP_USER_AGENT"];
	$ref = $_SERVER["HTTP_REFERER"];
	
	if($ref == ""){
		"This page was accessed directly";
	}
	
	echo "Visitor IP:".$ip."<br>";
	echo "Visitor Browser:".$browser."<br>";
	echo "Vistor Referer:".$ref."<br>";
?>