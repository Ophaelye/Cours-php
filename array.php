<?php

//initialisation du tableau
$myArray = [];


//remplissage
$myArray[] = 42;
$myArray[] = 3.14;
$myArray[] = "foo bar baz";
$myArray[] = true;


//affichage
for ($i = 0; $i < count($myArray); $i++) {
  echo $myArray[$i];
  echo '<br/>';
}

//suppresion de la donnée située à l'index 2
array_splice($myArray, 2, 1);


// lecture du tableau avec une boucle foreach
foreach ($myArray as $key => $value) {
  echo $key;
  echo '<br/>';
}

//création d'un tableau avec clé alphanum
$myArray2 = [
  "abc" => 123,
  "def" => 456,
  "ghi" => 789
];

// ajout de données avec clé alphanum
$myArray2["jkl"] = 123;

//modification de données avec clé alphanum
$myArray2["jkl"] = 42;

//suppression de donnnées avec une clé alphanum
unset($myArray2["def"]);
