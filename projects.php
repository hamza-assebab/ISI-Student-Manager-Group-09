<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Projets</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include_once "navigation.php" ?>

    <h1>Liste des projets</h1>

    <ul>
    <?php
        $projets = [
            "Application de gestion des étudiants",
            "Marketplace des voitures",
            "Plateforme de cours"
        ];
        
        foreach ($projets as $projet) {
            echo "<li>" . htmlspecialchars($projet) . "</li>";
        }
    ?>
    </ul>
</body>
</html>