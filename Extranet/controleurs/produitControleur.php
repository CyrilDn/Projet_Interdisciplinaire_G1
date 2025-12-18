<?php

require_once 'fichiers/produit.php';

class produitControleur {
    private $model;

    public function __construct($model){
        $this->model = $model;
    }

    public function afficherProduit(){
        $bd = $this->model->liredb();
        include "vues/produitVue.php";
    }


}