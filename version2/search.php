<?php
	session_start();
	#searchTerm= $_POST['searchTerm']??false;
	
	$filmJson = file_get_contents('film.json');
	$film = json_decode($filmJson, true);
?>


