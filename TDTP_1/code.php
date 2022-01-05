<?php $title='titré'; ?>
<?php require('debut_code_html.php'); ?>

<h1>Titre</h1>
<p>Haec subinde Constantius audiens et quaedam referente Thalassio doctus, quem eum odisse iam conpererat lege communi, scribens ad Caesarem blandius adiumenta paulatim illi subtraxit, sollicitari se simulans ne, uti est militare otium fere tumultuosum, in eius perniciem conspiraret, solisque scholis iussit esse contentum palatinis et protectorum cum Scutariis et Gentilibus, et mandabat Domitiano, ex comite largitionum, praefecto ut cum in Syriam venerit, Gallum, quem crebro acciverat, ad Italiam properare blande hortaretur et verecunde.</p>





<?php

$mois = [
    "janvier",
    "février",
    "mars",
    "avril",
    "mai",
    "juin",
    "juillet",
    "août",
    "septembre",
    "octobre",
    "novembre",
    "décembre"
];

//3.1
echo '<ol>';
foreach ($mois as $key => $value) {
  echo "<li> $value";
}
echo '</ol>';

//3.2

$mois = [
   "janvier"   => 31,
   "février"   => 28,
   "mars"      => 31,
   "avril"     => 30,
   "mai"       => 31,
   "juin"      => 30,
   "juillet"   => 31,
   "août"      => 31,
   "septembre" => 30,
   "octobre"   => 31,
   "novembre"  => 30,
   "décembre"  => 31
];

echo '<ol>';
foreach ($mois as $key => $value) {
  echo "<li> $key,   ". "jour contenu dans le mois: ". $value;
}
echo '</ol>';


//Exercice 4

$personnes = [
  'mdupond' => ['Prénom' => 'Martin', 'Nom' => 'Dupond', 'Age' => 25, 'Ville' => 'Paris'       ],
  'jm'      => ['Prénom' => 'Jean'  , 'Nom' => 'Martin', 'Age' => 20, 'Ville' => 'Villetaneuse'],
  'toto'    => ['Prénom' => 'Tom'   , 'Nom' => 'Tonge' , 'Age' => 18, 'Ville' => 'Epinay'      ],
  'arn'     => ['Prénom' => 'Arnaud', 'Nom' => 'Dupond', 'Age' => 33, 'Ville' => 'Paris'       ],
  'email'   => ['Prénom' => 'Emilie', 'Nom' => 'Ailta' , 'Age' => 46, 'Ville' => 'Villetaneuse'],
  'dask'    => ['Prénom' => 'Damien', 'Nom' => 'Askier', 'Age' => 7 , 'Ville' => 'Villetaneuse']
];

/*
4.1/

- clés: 'mdupond','jm', 'toto', 'arn', 'email', 'dask' --> STRING
- valeur associée à toto est: ['Prénom' => 'Jean'  , 'Nom' => 'Martin', 'Age' => 20, 'Ville' => 'Villetaneuse']
*/

//4.2
// Comment accéder à la valeur 33 dans le tableau ? À la valeur 'Epinay' ? Au tableau contenant les valeurs 'Damien', 'Askier', 7, 'Villetaneuse' ?

echo $personnes['arn']['Age'] . '<br />';
echo $personnes['toto']['Ville'] . '<br />';
echo serialize($personnes['dask']) . '<br />';

