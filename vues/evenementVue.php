<?php
    require_once 'fichiers/evenement.php';

    foreach($bd as $ligne) {
        echo '<div">';
        echo '<h2>Id Evenement : ' . $ligne->getIdEvent() . '</h2>';
        echo '<p>Type d\'evenement : ' . $ligne->getTypeEvent() . '</p>';
        echo '<p>Date de début : ' . $ligne->getDebutEvent() . '</p>';
        echo '<p>Date de fin : ' . $ligne->getFinEvent() . '</p>';
        echo '<p>Numéro du responsable : ' . $ligne->getemployeId() . '</p>';
        echo '<a href="index.php?tables=evenement&action=modifier&id=' . $ligne->getIdEvent() . '">Modifier</a> | ';
        echo '</div>';
    }

?>

<form method="POST" action="index.php?tables=evenement">
   <input type="hidden" name="tables" value="evenement">
   <p>
        <label for="typeEvent">Type d'évènement:<br>
            <input type="text" id="typeEvent" name="typeEvent">
        </label>
        <label for="debutEvent">Date de début :<br>
            <input type="date" id="debutEvent" name="debutEvent">
        </label>
        <label for="finEvent">Date de fin :<br>
            <input type="date" id="finEvent" name="finEvent">
        </label>
        <label for="statut">Numéro de l'employé responsable :<br>
            <input type="number" id="idEmploye" name="idEmploye">
        </label>
    </p>
    <input type="submit" value="ValiderAjout">
</form>