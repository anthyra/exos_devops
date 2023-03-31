<?php
$file_contents = file_get_contents('index.php');
$pattern = '/<h1> hello world <\/h1>/';
if (preg_match($pattern, $file_contents)) {
    echo "La balise <h1> hello world </h1> est présente dans le fichier index.php.";
} else {
    echo "La balise <h1> hello world </h1> est absente dans le fichier index.php.";
}
?>
