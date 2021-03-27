<?php
require 'done-logic.php';
?>


<html lang='en'>
<head>
	<title>FILM SEARCH</title>
	<meta charset='utf-8'>
</head>
<body>
<h1>Version 2</h1>
	<p>
		You searched for <strong><?= sanitize($result($searchTerm)) ?></strong>
	</p>
	
	<?php if ($haveFilm) : ?>
	<h2>result :</h2>
	<?php foreach ($result['film'] as $title => $film): ?>
	
	<div class='film'>
		<?= $title; ?>by <?= $film['author'] ?>
		<img src='<?php echo$film['cover_url']; ?>' alt='Photo for <?= $title; ?>'>
	</div>
	
	<?php endforeach ?>
	<?php else : ?>
	<p>No result found</p>
	<?php endif ?>


	<p>
		<a href='fb.php'>$larr; search again</a>
	</p>

</body>
</html>