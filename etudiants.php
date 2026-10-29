<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Étudiants</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include_once "navigation.php" ?>

    <h1>Liste des étudiants</h1>

    <?php 
        $etudiants = [
            ["nom" => "ANANI", "prenom" => "Mawouéyram"],
            ["nom" => "ABIBI", "prenom" => "Mohamed"],
            ["nom" => "ATSOU", "prenom" => "Asma"]
        ];
    ?>

    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($etudiants as $etudiant): ?>
                <tr>
                    <td><?php echo $etudiant['nom']; ?></td>
                    <td><?php echo $etudiant['prenom']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>