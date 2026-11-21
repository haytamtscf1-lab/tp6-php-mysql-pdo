<?php
$nom = $_GET["nom"] ?? "inconnu";
$ville = $_GET["ville"] ?? "non précisée";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Paramètres GET</title>
</head>
<body>
    <h1>Paramètres GET</h1>
    <p>Nom reçu : <?= htmlspecialchars($nom) ?></p>
    <p>Ville reçue : <?= htmlspecialchars($ville) ?></p>
    <p>
        Exemple :
        <a href="03-get.php?nom=Haytam&ville=Marrakech">03-get.php?nom=Haytam&amp;ville=Marrakech</a>
    </p>
</body>
</html>
