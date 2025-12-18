<?php

class employe{
    private $employe_id;
    private $nom_employe;
    private $date_debut;
    private $role;
    private $occupe;

    public function __construct($id_employe, $nom_employe, $role, $occupe){

        $this->id_employe = $id_employe;
        $this->nom_employe = $nom_employe;
        $this->role = $role;
        $this->occupe = $occupe;
    }
    public function getemployeId(){
        return $this->id_employe;
    }
    public function getNom(){
        return $this->nom_employe;
    }
    public function getrole(){
        return $this->role;
    }

    public function getoccupe(){
        return $this->occupe;
    }
    public function getid_brassin(){
        return $this->id_brassin;
    }
    public function getid_materiel(){
        return $this->id_materiel;
    }

    //... finir les autres getters et setters ici ...
}