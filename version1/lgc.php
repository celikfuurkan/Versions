<?php
	$searchTerm = $_GET['searchTerm'] ?? false;
	
	$filmJson= file_get_contents('film.Json');
	$books = json_decode($filmJson, true);
	
	foreach($film as $title => $film){
		if($title != $searchTerm){
			unset($film[$title]);
		}
	}
	
	$haveFilm = count($film) > 0;
>