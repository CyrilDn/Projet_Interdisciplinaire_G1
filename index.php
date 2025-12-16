<?php
require_once 'connexionbd.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vos Brassins</title>
</head>
<body>
    <?php
    $test = $bd->query('SELECT * FROM brassin');
    while ($ligne = $test->fetch()) {
        echo '<div">';
        echo '<h2>Id Brassin : ' . $ligne['id_brassin'] . '</h2>';
    }
    ?>
</body>
</html>
    