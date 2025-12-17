<?php
    require_once 'models/evenementModele.php';
    require_once 'controleurs/evenementControleur.php'; 

    $modele = new evenementModele();
    $controleur = new evenementControleur($modele);
    $bd = $modele->liredb();
    foreach($bd as $ligne) {
        echo '<div">';
        echo '<h2>Id Evenement : ' . $ligne->getIdEvent() . '</h2>';
        echo '<p>Type d\'evenement : ' . $ligne->getTypeEvent() . '</p>';
        echo '<p>Date de début : ' . $ligne->getDebutEvent() . '</p>';
        echo '<p>Date de fin : ' . $ligne->getFinEvent() . '</p>';
        echo '<p>Responsable : ' . $ligne->getResponsable() . '</p>';
        echo '</div>';
    }
