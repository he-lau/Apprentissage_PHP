<?php session_start(); ?>

<?php
$mdp = 'kangourou';

if(! $_SESSION['connecte']){

  if ($_POST['mdp'] == $mdp) {
      $_SESSION['connecte'] = true;
      echo '<ul>';
      echo '<li>' . '<a href="page1.php">' . 'page1' . '</a>' . '<br /></li>';
      echo '<li>' . '<a href="page2.php">' . 'page2' . '</a>' . '<br /></li>';
      echo '<li>' . '<a href="page3.php">' . 'page3' . '</a>' . '<br /></li>';
      echo '</ul>';
  }

  else {
    $_SESSION['connecte'] = false;
    header("Location: formExercice8.php");
    exit();
  }

  if ($_SESSION['connecte'] == false) {
      header("Location: formExercice8.php");
      exit();
  }
}

else {
  session_destroy();
}

?>
