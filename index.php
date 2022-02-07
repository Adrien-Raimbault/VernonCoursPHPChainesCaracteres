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