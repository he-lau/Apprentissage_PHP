<!DOCTYPE html>
<html>
<head>
	<title>Traitement - Code</title>
</head>
<body>
	<?php  

$personnes = [
  'mdupond' => ['Prénom' => 'Martin', 'Nom' => 'Dupond', 'Age' => 25, 'Ville' => 'Paris'       ],
  'jm'      => ['Prénom' => 'Jean'  , 'Nom' => 'Martin', 'Age' => 20, 'Ville' => 'Villetaneuse'],
  'toto'    => ['Prénom' => 'Tom'   , 'Nom' => 'Tonge' , 'Age' => 18, 'Ville' => 'Epinay'      ],
  'arn'     => ['Prénom' => 'Arnaud', 'Nom' => 'Dupond', 'Age' => 33, 'Ville' => 'Paris'       ],
  'email'   => ['Prénom' => 'Emilie', 'Nom' => 'Ailta' , 'Age' => 46, 'Ville' => 'Villetaneuse'],
  'dask'    => ['Prénom' => 'Damien', 'Nom' => 'Askier', 'Age' => 7 , 'Ville' => 'Villetaneuse']
];


$present = false;
foreach ($personnes as $key => $value) {
	
	if ($_GET['pseudo'] == $key) {
		$present = true;
		foreach ($value as $c=> $v) {
			echo "<p>" . $c . ": " . $v . "</p>";
		}
	}
}

if ($present == false) {
	echo "<p>" . "Désolé, votre pseudonyme n'apparaît pas dans la liste" . "</p>";
}









	?>
</body>
</html>