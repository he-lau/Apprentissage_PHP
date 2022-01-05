
<!DOCTYPE html>
<html>
<head>
	<title><?php echo 'test' ?></title>
</head>
<body>

<?php 
$var = 12;

echo '<p>';

echo  "$var <br />";
echo '$var <br />';
echo $var . '<br />';

$exist = isset($var);
echo "$exist" . '<br>';
echo "isset($var)" . "\n";

//supprime la $var
unset($var);

$exist = isset($var);
echo '$var existe il encore ?' . "$exist" . '<br />';

$var2 = 'bilibili';

var_dump($var2);


echo "</p>";
?>


</body>
</html>
