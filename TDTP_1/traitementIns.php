<!DOCTYPE html>
<html>
<head>
	<title>Traitement - Inscription</title>
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

$personnes[$_GET['nom'] . $_GET['prenom']] = ['Prénom' => $_GET['prenom'], 'Nom' => $_GET['nom'], 'Age' => $_GET['age'] , 'Ville' => $_GET['ville']];

var_dump($personnes);


/*
	PROBLEME :
		Ls valeurs ne reste pas dans le tableau (ajout non définitif)
	=> On peut .......
*/

	?>
</body>
</html>