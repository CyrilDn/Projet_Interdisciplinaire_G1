<?php

class evenementControleur {
    private $model;
    public function __construct($model){
        $this->model = $model;
    }

    public function afficherEvenement(){
        $bd = $this->model->liredb();
        include "vues/evenementVue.php";
    }

}