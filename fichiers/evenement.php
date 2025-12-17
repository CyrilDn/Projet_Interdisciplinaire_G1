<?php
class evenement {
    
    private $id_evenement;

    private $type_evenement;

    private $debut_evenement;

    private $fin_evenement;

    private $responsable;

    private $id_employe;

    public function __construct($id_evenement, $type_evenement, $debut_evenement, $fin_evenement, $responsable, $id_employe){

    $this->id_evenement = $id_evenement;
    $this->type_evenement = $type_evenement;
    $this->debut_evenement = $debut_evenement;
    $this->fin_evenement = $fin_evenement;
    $this->responsable = $responsable;
    $this->id_employe = $id_employe;
    }

    public function getIdEvent(){
        return $this->id_evenement;
    }
    public function getTypeEvent(){
        return $this->type_evenement;
    }
    public function getDebutEvent(){
        return $this->debut_evenement;
    }
    public function getFinEvent(){
        return $this->fin_evenement;
    }
    public function getResponsable(){
        return $this->responsable;
    }
    public function getIdEmploye(){
        return $this->id_employe;
    }


}