<?php
require 'logic.php'
?>

<html lang ='en'>
<head>
	<title>Version 3 </title>
	<meta charset='utf-8'>
</head>
<body>

<h1>film Search</h1>

<form method='GET' action='search.php'>
	<label>Search for a film: 
		<input type='text' name='search' value='Narnia'></input>
	</label>
	<input type='submit' value='Search'>
</form>


<?php if(isset($result)): ?>
<p>
you search for <strong><?=sanitize($result['searchTerm'])?></strong>
</p>
	<?php if($result['havefilms']):?>
	<h2>Result:</h2>
	
	<?php foreach($result['films'] as $title => $film) ?>
		<div class='film'>
			<?=$title;?>by<?=$film['author']?>
			<img src = '<?php echo $film['cover_url']; ?>'
		</div>
	<?php endforeach ?>
	<?php else : ?>
	<p> No results found </p>
	<?php endif ?>
<?php endif ?>

</body>
</html>