<?php
  require_once("TODOList.php"); // avant session_start car on stocke un objet TODOList dans la session
  session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    if (! isset($_SESSION['TODOList'])) {
      if (isset($_COOKIE['to_dos'])) {

        $_SESSION['TODOList'] = new TODOList();
        $tab_todo_cookie = explode('///', $_COOKIE['to_dos']);

        foreach ($tab_todo_cookie as $key => $value) {
          $_SESSION['TODOList'] -> add_to_do($value);  
        }


      }
      else
        $_SESSION['TODOList'] = new TODOList();
    }

    if (isset($_GET['task'])) {
      $_SESSION['TODOList'] -> add_to_do($_GET['task']);
    }

    if (isset($_COOKIE['to_dos'])) {
      echo "Votre to do list sauver est la suivante:" . $_COOKIE['to_dos'];
    }
     ?>


     <form>
       <p> Tâche à ajouter : <input name="tache" type="text" />

         <input type="submit" /> </p>
       </p>
     </form>

     <?php
     if (isset($_GET['tache'])) {
       $_SESSION['TODOList'] -> add_to_do($_GET['tache']);
     }

     if (isset($_GET['rm'])) {
       $_SESSION['TODOList'] -> remove_to_do($_GET['rm']);
     }
     elseif (isset($_GET['save'])) {
      setcookie('to_dos',$_SESSION['TODOList'] -> get_representation(), time()+3600,null,null,false,true);
     }
     elseif(isset($_GET['session_off'])) {
      session_destroy();
     }


  
    echo $_SESSION['TODOList'] -> set_representation(0);
/*
    echo '<p>';
    var_dump($_SESSION); 
    echo '</p>';
    echo '<p>';
    var_dump($_GET);
    echo '</p>';
    var_dump($_COOKIE);
*/  
     ?>

     <p>
       <a href="td1.php?session_off">Fermer la session</a>
     </p>
    

  </body>
</html>
