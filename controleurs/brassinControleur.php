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
        $this->model->ajouterdb($_POST['nomBrassin'], $_POST['dateDebut'], $_POST['volume'], $_POST['statut']);
    }
}