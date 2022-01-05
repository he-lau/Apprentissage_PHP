<?php require('begin.html'); ?>

<h1> List of the last 25 Nobel prizes </h1>
<?php

require "Model.php";
$model = Model::getModel();
$tab_last25 = $model-> get_last();

echo "<table>";
echo "<th>Name</th> <th>Category</th> <th>Year</th>";

foreach ($tab_last25 as $key => $value) {

  echo '<tr><td><a href="informations.php?id=' . $value['id'] . '">' . $value["name"] . '</a></td>';
  echo "<td>". $value['category'] . "</td>";
  echo "<td>". $value['year'] . "</td></tr>";
}
echo "</table>";



 ?>
<?php require('end.html'); ?>
