<?php

class brassin{
    private $id_brassin;
    private $nom_brassin;
    private $date_debut;
    private $volume;
    private $statut;
    private $id_ingredient;

    public function __construct($id_brassin, $nom_brassin, $date_debut, $volume, $statut, $id_ingredient){

        $this->id_brassin = $id_brassin;
        $this->nom_brassin = $nom_brassin;
        $this->date_debut = $date_debut;
        $this->volume = $volume;
        $this->statut = $statut;
        $this->id_ingredient = $id_ingredient;
    }
    public function getBrassinId(){
        return $this->id_brassin;
    }
    public function getNomBrassin(){
        return $this->nom_brassin;
    }
    public function getVolume(){
        return $this->volume;
    }
    public function getDateDebut(){
        return $this->date_debut;
    }
    public function getStatut(){
        return $this->statut;
    }
    public function getIdIngredient(){
        return $this->id_ingredient;
    }

    //... finir les autres getters et setters ici ...
}