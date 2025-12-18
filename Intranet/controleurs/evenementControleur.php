<?php

require_once 'fichiers/evenement.php';

class evenementControleur {
    private $model;

    public function __construct($model){
        $this->model = $model;
    }
    public function traiterRequete() {
        if (isset($_GET['action'])) {
            $action = $_GET['action'];
        } else {
            $action = '';
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->ajouterEvenement(); 
        } elseif ($action === 'modifier') {
            $this->afficherModification();
        } else {
            $this->afficherEvenement();
        }
    }

    public function afficherEvenement(){
        $bd = $this->model->liredb();
        include "vues/evenementVue.php";
    }

    public function ajouterEvenement(){
        if (isset($_POST['type_evenement'])){
            $type_evenement = $_POST['type_evenement']; 
            $debut_evenement = $_POST['debut_evenement'];
            $fin_evenement = $_POST['fin_evenement']; 
            $id_employe = $_POST['id_employe'];
            $this->model->ajouterdb($type_evenement, $debut_evenement, $fin_evenement, $id_employe);
            header("Location: index.php?tables=evenement");
            exit(); 
        }
    }
    public function afficherModification() {
        $id = $_GET['id'];
        $evenement = $this->model->getEvenementIdindb($id); //on définit notre evenement à modifier et on le store dans $evenement
        include "vues/modifierEvenementVue.php";
    }

    public function modifierEvenement(){
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id_evenement'])){ //si le form a été envoyé
        $id = $_POST['id_evenement'];
        $type_evenement = $_POST['type_evenement']; 
        $debut_evenement = $_POST['debut_evenement'];
        $fin_evenement = $_POST['fin_evenement']; 
        $statut = $_POST['statut'];
        $id_ingredient = $_POST['id_ingredient'];
        $this->model->modifierdb($id, $nom_brassin, $date_debut, $volume, $statut, $id_ingredient);
        header("Location: index.php?tables=brassin");
        exit();
    }
    // Petit check pour s'assurer qu'on a bien un id dans notre url
    if (isset($_GET['id'])) {
        $this->afficherModification();
    } else { //si pas d'id on revient à la liste initial
        header("Location: index.php?tables=evenement");
        exit();
    }
}
}