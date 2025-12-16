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
    $modele = new brassinModele();
    $controleur = new brassinControleur($modele);
    $bd = $modele->getbd();
    while ($ligne = $bd->fetch()) {
        echo '<div">';
        echo '<h2>Id Brassin : ' . $ligne['id_brassin'] . '</h2>';
        echo '<p>Nom : ' . $ligne['nom'] . '</p>';
        echo '<p>Volume : ' . $ligne['volume'] . '</p>';
        echo '</div>';
    }
    ?>
</body>
</html>
    