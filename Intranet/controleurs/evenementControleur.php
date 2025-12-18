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
        if (isset($_POST['id']) && isset($_POST['type_evenement'])){ //on vérifie qu'il y a bien un id et un type d'evenement dans la nouvelle modif
            $id = $_POST['id'];
            $type_evenement = $_POST['type_evenement']; 
            $debut_evenement = $_POST['debut_evenement'];
            $fin_evenement = $_POST['fin_evenement']; 
            $id_employe = $_POST['id_employe'];
            $this->model->modifierdb($id, $type_evenement, $debut_evenement, $fin_evenement, $id_employe);
            header("Location: index.php?tables=evenement");
            exit(); 
        }

    }
}