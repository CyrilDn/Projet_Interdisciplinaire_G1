<?php

require_once 'fichiers/employe.php';
class employeControleur {
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
            $this -> modifierEmploye();
        } elseif ($action === 'ajouter') {
            $this->ajouterEmploye();
        } else {
            $this->afficherEmploye();
        }
    }

    public function afficherEmploye(){
        $bd = $this->model->liredb();
        include "vues/employeVue.php";
    }
    public function ajouterEmploye(){
        if (isset($_POST['nom'])){
            $nom = $_POST['nom']; 
            $specialisation = $_POST['specialisation'];
            $occupe = $_POST['occupe']; 
            $id_materiel = $_POST['id_materiel'];
            $id_brassin = $_POST['id_brassin'];
            $this->model->ajouterdb($nom, $specialisation, $occupe, $id_materiel, $id_brassin);
            header("Location: index.php?tables=employe");
            exit(); 
    }
}
    public function afficherModification() {
        $id = $_GET['id'];
        $employe = $this->model->getEmployeIdindb($id); //on définit notre employe à modifier et on le store dans $employe
        $brassinModele = new BrassinModele();
        $listeBrassins = $brassinModele->liredb();
        include "vues/modifierEmployeVue.php";
    }
    public function modifierEmploye(){
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id_employe'])){ //si le form a été envoyé
        $id = $_POST['id_employe'];
        $nom = $_POST['nom']; 
        $specialisation = $_POST['specialisation'];
        $occupe = $_POST['occupe']; 
        $id_materiel = $_POST['id_materiel'];
        $id_brassin = $_POST['id_brassin'];
        $this->model->modifierdb($id, $nom, $specialisation, $occupe, $id_materiel, $id_brassin);
        header("Location: index.php?tables=employe");
        exit();
    }
    // Petit check pour s'assurer qu'on a bien un id dans notre url
    if (isset($_GET['id'])) {
        $this->afficherModification();
    } else { //si pas d'id on revient à la liste initial
        header("Location: index.php?tables=employe");
        exit();
    }
    
}
}

