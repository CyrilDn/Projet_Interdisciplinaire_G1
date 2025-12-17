<?php
    require_once 'models/brassinModele.php';
    require_once 'controleurs/brassinControleur.php'; 

    $modele = new brassinModele();
    $controleur = new brassinControleur($modele);
    $bd = $modele->liredb();
    foreach($bd as $ligne) {
        echo '<div">';
        echo '<h2>Id Brassin : ' . $ligne->getBrassinId() . '</h2>';
        echo '<p>Nom : ' . $ligne->getBrassinId() . '</p>';
        echo '<p>Volume : ' . $ligne->getBrassinId() . '</p>';
        echo '<p>Respondable : ' . $ligne->getBrassinId() . '</p>';
        echo '<p>Statut : ' . $ligne->getBrassinId() . '</p>';
        echo '</div>';
    }
?>