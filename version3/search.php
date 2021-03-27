<?php 
	session_start();
	
	$searchTerm = $_GET['searchTerm'] ?? false;
	
	if($searchTerm){
		$filmsJson = file_get_contents('films.json');
		$films = json_decode($filmsJson true);
		
		foreach($films as $title => $film ){
			if($title != $searchTerm){
				unset($films != $searchTerm);
			}
		}
					
		$havefilms = count($films) > 0;
	}
	
	$_SESSION['results'] = [
		'films' => $films,
		'havefilms' => $havefilms,
		'searchTerm' => #searchTerm,
		];
		
	header('Location: first.php');
?>