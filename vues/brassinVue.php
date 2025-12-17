<?php
    require_once 'fichiers/brassin.php';



    foreach($bd as $ligne) {
        echo '<div">';
        echo '<h2>Id Brassin : ' . $ligne->getBrassinId() . '</h2>';
        echo '<p>Nom : ' . $ligne->getNomBrassin() . '</p>';
        echo '<p>Volume : ' . $ligne->getVolume() . '</p>';
        echo '<p>Statut : ' . $ligne->getStatut() . '</p>';
        echo '</div>';
    }


?>

<form method="POST" action="index.php">
   <p><label for="choixAjout">Choisir une table de la base de données que vous voulez consulter/modifier :
        <label for="nomBrassin">Nom du brassin :<br>
            <input type="text" id="nomBrassin" >
        </label>
        <label for="dateDebut">Date de début :<br>
            <input type="text" id="dateDebut" >
        </label>
                <label for="volume">Volume du brassin :<br>
            <input type="text" id="volume" >
        </label>
                <label for="statut">Statut :<br>
            <input type="text" id="statut" >
    </label></p>
    <input type="submit" value="ValiderAjout">
</form>