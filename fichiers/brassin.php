<?php

class brassin{
    private $id_brassin;
    private $nom_brassin;
    private $date_debut;
    private $volume;
    private $statut;

    public function __construct($id_brassin, $nom_brassin, $date_debut, $volume, $statut){

        $this->id_brassin = $id_brassin;
        $this->nom_brassin = $nom_brassin;
        $this->date_debut = $date_debut;
        $this->volume = $volume;
        $this->statut = $statut;
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

    //... finir les autres getters et setters ici ...
}