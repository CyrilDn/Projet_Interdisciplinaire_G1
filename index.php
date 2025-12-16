<?php
    require_once 'models/brassinModele.php';
    require_once 'controleurs/brassinControleur.php';    
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
    $bd = $modele->liredb();
    foreach($bd as $ligne) {
        echo '<div">';
        echo '<h2>Id Brassin : ' . $ligne->getBrassinId() . '</h2>';
        // echo '<p>Nom : ' . $ligne['nom'] . '</p>';
        // echo '<p>Volume : ' . $ligne['volume'] . '</p>';
        echo '</div>';
    }
    ?>
</body>
</html>
    