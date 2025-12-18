<h2>Modifier le brassin</h2>

<form method="POST" action="index.php?tables=brassin&action=modifier">
    <input type="hidden" name="id_brassin" value="<?php echo $brassin->getBrassinId(); ?>"> 

    <label>Nom : 
        <input type="text" name="nomBrassin" value="<?php echo $brassin->getNomBrassin(); ?>">
    </label><br>

    <label>Date : 
        <input type="date" name="dateDebut" value="<?php echo $brassin->getDateDebut(); ?>">
    </label><br>

    <label>Volume : 
        <input type="number" name="volume" value="<?php echo $brassin->getVolume(); ?>">
    </label><br>

    <label>Statut : 
        <input type="text" name="statut" value="<?php echo $brassin->getStatut(); ?>">
    </label><br>
    <label>ID Ingrédient : 
        <input type="number" name="id_ingredient" value="<?php echo $brassin->getIdIngredient(); ?>">

    <input type="submit" value="Enregistrer les modifications">
</form>