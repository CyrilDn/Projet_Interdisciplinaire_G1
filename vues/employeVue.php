<?php
    require_once 'models/employeModele.php';
    require_once 'controleurs/employeControleur.php'; 

    $modele = new employeModele();
    $controleur = new employeControleur($modele);
    $bd = $modele->liredb();
    foreach($bd as $ligne) {
        echo '<div">';
        echo '<h2>Id employé : ' . $ligne->getemployeId() . '</h2>';
        echo '<p>Nom employé : ' . $ligne->getNomemploye() . '</p>';
        echo '<p>Date de début : ' . $ligne->getDateDebut() . '</p>';
        echo '<p> : ' . $ligne->getVolume() . '</p>';
        echo '<p>Statut : ' . $ligne->getStatut() . '</p>';
        echo '</div>';
    }
    
