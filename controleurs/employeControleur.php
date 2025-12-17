<?php

class employeControleur {
    private $model;
    public function __construct($model){
        $this->model = $model;
    }
    public function afficherEmploye(){
        $bd = $this->model->liredb();
        include "vues/employeVue.php";
    }
}