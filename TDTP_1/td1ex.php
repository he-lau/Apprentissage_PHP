<!DOCTYPE html>
<html>
<head>
	<title>td1-php</title>
</head>
<body>

<?php 

// Exercice 1
/*
var_dump(1 + 2) ; echo '<br/>'; 
var_dump('1'+ '2'); echo '<br/>';
var_dump(1 . 2) ; echo '<br/>';
var_dump('1'. '2'); echo '<br/>';
var_dump("3 fruits" + '1 légume' . 'donnent'); echo '<br/>';
var_dump("3 fruits" . '1 légume' + 'donnent'); echo '<br/>';
var_dump(1/2 + true - "-2");echo '<br/>';

/*
int(3)
int(3)
string(2) "12"
string(2) "12"
string(8) "4donnent"
int(3)
float(3.5)
*/

$voitures = 3; $motos = 6;

//apostrophes
echo '<p>' . 'J\'ai ' . $voitures . ' voitures et ' . $motos . ' motos, ' . 'j\'ai donc ' . ($motos + $voitures) . ' véhicules.';
echo '<br />';

//guillemets
echo "<p>" . "J'ai $voitures voitures et $motos motos, j'ai donc " . ($motos + $voitures) . " véhicules.";

// Exercice 2

// Table de 7 sous forme d'une liste non ordonnée :
echo '<p>';

for ($i=1; $i <= 10; $i++) { 
	echo '<li>' . "7*$i = " . (7*$i) . '</li>';  
}
echo '</p>';

// Table de 7 sous forme de table :

echo '<p>' . '<table>';
echo "<tr>Table de 7</tr>";

for ($i=1; $i <= 10; $i++) { 
	echo '<tr>'. '<td>' . "7*$i " .'</td>';  
	echo '<td>' . (7*$i)  .'</td>' . '</tr>';  
}

echo  "</table>" . "</p>";

// Exercice 3









// Exercice 4

$tabE1 = [
 'Frédérique' => 12,
 'Silvia' => 3,
 'Julien' => 19,
 'Lionel' => 12,
 'Mario' => 12,
 'Andrea' => 9,
 'Gérard' => 3
];

echo "<ol>" . "<p>" ;
	foreach ($tabE1 as $key => $value) {
		echo "<li> ". $key .'</li>';
	}
echo "</ol>" . '</p>';

// Exercice 5

require('td1_ex5.php');


 ?>




</body>
</html>