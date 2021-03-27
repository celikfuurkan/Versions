<?php
	session_start();
	
	if(!isset($_SESSION['result'])) {
		header('Location : foobooks.php')
	}
	
	$result = $_SESSION['result'] ?? null;
	
	session_unset();

?>