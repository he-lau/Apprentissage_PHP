<?php require('begin.html'); ?>

<?php

require "Model.php";
$model = Model::getModel();


if (isset($_GET['id']) && preg_match('#^[0-9]+$#', $_GET['id'])) {
  $info_id = $model-> get_nobel_prize_informations($_GET['id']);
  echo "<h1> Informations sur le prix nobel de l'id:" . $_GET['id'] . "</h1>";
  //var_dump($info_id);

  foreach ($info_id as $key => $value) {
    echo $key . ' : ' .$value .'<br>';
  }

}
else {
  echo "Aucun prix nobel ayant cet identifiant dans la base de données";
}

 ?>













<?php require('end.html'); ?>
