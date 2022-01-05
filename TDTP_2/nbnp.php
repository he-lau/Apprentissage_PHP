<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

//Exercice 1
/*
  - 2 clés primaires + 1 clé étrangère
  - 839 prix nobels (select max(id) from nobels;)
  -  Antoine Henri Becquerel, Marie Curie, née Sklodowska, Pierre Curie
      (select name from nobels where year= 1903 and category='physics';)
*/

//Exercice 2

    try {
      $bd =new PDO('pgsql:host=aquabdd;dbname=etudiants', '11801400', '060396039EB');
      $bd->query("SET NAMES 'utf8'");
      $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $e) {
      die('<p> La connexion a échoué. Erreur['.$e->getCode().'] : '. $e->getMessage().'</p>');

    }

      $requete = $bd->prepare('SELECT max(id) FROM nobels');
      $requete -> execute();
      $tab = $requete->fetch(PDO::FETCH_ASSOC);

      echo "nombre de prix nobels dans la bdd : " . $tab['max'];












    ?>
  </body>
</html>
