<?php

    foreach($bd as $ligne) {
        echo '<div">';
        echo '<h2>Id Brassin : ' . $ligne->getBrassinId() . '</h2>';
        echo '<p>Nom : ' . $ligne->getNomBrassin() . '</p>';
        echo '<p>Volume : ' . $ligne->getVolume() . '</p>';
        echo '<p>Statut : ' . $ligne->getStatut() . '</p>';
        echo '</div>';
    }
?>