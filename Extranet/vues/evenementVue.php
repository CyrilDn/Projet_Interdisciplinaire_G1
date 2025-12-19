<?php
    require_once 'fichiers/evenement.php';
?>

<div class="bloc-centre">
<?php
    foreach($bd as $ligne) {

        echo '<div class="element">';
        echo '<h3>Evenement : ' . $ligne->getTypeEvent() . '</h3>';
        echo '<p>L\'événement se déroulera du ' . $ligne->getDebutEvent() .' au '. $ligne->getFinEvent().'</p>';
        echo '<p>Employé responsable de l\'événement : ' . "//" . '</p>';
        echo '</div>';
    }

?>
</div>
