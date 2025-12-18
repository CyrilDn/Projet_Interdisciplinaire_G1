<?php
    require_once 'fichiers/employe.php'; 
    foreach($bd as $ligne) {
        echo '<div">';
        echo '<h2>Id employé : ' . $ligne->getemployeId() . '</h2>';
        echo '<p>Nom employé : ' . $ligne->getNom() . '</p>';
        echo '<p>Rôle employé : ' . $ligne->getSpecialisation() . '</p>';
        echo '<p> : ' . $ligne->getId_materiel() . '</p>';
        echo '<p>Statut : ' . $ligne->getId_brassin() . '</p>';
        echo '<a href="index.php?tables=employe&action=modifier&id=' . $ligne->getemployeId() . '">Modifier</a> | ';
        echo '</div>';
    }
    
?>

<form method="POST" action="index.php?tables=employe&action=ajouter">
   <input type="hidden" name="tables" value="id_employe">
   <p>
        <label for="nom">Nom de l'employé :<br>
            <input type="text" id="nom" name="nom">
        </label>
        <label for="specialisation">Rôle de l'employé :<br>
            <input type="text" id="specialisation" name="specialisation">
        </label>
        <label for="occupe">Statut de l'employé :<br>
            <input type="number" id="occupe" name="occupe">
        </label>
        <label for="volume">Numéro du matériel :<br>
            <input type="number" id="id_materiel" name="id_materiel">
        </label>
        <label for="statut">Numéro du brassin :<br>
            <input type="text" id="id_brassin" name="id_brassin">
        </label>
    </p>
    <input type="submit" value="ValiderAjout">
</form>