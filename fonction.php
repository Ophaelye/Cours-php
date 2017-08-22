<?php
function addition($a, $b) {
  return $a + $b;
}

$result = addition(2,3);

echo $result;
echo "<br/>\n";


//créer une fonction qui :
// - prend une variable en paramètre
// - renvoie la chaîne de caractères "vrai" si la var est true
// - renvoie la chaîne de caractères "faux" si la var est false

// appelez cette var avec une valeur true et affichez le résultat (same pour false)

function echoBoolean($answer) {
  if($answer) {
    return "vrai";
  } else {
    return "faux";
  }
}

echo echoBoolean(true);
echo "<br/>\n";


ou

function echoBoolean($answer) {
  return $answer ? "vrai" : "faux";
}


ou

function echoBoolean(bool $answer) {
  return $answer ? "true" : "false";

}

echo echoBoolean(true);
echo"<br/>\n";
echo echoBoolean(false);
echo"<br/>\n";
echo echoBoolean("foo bar baz");
echo "<br/>\n";
