<?php
    require_once 'fichiers/evenement.php';

    foreach($bd as $ligne) {
        echo '<div">';
        echo '<h2>Id Evenement : ' . $ligne->getIdEvent() . '</h2>';
        echo '<p>Type d\'evenement : ' . $ligne->getTypeEvent() . '</p>';
        echo '<p>Date de début : ' . $ligne->getDebutEvent() . '</p>';
        echo '<p>Date de fin : ' . $ligne->getFinEvent() . '</p>';
        echo '<p>Responsable : ' . $ligne->getResponsable() . '</p>';
        echo '</div>';
    }
