<?php
// echo 'L\'âge que j\'ai';

htmlspecialchars("Tom & Jerry");

$html = '<h1><a href="index.php">Page index</a></h1>';
echo "Texte : " . strip_tags($html, '<a>') . "<br />"; // 2e paramètres : tags autorisés

// Conventions d'affichage locales
// setlocale(catégorie, localité);
setlocale(LC_ALL, 'fr_FR', 'fr', 'FR', 'fr_FR@euro');

// Manipulation sur des chaînes

echo strstr('toto@gmail.com', '@'); // Affiche '@gmail.com';
echo "<br />";
echo substr('toto@gmail.com', 4, 2); // Affiche '@g'
echo "<br />";

// Remplacer un motif par un autre
$texte = 'Je fais du PHP';
$cherche = 'PHP';
$remplace = 'code';
echo str_replace($cherche, $remplace, $texte);