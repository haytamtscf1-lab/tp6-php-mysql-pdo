<?php
$envoye = $_SERVER["REQUEST_METHOD"] === "POST";
$produit = $_POST["produit"] ?? "";
$categorie = $_POST["categorie"] ?? "";
$prix = (float) ($_POST["prix"] ?? 0);
$quantite = (int) ($_POST["quantite"] ?? 0);
$total = $prix * $quantite;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Calcul de commande</title>
</head>
<body>
    <h1>Calcul du total d'un produit</h1>

    <form method="post" action="05-formulaire.php">
        <p>
            <label>Produit : <input type="text" name="produit" required></label>
        </p>
        <p>
            <label>Catégorie : <input type="text" name="categorie" required></label>
        </p>
        <p>
            <label>Prix (DH) : <input type="number" name="prix" step="0.01" min="0" required></label>
        </p>
        <p>
            <label>Quantité : <input type="number" name="quantite" min="1" required></label>
        </p>
        <button type="submit">Calculer</button>
    </form>

    <?php if ($envoye): ?>
        <h2>Résultat</h2>
        <p>Produit : <?= htmlspecialchars($produit) ?> (<?= htmlspecialchars($categorie) ?>)</p>
        <p>Prix unitaire : <?= number_format($prix, 2, ",", " ") ?> DH</p>
        <p>Quantité : <?= $quantite ?></p>
        <p><strong>Total : <?= number_format($total, 2, ",", " ") ?> DH</strong></p>
    <?php endif; ?>
</body>
</html>
