<?php

class brassinControleur {
    private $model;
    public function __construct($model){
        $this->model = $model;
    }
    public function afficherBrassin(){
        $bd = $this->model->liredb();
        include "vues/brassinVue.php";
    }
    public function ajouterBrassin(){
        echo $_POST['nomBrassin'];
        echo "test";
        if (isset($_POST['nomBrassin'])){
            echo "one";
            $nom_brassin = $_POST['nomBrassin']; 
            $date_debut = $_POST['dateDebut'];
            $volume = $_POST['volume']; 
            $statut = $_POST['statut'];
            $id_ingredient = $_POST['id_ingredient'];
            echo $_POST['nomBrassin'];
        }
        $this->model->ajouterdb($nom_brassin, $date_debut, $volume,$statut, $id_ingredient);
        header("Location : index.php?table=brassin");
    }
}