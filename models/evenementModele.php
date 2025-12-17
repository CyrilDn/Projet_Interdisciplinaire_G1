<?php

require_once 'fichiers/evenement.php';
require_once 'connexionbd.php';

class evenementModele{
  
    private $conn;
    public function __construct(){
        $db = New connexionbd();
        $this->conn = $db->getbd();
    }

    public function liredb() {
        $bdd = $this->conn; 
        $resultat = $bdd->query("SELECT id_evenement, type_evenement, debut_evenement, fin_evenement, responsable, id_employe FROM evenement");
        $evenement = [];
        while ($ligne = $resultat->fetch()) { //pour chaque ligne on crée un objet evenement en utilisant notre constructeur
            $evenement[] = new Evenement(
                $ligne['id_evenement'],
                $ligne['type_evenement'],
                $ligne['debut_evenement'],
                $ligne['fin_evenement'],
                $ligne['responsable'],
                $ligne['id_employe']
            );
        }
        return $evenement;
    }
}