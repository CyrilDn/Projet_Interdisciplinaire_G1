<?php
    require_once 'models/brassinModele.php';
    require_once 'controleurs/brassinControleur.php'; 

    $modele = new brassinModele();
    $controleur = new brassinControleur($modele);
    $bd = $modele->liredb();
    foreach($bd as $ligne) {
        echo '<div">';
        echo '<h2>Id Brassin : ' . $ligne->getBrassinId() . '</h2>';
        echo '<p>Nom : ' . $ligne->getNomBrassin() . '</p>';
        echo '<p>Volume : ' . $ligne->getVolume() . '</p>';
        echo '<p>Respondable : ' . $ligne->getResponsable() . '</p>';
        echo '<p>Statut : ' . $ligne->getStatut() . '</p>';
        echo '</div>';
    }
?>