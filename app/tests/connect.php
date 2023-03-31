<?php

include 'connect.php';

try {
    $dsn = "mysql:host=mariadb;dbname=exo_devops;charset=utf8mb4";
    $username = "root";
    $password = getenv('MYSQL_ROOT_PASSWORD');
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];
    $pdo = new PDO($dsn, $username, $password, $options);
    echo "Connexion à la base de données réussie !";
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
    exit(1);
}
?>
