<?php
if ($_GET ['tables'] = 'brassin') {
    $modele = new brassinModele();
    $controleur = new brassinControleur($modele);
    $controleur->afficherBrassin();
} elseif ($_GET ['tables'] = 'evenement') {
    $modele = new evenementModele();
    $controleur = new evenementControleur($modele);
    $controleur->afficherEvenement();
} elseif ($_GET ['tables'] = 'ingredient') {
    require_once 'vues/ingredientVue.php';
    $controleur = new ingredientControleur();
    $controleur->afficherIngredient();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brassin d'Or</title>
</head>
<body>
    <h2>Les tables</h2>
    <form method="get" action="index.php">
        <label for="tables">Choisir une table de la base de données que vous voulez consulter/modifier :</label>
        <select name="tables" id="tables">
            <option value="brassin">Brassin</option>
            <option value="evenement">Événement</option>
            <option value="ingredient">Ingrédient</option>
            
        </select>
        <input type="submit" value="Valider">
    </form>
    
</body>
</html>
    