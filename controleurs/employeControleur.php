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
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->ajouterEmploye(); 
        } elseif ($action === 'modifier') {
            $this->afficherModification();
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
            $occupe = $_POST['volume']; 
            $id_materiel = $_POST['id_materiel'];
            $id_brassin = $_POST['id_brassin'];
            $this->model->ajouterdb($nom, $specialisation, $occupe, $id_materiel, $id_brassin);
            header("Location: index.php?tables=employe");
            exit(); 
    }
}
    public function afficherModification() {
        $id = $_GET['id'];
        $brassin = $this->model->getEmployeIdindb($id); //on définit notre brassin à modifier et on le store dans $brassin
        include "vues/modifierEmployeVue.php";
    }
    public function modifierEmploye(){
        if (isset($_POST['id']) && isset($_POST['nom'])){ //on vérifie qu'il y a bien un id et un nom de brassin dans la nouvelle modif
            $id = $_POST['id'];
            $nom = $_POST['nom']; 
            $specialisation = $_POST['specialisation'];
            $occupe = $_POST['occupe']; 
            $id_materiel = $_POST['id_materiel'];
            $id_brassin = $_POST['id_brassin'];
            $this->model->modifierdb($id, $nom, $specialisation, $occupe, $id_materiel, $id_brassin);
            header("Location: index.php?tables=employe");
            exit(); 
    }
}

}
