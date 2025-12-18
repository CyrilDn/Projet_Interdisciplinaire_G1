<?php
session_start();

if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'afficher_accueil'; // Une valeur par défaut claire
}

if (isset($_GET['tables'])) {
    $table = $_GET['tables'];
} else {
    $table = null;
}


if ($action === 'login' || $action === 'login_check') { // CONNEXION
    require_once 'controleurs/loginControleur.php';
    $loginControleur = new loginControleur();
    if ($action === 'login_check' && $_SERVER['REQUEST_METHOD'] === 'POST') { //cas ou envoie le formulaire (=post)
        $loginControleur->authentifier(); 
    } else {
        $loginControleur->afficherLogin(); // cas ou on affiche le formulaire car rien n'a été posté (post est vide)
    }
    exit(); // si on arrive ici c'est qu'on est en train de se log donc on ne charge pas le reste du site
} // DECO
if ($action === 'deconnecter') {
    require_once 'controleurs/loginControleur.php';
    $loginControleur = new loginControleur();
    $loginControleur->deconnecter();
    exit();
}

// CAS OU ON REFRESH OU ON ACCEDE AU SITE NORMALEMENT
if (!isset($_SESSION['auth']) || $_SESSION['auth'] !== true) {
    header("Location: index.php?action=login");
    exit();
}

// 4. CHARGEMENT DU RESTE DU SITE (Uniquement si on est connecté)
require_once 'controleurs/brassinControleur.php';
require_once 'models/brassinModele.php';
require_once 'controleurs/evenementControleur.php';
require_once 'models/evenementModele.php';
require_once 'controleurs/employeControleur.php';
require_once 'models/employeModele.php';

if ($table == 'brassin') {
    $modele = new brassinModele();
    $controleur = new brassinControleur($modele);
    $controleur->traiterRequete();
    // On peut ajouter un exit ici si on veut ne rien afficher d'autre
} elseif ($table == 'evenement') {
    $modele = new evenementModele();
    $controleur = new evenementControleur($modele);
    $controleur->traiterRequete();
} elseif ($table == 'employe') {
    $modele = new employeModele();
    $controleur = new employeControleur($modele);
    $controleur->traiterRequete();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Brassin d'Or</title>
</head>
<body>
    <h2>Intranet:</h2>
    <form method="get" action="index.php">
        <label>Choisir une table :</label>
        <select name="tables">
            <option value="brassin">Brassin</option>
            <option value="evenement">Événement</option>
            <option value="employe">Événement</option>
        </select>
        <input type="submit" value="Consulter">
    </form>
    <br>
    <a href="index.php?action=deconnecter">Se déconnecter</a>
</body>
</html>