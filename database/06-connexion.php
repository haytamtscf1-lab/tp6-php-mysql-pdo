<?php
$host = "localhost";
$dbname = "tp_php";
$user = "root";
$password = "";

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $user,
        $password,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]
    );
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

if (basename($_SERVER["SCRIPT_FILENAME"]) === basename(__FILE__)) {
    echo "<p>Connexion réussie à la base $dbname.</p>";
}
