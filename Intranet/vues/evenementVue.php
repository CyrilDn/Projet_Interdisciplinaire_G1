<?php
    require_once 'fichiers/evenement.php';
?>
<div class="bloc-centre">
<?php
    foreach($bd as $ligne) {
        echo '<div class="element">';
        echo '<h2>Id Evenement : ' . htmlspecialchars($ligne->getIdEvent()) . '</h2>';
        echo '<p>Type d\'evenement : ' . htmlspecialchars($ligne->getTypeEvent()) . '</p>';
        echo '<p>Date de début : ' . htmlspecialchars($ligne->getDebutEvent()) . '</p>';
        echo '<p>Date de fin : ' . htmlspecialchars($ligne->getFinEvent()) . '</p>';
        echo '<p>Numéro du responsable : ' . htmlspecialchars($ligne->getIdEmploye()) . '</p>';
        echo '<a href="index.php?tables=evenement&action=modifier&id=' . htmlspecialchars($ligne->getIdEvent()) . '">Modifier</a> | ';
        echo '</div>';
    }

?>
</div>
<div class="bloc-centre">
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
</div>