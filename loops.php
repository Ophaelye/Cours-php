<?php

$exemple = rand(0,1);

echo $exemple;
echo '<br/>';

// exo 1
//créer un tableau nommé $data
// ajouter 100 valeurs aléatoires comprises entre 0 et 10

//exo 2
//créer un tableau qui contient 50 mots différents
// réinitialiser un tableau vide dans un $data
// ajouter 100 tableaux ayant la structure suivante :
// une clé "word" contenant un des 10 mots sélectionné au hasard
// une clé "count" contenant une valeur aléatoire comprises entre 0 et 10


$data = [];

for ( $i = 0; $i < 100; $i++) {
    $data[] = rand(0,10);
    echo $data[$i];
    echo '<br/>';
}


$word = ['Lorem', 'ipsum', 'dolor', 'sit', 'amet', 'consectetur', 'adipisicing', 'elit', 'sed', 'do', 'eiusmod', 'tempor', 'incididunt', 'ut', 'labore', 'et', 'dolore', 'magna', 'aliqua', 'Ut', 'enim', 'ad', 'minim'];

$i = 3;
echo $echo[$i];





//for ($i = 0; $i < 50; $i++) {
//  $word[] = rand(0,50);
//  echo $word[$i];
//  echo '<br/>';
