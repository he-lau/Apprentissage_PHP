<?php
session_start();
setcookie('cookie', time()+100, null, null, false, true);
?>



<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php

//unset($_SESSION['nombre']);
//unset($_COOKIE['nombre']);

if (isset($_GET["nombre"])) {
  if (preg_match('#^-?\d*\.?\d*$#', $_GET['nombre'])) {
    //  echo "<p>" . $_GET['nombre'] . "</p>";

    }
    else {
        echo "n'est pas un nombre";
    }

}

if (! isset($_SESSION['nombre'])) {
  $_SESSION['nombre'] = 1;
}
else {
  $_SESSION['nombre'] *= $_GET['nombre'];
  $_COOKIE[''] = $_SESSION['nombre'] * $_GET['nombre'];
  echo "<p>" . $_COOKIE[''] . "</p>";
}



var_dump($_SESSION);
var_dump($_COOKIE);

?>
<form action = "nombre.php">

<p> nombre : <input name="nombre" type="text" />
<input type="submit" value="send" /></p>

</form>


  </body>
</html>
