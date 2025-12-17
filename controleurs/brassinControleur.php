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
}