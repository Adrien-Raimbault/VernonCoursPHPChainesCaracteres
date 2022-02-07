<?php
// Expressions rationnelles

$texte = "123456454545454565";
$recherche = "/(45){3,5}/"; // 
preg_match($recherche, $texte); // Renvoie 1