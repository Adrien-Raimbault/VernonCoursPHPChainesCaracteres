<?php
// Expressions rationnelles

$texte = "abcddddde";
$recherche = "/abcd{3,5}e/"; // Nombre d'occurences de la lettre 'd' délimité de 3 à 5 occurences
// $recherche = "/abcd*e/"; // Nombre d'occurences de la lettre 'd' de 0 à n fois
// $recherche = "/abcd+e/"; // Nombre d'occurences de la lettre 'd' de 1 à n fois
// $recherche = "/abcd?e/"; // Nombre d'occurences de la lettre 'd' de 0 à 1 fois
preg_match($recherche, $texte); // Renvoie 1