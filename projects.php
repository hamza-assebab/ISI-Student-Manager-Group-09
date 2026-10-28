<?php

$projets = [
    "Application de gestion des étudiants",
    "Marketplace des voitures",
    "Plateforme de cours"
];

echo "<h2>Liste des projets</h2>";

echo "<ul>";

foreach ($projets as $projet) {
    echo "<li>" . $projet . "</li>";
}

echo "</ul>";

?>

