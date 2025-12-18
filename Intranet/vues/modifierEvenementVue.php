<h2>Modifier l'évènement</h2>

<form method="POST" action="index.php?tables=evenement&action=modifier">
    <input type="hidden" name="idEvent" value="<?php echo $evenement->getIdEvent(); ?>"> 

    <label>Type d'évènement : 
        <input type="text" name="typeEvent" value="<?php echo $evenement->getTypeEvent(); ?>">
    </label><br>

    <label>Date de début : 
        <input type="date" name="DebutEvent" value="<?php echo $evenement->getDebutEvent(); ?>">
    </label><br>

    <label>Date de fin : 
        <input type="date" name="FinEvent" value="<?php echo $evenement->getFinEvent(); ?>">
    </label><br>

    <label>Numéro de l'employé responsable : 
        <input type="number" name="idEmploye" value="<?php echo $evenement->getIdEmploye(); ?>">
    </label><br>

    <input type="submit" value="Enregistrer les modifications">
</form>