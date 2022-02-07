<?php
// echo 'L\'âge que j\'ai';

htmlspecialchars("Tom & Jerry");

$html = '<h1><a href="index.php">Page index</a></h1>';
echo "Texte : " . strip_tags($html, '<a>') . "<br />"; // 2e paramètres : tags autorisés

// Conventions d'affichage locales
// setlocale(catégorie, localité);
setlocale(LC_ALL, 'fr_FR', 'fr', 'FR', 'fr_FR@euro');
