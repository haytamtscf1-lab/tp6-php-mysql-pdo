<?php
require __DIR__ . "/06-connexion.php";

$afficherTout = isset($_GET["tout"]);

if ($afficherTout) {
    $stmt = $pdo->query("SELECT * FROM products");
} else {
    $stmt = $pdo->prepare("SELECT * FROM products WHERE price > :prix");
    $stmt->execute(["prix" => 300]);
}

$products = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des produits</title>
    <style>
        table { border-collapse: collapse; }
        th, td { border: 1px solid #999; padding: 6px 12px; }
        th { background: #eee; }
        td.nombre { text-align: right; }
    </style>
</head>
<body>
    <h1>Catalogue des produits</h1>

    <p>
        <?php if ($afficherTout): ?>
            Tous les produits — <a href="07-select.php">afficher seulement les produits &gt; 300 DH</a>
        <?php else: ?>
            Produits dont le prix est supérieur à 300 DH — <a href="07-select.php?tout=1">afficher tous les produits</a>
        <?php endif; ?>
    </p>

    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prix (DH)</th>
                <th>Quantité</th>
                <th>Total stock (DH)</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?= htmlspecialchars($product["name"]) ?></td>
                    <td class="nombre"><?= number_format($product["price"], 2, ",", " ") ?></td>
                    <td class="nombre"><?= $product["quantity"] ?></td>
                    <td class="nombre"><?= number_format($product["price"] * $product["quantity"], 2, ",", " ") ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
