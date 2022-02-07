<?php
// Expressions rationnelles

$texte = "J'ai adopté un chat"; 

if (preg_match('/un chat|un chien/', $texte)) {
    echo "La phrase contient l'expression 'un chat' ou 'un chien'";
}
else {
    echo "La phrase ne contient ni 'un chat', ni 'un chien'";
}


/*if (strpos($texte, 'un chat') !== false || strpos($texte, 'un chien') !== false) {
    echo "Chien ou chat";
}

else {
    echo "Ni chien, ni chat";
}*/