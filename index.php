<?php
// Expressions rationnelles

$texte = "abcddde";
$recherche = "/d{3}/"; // Nombre d'occurences fixes
preg_match($recherche, $texte); // Renvoie 1