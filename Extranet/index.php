<?php

require_once 'controleurs/evenementControleur.php';
require_once 'models/evenementModele.php';
require_once 'controleurs/produitControleur.php';
require_once 'models/produitModele.php';


if (isset($_GET ['tables'])) {
    if ($_GET['tables'] == 'evenement') {
        $modele = new evenementModele();
        $controleur = new evenementControleur($modele);
        $controleur->afficherEvenement();
    } elseif ($_GET['tables'] == 'produit'){
        $modele = new produitModele();
        $controleur = new produitControleur($modele);
        $controleur->afficherProduit();
     }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Brassin d'Or</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="conteneur">
    <div class="bloc-secondaire">
    <h2>Extranet :</h2>
    <form method="get" action="index.php">
        <div class="petit-element">
        <label>Choisir une table à afficher :</label>
 
        <select name="tables">
            <option value="evenement">Événements</option>
            <option value="produit">Produits</option>
        </select>
        <input type="submit" value="Consulter">
        </div>
    </div>
    </div>
    </form>
    <br>
</body>
</html>