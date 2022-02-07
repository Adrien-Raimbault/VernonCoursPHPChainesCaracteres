<?php
$version = 8;
$langue = 'fr';
$url = 'PHP %d est disponible sur l\'adresse https://%s.php.net';
//printf($url, $version, $langue);

$reponse = sprintf($url, $version, $langue);
echo $reponse;

printf('<br />');
printf('%b <br />', 3);
printf('%o %x <br />', 15, 20);
printf('%03d <br />', 2); // Affiche 002 
printf('%03d <br />', 20); // Affiche 020
printf("[%-10.9s]\n", $version); // justification à gauche mais avec une coupure à 8 caractères

$fr = '%d est la version de %s';
$en = '%d is %s\'s version';

$langue = $fr;

if ($langue === 'en')
    printf($en, 8.1, 'PHP');
else 
    printf($fr, 8.1, 'PHP');

echo "<hr />";

// Affiche une chaîne depuis une entrée sous forme de tableau
$infos = ['PHP', 8.1];
vprintf('%s %f', $infos);

echo "<hr />";

// Accès à un caractère précis d'une chaîne
$texte = 'Je me prénomme Frédéric';
//echo $texte[1]; // $texte{1} fonctionnait avant PHP8

// Affiche le nombre de caractères d'une chaîne
// Warning : les caractères accentués sont comptés sur deux octets et non un
// Dans l'exemple, strlen() renvoie 26, mb_strlen() renvoie 23
echo mb_strlen($texte);