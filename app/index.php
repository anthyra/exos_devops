<h1> hello world </h1>

<?php

include 'connect.php';

// Get all users
$users = $pdo->query('SELECT * FROM user')->fetchAll();

var_dump($users);

foreach ($users as $user) {
    echo "<p>" . $user['id'] . " - " . $user['name'] . "</p>";
}
?>


