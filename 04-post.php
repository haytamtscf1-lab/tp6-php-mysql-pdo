<?php
$envoye = $_SERVER["REQUEST_METHOD"] === "POST";
$nom = $_POST["nom"] ?? "";
$email = $_POST["email"] ?? "";
$ville = $_POST["ville"] ?? "";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire POST</title>
</head>
<body>
    <h1>Formulaire POST</h1>

    <form method="post" action="04-post.php">
        <p>
            <label>Nom : <input type="text" name="nom" required></label>
        </p>
        <p>
            <label>Email : <input type="email" name="email" required></label>
        </p>
        <p>
            <label>Ville : <input type="text" name="ville" required></label>
        </p>
        <button type="submit">Envoyer</button>
    </form>

    <?php if ($envoye): ?>
        <h2>Données reçues</h2>
        <p>Nom : <?= htmlspecialchars($nom) ?></p>
        <p>Email : <?= htmlspecialchars($email) ?></p>
        <p>Ville : <?= htmlspecialchars($ville) ?></p>
    <?php endif; ?>
</body>
</html>
