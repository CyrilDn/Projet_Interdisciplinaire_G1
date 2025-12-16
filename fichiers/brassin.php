<?php



class brassin{
    private $brassin_id;
    private $nom_brassin;
    private $date_debut;
    private $volume;
    private $responsable;
    private $statut;

    public function __construct($brassin_id, $nom_brassin, $date_debut, $volume, $responsable, $statut){

        $this->brassin_id = $brassin_id;
        $this->nom_brassin = $nom_brassin;
        $this->date_debut = $date_debut;
        $this->volume = $volume;
        $this->responsable = $responsable;
        $this->statut = $statut;
    }
    public function getBrassinId(){
        return $this->brassin_id;
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
    public function getResponsable(){
        return $this->responsable;
    }
    public function getStatut(){
        return $this->statut;
    }

    //... finir les autres getters et setters ici ...
}