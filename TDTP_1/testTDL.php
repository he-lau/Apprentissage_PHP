<!DOCTYPE html>
<html>
<head>
	<title>Test TODOlist</title>
</head>
<body>
	<?php require('code.php'); ?>
	<?php 
	$test = new TODOlist();
	$test -> add_to_do('lever');
	$test -> add_to_do('metro');
	$test -> add_to_do('boulot');
	$test -> add_to_do('dodo');

	var_dump($test);
	echo $test -> get_html();
	echo "<br />";

	echo "On supprime une valeur de la liste: ";
	$test -> remove_to_do(3);
	echo $test -> get_html();

	echo "<br />";
	echo "test is_empty() :";
	$test -> add_to_do('');
	$test -> add_to_do('            ');
	echo $test -> get_html();

	 ?>
</body>
</html>