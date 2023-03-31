<?php

include 'connect.php';

$file_contents = file_get_contents('index.php');
$pattern = '/<h1> hello world <\/h1>/';
if (preg_match($pattern, $file_contents)) {
    echo "La balise <h1></h1> est présente dans le fichier index.php.";
} else {
    echo "La balise <h1> hello world </h1> est absente dans le fichier index.php.";
}

try {
    $pdo = new PDO($dsn, $username, $password, $options);
    echo "Connexion à la base de données réussie !";
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}
?>
