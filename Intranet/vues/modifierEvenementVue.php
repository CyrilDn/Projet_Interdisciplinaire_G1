<h2>Modifier l'évènement</h2>

<form method="POST" action="index.php?tables=evenement&action=modifier">
    <input type="hidden" name="id_evenement" value="<?php echo htmlspecialchars($evenement->getIdEvent()); ?>"> 

    <label>Type d'évènement : 
        <input type="text" name="type_evenement" value="<?php echo htmlspecialchars($evenement->getTypeEvent()); ?>">
    </label><br>

    <label>Date de début : 
        <input type="date" name="debut_evenement" value="<?php echo htmlspecialchars($evenement->getDebutEvent()); ?>">
    </label><br>

    <label>Date de fin : 
        <input type="date" name="fin_evenement" value="<?php echo htmlspecialchars($evenement->getFinEvent()); ?>">
    </label><br>

    <label>Numéro de l'employé responsable : 
        <input type="number" name="id_employe" value="<?php echo htmlspecialchars($evenement->getIdEmploye()); ?>">
    </label><br>

    <input type="submit" value="Enregistrer les modifications">
</form>