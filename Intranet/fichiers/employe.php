<?php

class employe{
    private $id_employe;
    private $nom_employe;
    private $specialisation;
    private $occupe;
    private $id_materiel;
    private $id_brassin;

    public function __construct($id_employe, $nom_employe, $specialisation, $occupe, $id_materiel, $id_brassin){

        $this->id_employe = $id_employe;
        $this->nom_employe = $nom_employe;
        $this->specialisation = $specialisation;
        $this->occupe = $occupe;
        $this->id_materiel = $id_materiel;
        $this->id_brassin = $id_brassin;
    }
    public function getemployeId(){
        return $this->id_employe;
    }
    public function getNom(){
        return $this->nom_employe;
    }
    public function getSpecialisation(){
        return $this->specialisation;
    }

    public function getoccupe(){
        return $this->occupe;
    }
    public function getId_brassin(){
        return $this->id_brassin;
    }
    public function getId_materiel(){
        return $this->id_materiel;
    }

}