<h2>Modifier les employés</h2>

<form method="POST" action="index.php?tables=employe&action=sauvegarderModification">
    <input type="hidden" name="id_employe" value="<?php echo $employe->getEmployeId(); ?>"> 

    <label>Nom : 
        <input type="text" name="specialisation" value="<?php echo $employe->getSpecialisation(); ?>">
    </label><br>

    <label>Date : 
        <input type="number" name="occupe" value="<?php echo $employe->getoccupe(); ?>">
    </label><br>

    <label>Volume : 
        <input type="number" name="idMateriel" value="<?php echo $employe->getId_materiel(); ?>">
    </label><br>

    <label>Statut : 
        <input type="number" name="idBrassin" value="<?php echo $employe->id_brassin(); ?>">
    </label><br>

    <input type="submit" value="Enregistrer les modifications">
</form>