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
    if ($action === 'modifier') {
        $this -> modifierBrassin();
    } elseif ($action === 'ajouter') {
        $this->ajouterBrassin();
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
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id_brassin'])){ //si le form a été envoyé
        $id = $_POST['id_brassin'];
        $nom_brassin = $_POST['nomBrassin']; 
        $date_debut = $_POST['dateDebut'];
        $volume = $_POST['volume']; 
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
        header("Location: index.php?tables=brassin");
        exit();
    }
}
}