<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

//Exercice 3

    try {
      $bd =new PDO('pgsql:host=aquabdd;dbname=etudiants', '11801400', '060396039EB');
      $bd->query("SET NAMES 'utf8'");
      $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $e) {
      die('<p> La connexion a échoué. Erreur['.$e->getCode().'] : '. $e->getMessage().'</p>');

    }



      if (isset($_GET['id']) and preg_match('#^\d+$#', $_GET['id'])) {
        $requete = $bd->prepare('SELECT * FROM nobels where id=:id');
        $requete -> bindValue(':id',$_GET['id']);
        $requete -> execute();

        $tab = $requete->fetch(PDO::FETCH_ASSOC);
        echo "<ul>";
        echo "<li>" . $tab['name'] . ", " . $tab['category'] . "</li>";
        echo "</ul>";

      }
      else {
        echo "Aucun identifiant";
      }
    ?>
  </body>
</html>
