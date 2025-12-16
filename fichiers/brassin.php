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
        $this->nom = $nom_brassin;
        $this->dates = $date_debut;
        $this->volumes = $volume;
        $this->responsable = $responsable;
        $this->statut = $statut;
    }
    public function getBrassinId(){
        return $this->brassin_id;
    }
    public function getNomBrassin(){
        return $this->nom_brassin;
    }

    //... finir les autres getters et setters ici ...
}