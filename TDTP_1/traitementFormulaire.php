<!DOCTYPE html>
<html>
<head>
	<title>Traitement</title>
</head>
<body>
	<?php 

 if ( isset($_GET['nom']) and isset($_GET['prenom'])
 and isset($_GET['civilite']) and preg_match("#^\w+$#", $_GET['nom'])
 and preg_match("#^\w+$#", $_GET['prenom'])
 and ($_GET['civilite'] =='h' || $_GET['civilite'] =='h')) {
 if($_GET['civilite']=='h')
 echo '<p>Hello Mr ';
 else
 echo '<p>Hello Mrs ';
 echo $_GET['prenom'] . ' ' . $_GET['nom'] . '!</p>';
 }
 else






	 ?>

</body>
</html>