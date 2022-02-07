<?php
// Expressions rationnelles

$texte = "J'ai adopté un chat"; 

if (preg_match('/un chat|un chien/', $texte)) {
    echo "La phrase contient l'expression 'un chat' ou 'un chien'";
}
else {
    echo "La phrase ne contient ni 'un chat', ni 'un chien'";
}

$recherche = "/J'ai adopté un (chat|chien)/";
preg_match($recherche, $texte); // Renvoie la valeur 1

$texte2 = 'Les enfants sont rentrés à 12h45';
// $recherche2 = '/[012][0123456789]h[012345][0123456789]/';
$recherche2 = '/[0-2][0-9]h[0-5][0-9]/';
// $recherche2 = '/[^3-9][0-9]h[0-5][0-9]/'; Caractères "interdits"
echo preg_match($recherche2, $texte2); // Renvoie 1

/*
[[:lower:]] lettres minuscules
[[:upper:]] lettre majuscules
[[:alpha:]] caractères alphabétiques
[[:digit:]] chiffres décimaux 
[[:alnum:]] alphanumérique
[[:xdigit:]] chiffres héxadécimaux
[[:ascii:]] ASCII 0 à 127
[[:blank:]] espace ou tabulatio

[[:^alpha:]] tout sauf les caractères alphanumériques 
*/

