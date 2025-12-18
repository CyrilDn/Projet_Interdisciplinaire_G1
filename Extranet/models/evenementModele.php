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
        $resultat = $bdd->query("SELECT id_evenement, type_evenement, debut_evenement, fin_evenement, id_employe FROM evenement");
        $evenements = [];
        while ($ligne = $resultat->fetch()) { //pour chaque ligne on crée un objet evenement en utilisant notre constructeur
            $evenements[] = new Evenement(
                $ligne['id_evenement'],
                $ligne['type_evenement'],
                $ligne['debut_evenement'],
                $ligne['fin_evenement'],
                $ligne['id_employe'],
            );
        }
        return $evenements;
    }

    // Associe l'id_employe des tables 'employe' et 'evenement' pour récupérer le nom de l'employé responsable de l'event
    public function getEmployeById($id){
        $bdd = $this->conn;
        $resultat = $bdd->prepare("SELECT em.nom FROM employe AS em JOIN evenement AS ev ON em.id_employe = ev.id_employe WHERE em.id_employe = :id");
        $resultat->bindValue(':id', $id);
        $resultat->execute();
        return $resultat;
    }
   
}