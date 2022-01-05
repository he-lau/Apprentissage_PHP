<!DOCTYPE html>
<html>
<head>
	<title>td1-ex5</title>
</head>
<body>
	<?php 
	$anneeScolaire = [
  "Rentrée" => [2,9,2019],
  "Vacances Toussaint" => [
  "début" => [19,10,2019],
  "fin" => [4,11,2019]
  ],
  "Vacances Noël" =>[
  "début" => [21,12,2019],
  "fin" => [6,1,2020]
  ],
  "Vacances d'hiver" =>[
  "début" => [8,2,2020],
   "fin" => [24,2,2020]
  ],
  "Vacances de printemps" =>[
  "début" => [4,4,2020],
 "fin" => [20,4,2020]
 ],
 "Fin des cours" => [4,7,2020]
 ];


echo '<p>';
foreach ($anneeScolaire as $key => $value) {
		echo '-  ' . $key . ': ' ;
		if (count($value) == 3) {
			echo implode('/', $value) . '<br />';
		}
		else {
			foreach ($anneeScolaire[$key] as $cle => $val) {

				if ($cle == 'début') {
					echo 'du ';
				}
				else {
					echo " au ";
				}		

				echo implode('/', $val) ;

			}
			echo '<br />';
		}
		
}
echo '</p>';












 	?>
</body>
</html>




