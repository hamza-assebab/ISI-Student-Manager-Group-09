<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Etudiants</title>
</head>
<body>
    <H1>Liste des étudiants</H1>

    <?php 
        $etudiants = [["nom" => "ANANI", "prenom"=>"Mawouéyram"],
        ["nom" =>"ABIBI", "prenom" => "Mohamed"],
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
