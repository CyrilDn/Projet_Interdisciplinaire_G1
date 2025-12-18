<?php
    require_once 'fichiers/employe.php'; 

    $modele = new employeModele();
    $controleur = new employeControleur($modele);
    $bd = $modele->liredb();
    foreach($bd as $ligne) {
        echo '<div">';
        echo '<h2>Id employé : ' . $ligne->getemployeId() . '</h2>';
        echo '<p>Nom employé : ' . $ligne->getNom() . '</p>';
        echo '<p>Rôle employé : ' . $ligne->getSpecialisation() . '</p>';
        echo '<p> : ' . $ligne->getId_materiel() . '</p>';
        echo '<p>Statut : ' . $ligne->getId_brassin() . '</p>';
        echo '</div>';
    }
    
?>

<form method="POST" action="index.php?tables=employe">
   <input type="hidden" name="tables" value="employe">
   <p>
        <label for="nom">Nom de l'employé :<br>
            <input type="text" id="nom" name="nom">
        </label>
        <label for="specialisation">Rôle de l'employé :<br>
            <input type="text" id="specialisation" name="specialisation">
        </label>
        <label for="volume">Numéro du matériel :<br>
            <input type="number" id="idMateriel" name="idMateriel">
        </label>
        <label for="statut">Numéro du brassin :<br>
            <input type="text" id="idBrassin" name="idBrassin">
        </label>
    </p>
    <input type="submit" value="ValiderAjout">
</form>