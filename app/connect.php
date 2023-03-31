<?php
$dsn = "mysql:host=mariadb;dbname=exo_devops;charset=utf8mb4";
$username = "root";
$password = "root";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $pdo = new PDO($dsn, $username, $password, $options);
    echo "Connexion à la base de données réussie !";
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}

// Create table user and insert some users into
try {
    $pdo = new PDO($dsn, $username, $password, $options);
    $pdo->exec("CREATE TABLE IF NOT EXISTS user (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL
    )");
    $pdo->exec("INSERT INTO user (name) VALUES ('John Doe')");
} catch (PDOException $e) {
    echo "Erreur dans l'ajout des données : " . $e->getMessage();
}