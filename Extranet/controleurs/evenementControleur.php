<?php

require_once 'fichiers/evenement.php';

class evenementControleur {
    private $model;

    public function __construct($model){
        $this->model = $model;
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

}