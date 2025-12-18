<?php
    require_once 'fichiers/brassin.php';

    foreach($bd as $ligne) {
        echo '<div">';
        echo '<h2>Id Brassin : ' . $ligne->getBrassinId() . '</h2>';
        echo '<p>Nom : ' . $ligne->getNomBrassin() . '</p>';
        echo '<p>Volume : ' . $ligne->getVolume() . '</p>';
        echo '<p>Statut : ' . $ligne->getStatut() . '</p>';
        echo '<a href="index.php?tables=brassin&action=modifier&id=' . $ligne->getBrassinId() . '">Modifier</a> | ';
        echo '</div>';
    }

?>

<form method="POST" action="index.php?tables=brassin">
   <input type="hidden" name="tables" value="brassin">
   <p>
        <label for="nomBrassin">Nom du brassin :<br>
            <input type="text" id="nomBrassin" name="nomBrassin">
        </label>
        <label for="dateDebut">Date de début :<br>
            <input type="date" id="dateDebut" name="dateDebut">
        </label>
        <label for="volume">Volume du brassin :<br>
            <input type="number" id="volume" name="volume">
        </label>
        <label for="statut">Statut :<br>
            <input type="text" id="statut" name="statut">
        </label>
        <label for="id_ingredient">ID Ingrédient :<br>
            <input type="number" id="id_ingredient" name="id_ingredient">
        </label>
    </p>
    <input type="submit" value="ValiderAjout">
</form>