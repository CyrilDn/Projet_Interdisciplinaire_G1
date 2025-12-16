<?php



class brassin{
    private $brassin_id;
    private $nom;
    private $dates;
    private $volumes;
    private $responsable;
    private $statut;

    public function __construct($brassin_id, $nom, $dates, $volumes, $responsable, $statut){

        $this->brassin_id = $brassin_id;
        $this->nom = $nom;
        $this->dates = $dates;
        $this->volumes = $volumes;
        $this->responsable = $responsable;
        $this->statut = $statut;
    }
    public function getBrassinId(){
        return $this->brassin_id;
    }
    public function getNom(){
        return $this->nom;
    }

    //... finir les autres getters et setters ici ...
}