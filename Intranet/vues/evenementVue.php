<?php
    require_once 'fichiers/evenement.php';

    foreach($bd as $ligne) {
        echo '<div">';
        echo '<h2>Id Evenement : ' . $ligne->getIdEvent() . '</h2>';
        echo '<p>Type d\'evenement : ' . $ligne->getTypeEvent() . '</p>';
        echo '<p>Date de début : ' . $ligne->getDebutEvent() . '</p>';
        echo '<p>Date de fin : ' . $ligne->getFinEvent() . '</p>';
        echo '<p>Numéro du responsable : ' . $ligne->getIdEmploye() . '</p>';
        echo '<a href="index.php?tables=evenement&action=modifier&id=' . $ligne->getIdEvent() . '">Modifier</a> | ';
        echo '</div>';
    }

?>

<form method="POST" action="index.php?tables=evenement&action=ajouter">
   
   <p>
        <label for="type_evenement">Type d'évènement:<br>
            <input type="text" id="type_evenement" name="type_evenement">
        </label>
        <label for="debut_evenement">Date de début :<br>
            <input type="date" id="debut_evenement" name="debut_evenement">
        </label>
        <label for="fin_evenement">Date de fin :<br>
            <input type="date" id="fin_evenement" name="fin_evenement">
        </label>
        <label for="id_employe">Numéro de l'employé responsable :<br>
            <input type="number" id="id_employe" name="id_employe">
        </label>
    </p>
    <input type="submit" value="ValiderAjout">
</form>