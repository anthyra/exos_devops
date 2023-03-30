<h1> hello world </h1>

<?php
$host = 'mariadb';
$username = 'root';
$password = 'root';
$dbname = 'exo_devops';

$connexion = new mysqli($host, $username, $password, $dbname);

if ($connexion->connect_error) {
    die("Connection failed: " . $connexion->connect_error);
}

echo "Connected successfully to the database!";


$sql ="CREATE TABLE users (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, name VARCHAR(30) NOT NULL)";
$sql = "INSERT INTO users (name) VALUES ('John')";

$sql = "SELECT * FROM users";
$result = $connexion->query($sql);

echo "<table><tr><th>ID</th><th>Name</th></tr>";
?>