//4.3 Écrire une fonction prenant en paramètre un tableau (avec une structure similaire à $personnes) et l'affichant sous forme d'une table HTML. Le code HTML obtenu avec le tableau $personnes doit être :
/*
<table>
  <tr>
    <td>Martin</td>
    <td>Dupond</td>
    <td>25</td>
    <td>Paris</td>
  </tr>
  <tr>
    <td>Jean</td>
    <td>Martin</td>
    <td>20</td>
    <td>Villetaneuse</td>
  </tr>
  <tr>
    <td>Tom</td>
    <td>Tonge</td>
    <td>18</td>
    <td>Epinay</td>
  </tr>
  <tr>
    <td>Arnaud</td>
    <td>Dupond</td>
    <td>33</td>
    <td>Paris</td>
  </tr>
  <tr>
    <td>Emilie</td>
    <td>Ailta</td>
    <td>46</td>
    <td>Villetaneuse</td>
  </tr>
  <tr>
    <td>Damien</td>
    <td>Askier</td>
    <td>7</td>
    <td>Villetaneuse</td>
  </tr>
</table>
*/

  function toTable($tab) {
    echo "<table>";
    echo "<tr>";
    /*
    echo "<th>" . array_keys($tab)[0] . "</th>";
    echo "<th>" . array_keys($tab)[1] . "</th>";
    echo "<th>" . array_keys($tab)[2] . "</th>";
    echo "<th>" . array_keys($tab)[3] . "</th>";
    */
    $cle1 = array_keys($tab)[0]; // <==> $tab[0]
    var_dump($tab[$cle1]);

    foreach (($tab[$cle1]) as $c => $v) {
      echo "<th>" . $c . "</th>" ;
    }

    echo "</tr>";

    foreach ($tab as $key => $value) {
      foreach ($value as $k => $val) {
        echo "<td>" . $val . "</td>";

      }
      echo "</tr>";
    }


    echo "</table>";
  }

  $personnes = [
    'mdupond' => ['Prénom' => 'Martin', 'Nom' => 'Dupond', 'Age' => 25, 'Ville' => 'Paris'       ],
    'jm'      => ['Prénom' => 'Jean'  , 'Nom' => 'Martin', 'Age' => 20, 'Ville' => 'Villetaneuse'],
    'toto'    => ['Prénom' => 'Tom'   , 'Nom' => 'Tonge' , 'Age' => 18, 'Ville' => 'Epinay'      ],
    'arn'     => ['Prénom' => 'Arnaud', 'Nom' => 'Dupond', 'Age' => 33, 'Ville' => 'Paris'       ],
    'email'   => ['Prénom' => 'Emilie', 'Nom' => 'Ailta' , 'Age' => 46, 'Ville' => 'Villetaneuse'],
    'dask'    => ['Prénom' => 'Damien', 'Nom' => 'Askier', 'Age' => 7 , 'Ville' => 'Villetaneuse']
  ];


echo "<p>";
  toTable($personnes);
echo "</p>";

$scores = [
  ['Joueur' => 'Camille'  , 'score' => 156 ],
  ['Joueur' => 'Guillaume', 'score' => 254 ],
  ['Joueur' => 'Julien'   , 'score' => 192 ],
  ['Joueur' => 'Nabila'   , 'score' => 317 ],
  ['Joueur' => 'Lorianne' , 'score' => 235 ],
  ['Joueur' => 'Tom'      , 'score' => 83  ],
  ['Joueur' => 'Michael'  , 'score' => 325 ],
  ['Joueur' => 'Eddy'     , 'score' => 299 ]
];

echo "<p>";
  toTable($scores);
echo "</p>";

// Exercice 5


$tabMagazines = [
  'le monde'              => ['frequence' => 'quotidien', 'type' => 'actualité', 'prix' => 220],
  'le point'              => ['frequence' => 'hebdo'    , 'type' => 'actualité', 'prix' => 80 ],
  'causette'              => ['frequence' => 'mensuel'  , 'type' => 'féministe', 'prix' => 180],
  'politis'               => ['frequence' => 'hebdo'    , 'type' => 'opinion'  , 'prix' => 100],
  'le monde diplomatique' => ['frequence' => 'mensuel'  , 'type' => 'analyse'  , 'prix' => 60 ]
];

$tabMagazinesAbonne = ['le monde', 'le monde diplomatique'];



$mag = array_keys($tabMagazines);
sort($mag);
echo "<p>" . implode(",", $mag) . "</p>";
echo "<p>";


echo "<ul>";

foreach ($tabMagazines as $c => $v) {
  echo "<li>" . $c . " (" . implode(", ", $v) . ")" . "</li>";
}

echo "</ul>";

echo "<p>";

$totalAbo = 0;
foreach ($tabMagazinesAbonne as $value) {

  foreach ($tabMagazines as $c => $v) {
    if ($value == $c) {

        $totalAbo += $v[array_keys($v)[2]];
      
    }

  }
}


echo "Prix total de l'abonnement: " . $totalAbo;
echo "</p>";


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
        $html .= '<li>' . $value . '</li>';
     }
     $html .= "</ul>";
    }
    return $html;
  }

}


// Exercice 7_Paramètres ddans l'url

var_dump($_GET);
 ?>


<?php  
echo "<p>". "<h1>". "Vérification pseudonyme : " . "</p>" . "</h1>";
?>

 <form action="traitementCode.php" >
   <p>
    Pseudo : <input name="pseudo" type="text" /> <br /> <br />
    <input type="submit" />
   </p>
 </form>

<?php  
echo "<p>". "<h1>". "Formulaire d'inscription: " . "</p>" . "</h1>";
?>


<form action="traitementIns.php" >
   <p>
    Pseudo : <input name="pseudo" type="text" /> <br /> <br />
    Prenom : <input name="prenom" type="text" /> <br /> <br />
    Nom : <input name="nom" type="text" /> <br /> <br />
    Age : <input name="age" type="text" /> <br /> <br />
    Ville : <input name="ville" type="text" /> <br /> <br />

    <input type="submit" />
   </p>
 </form>












<?php require('fin_code_html.php'); ?>

