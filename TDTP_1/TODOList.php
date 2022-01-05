<?php
// Exercice 6_OBJET


class TODOList {
  private $to_dos;

  function __construct() {
    $this -> to_dos = [];
  }

  function add_to_do($tache) {
    if (! empty(trim($tache))) {
      $this -> to_dos[] = $tache;
    }
  }

  function remove_to_do($indice) {
    unset($this -> to_dos[$indice]);
  }

  function is_empty() {
    if(count($this -> to_dos) == 0) {
      return true;
    }
    else
      return false;
  }

  function get_html() {
    $html = "";
    if ($this -> is_empty()) {
      $html .= "Aucune tâche à faire !";
    }
    else {
      $html .= "<ul>";
      foreach ($this -> to_dos as $key => $value) {

        $html .= '<li>' . "<a href='td1.php?rm=$key'>" . "$value" . '</a>'. '</li>';
     }
     $html .= "</ul>";
     $html .= "<p><a href='td1.php?save'>Sauver la to do list (cookie)</a></p>";

    }
    return $html;
  }

  function get_representation() {
    return implode("///",$this -> to_dos);
  }

  function set_representation($representation) {

    if ($representation === 0) {
      return $this -> get_html();
    }
    else {
      return $this -> get_representation();
    }
  }

}
?>
