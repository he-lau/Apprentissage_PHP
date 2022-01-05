<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

//Exercice 4
//4.1

class Model {
  private $bd;
  private $instance = null;

  public function __construct() {
    try {
      $this->bd = new PDO('pgsql:host=aquabdd;dbname=etudiants', '11801400', '060396039EB');
      $this->bd ->query("SET NAMES 'utf8'");
      $this->bd ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $e) {
      die('<p> La connexion a échoué. Erreur['.$e->getCode().'] : '. $e->getMessage().'</p>');
    }
  } //__construct()

  function get_last() {
      $requete = $this->bd->prepare('select * FROM nobels where id > (select max(id)-25 from nobels)');
      $requete -> execute();
      var_dump($requete -> fetchAll(PDO::FETCH_ASSOC));
      return $requete -> fetchAll(PDO::FETCH_ASSOC);
  }

function get_nb_nobel_prizes() {
  $requete = $this->bd->prepare('select max(id) from nobels');
  $requete -> execute();
  $max = $requete -> fetch(PDO::FETCH_ASSOC);
  var_dump($max);
  return $max['max'];


}




}// fin class Model



    ?>




<?php
  $m = new Model();
  $m -> get_last();
  $m -> get_nb_nobel_prizes();

?>

  </body>
</html>
