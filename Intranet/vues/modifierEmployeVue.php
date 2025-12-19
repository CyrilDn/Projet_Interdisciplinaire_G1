<div class="bloc-centre">
<h2>Modifier les employés</h2>

<form method="POST" action="index.php?tables=employe&action=modifier">
    <input type="hidden" name="id_employe" value="<?php echo htmlspecialchars($employe->getEmployeId()); ?>"> 
    <input type="hidden" name="nom" value="<?php echo htmlspecialchars($employe->getNom()); ?>">
    <label>Nom : 
        <input type="text" name="nom" value="<?php echo htmlspecialchars($employe->getNom()); ?>">
    </label><br>

    <label>Role de l'employé : 
        <input type="text" name="specialisation" value="<?php echo htmlspecialchars($employe->getSpecialisation()); ?>">
    </label><br>
    <label>Statut : 
        <input type="number" name="occupe" value="<?php echo htmlspecialchars($employe->getOccupe()); ?>">
    </label><br>
    <label>Id Matériel : 
        <input type="number" name="id_materiel" value="<?php echo htmlspecialchars($employe->getId_materiel()); ?>">
    </label><br>

    <label>Brassin associé : 
    <select name="id_brassin">
        <?php foreach($listeBrassins as $b): ?>
            <option value="<?php echo htmlspecialchars($b->getBrassinId()); ?>" 
                <?php if($b->getBrassinId() == $employe->getId_brassin()) echo 'selected'; ?>>
                <?php echo htmlspecialchars($b->getNomBrassin()); ?>
            </option>
        <?php endforeach; ?>
    </select>
</label>

    <input type="submit" value="Enregistrer les modifications">
</form>
</div>