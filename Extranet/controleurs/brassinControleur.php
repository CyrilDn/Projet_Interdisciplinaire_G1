<?php
require_once 'fichiers/brassin.php';
class brassinControleur {
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
        $this->ajouterBrassin(); 
    } elseif ($action === 'modifier') {
        $this->afficherModification();
        $this->modifierBrassin();
    } else {
        $this->afficherBrassin();
    }
}
    public function afficherBrassin(){
        $bd = $this->model->liredb();
        include "vues/brassinVue.php";
    }

    public function ajouterBrassin(){
        if (isset($_POST['nomBrassin'])){
            $nom_brassin = $_POST['nomBrassin']; 
            $date_debut = $_POST['dateDebut'];
            $volume = $_POST['volume']; 
            $statut = $_POST['statut'];
            $id_ingredient = $_POST['id_ingredient'];
            $this->model->ajouterdb($nom_brassin, $date_debut, $volume, $statut, $id_ingredient);
            header("Location: index.php?tables=brassin");
            exit(); 
    }
}
    public function afficherModification() {
        $id = $_GET['id'];
        $brassin = $this->model->getBrassinIdindb($id); //on définit notre brassin à modifier et on le store dans $brassin
        include "vues/modifierBrassinVue.php";
    }
    public function modifierBrassin(){
        if (isset($_POST['id'])){ //on vérifie qu'il y a bien un id et un nom de brassin dans la nouvelle modif
            $id = $_POST['id'];
            $nom_brassin = $_POST['nomBrassin']; 
            $date_debut = $_POST['dateDebut'];
            $volume = $_POST['volume']; 
            $statut = $_POST['statut'];
            $id_ingredient = $_POST['id_ingredient'];
            $this->model->modifierdb($id, $nom_brassin, $date_debut, $volume, $statut, $id_ingredient);
            header("Location: index.php?tables=brassin");
            exit();
    }
}
}