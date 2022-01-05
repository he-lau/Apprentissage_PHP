<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


    <?php

      if ($_POST['mdp'] != "kangourou") {
        header("Location: formExercice8.php");
    }
    var_dump($_POST);
    ?>


<ul>
    <li><a href="page1.php">page1</a><br /></li>
    <li><a href="page2.php">page2</a><br /></li>
    <li><a href="page3.php">page3</a><br /></li>
</ul>


  </body>
</html>
