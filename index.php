<?php
// echo 'L\'âge que j\'ai';

htmlspecialchars("Tom & Jerry");

$html = '<h1><a href="index.php">Page index</a></h1>';
echo "Texte : " . strip_tags($html, '<a>') . "<br />"; // 2e paramètres : tags autorisés