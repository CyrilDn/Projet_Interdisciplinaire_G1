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
        $evenement = [];
        while ($ligne = $resultat->fetch()) { //pour chaque ligne on crée un objet evenement en utilisant notre constructeur
            $evenement[] = new Evenement(
                $ligne['id_evenement'],
                $ligne['type_evenement'],
                $ligne['debut_evenement'],
                $ligne['fin_evenement'],
                $ligne['id_employe'],
            );
        }
        return $evenement;
    }
    public function ajouterdb($type_evenement, $debut_evenement, $fin_evenement, $id_employe){
        $bdd = $this->conn;
        $resultat = $bdd->prepare("INSERT INTO evenement (type_evenement, debut_evenement, fin_evenement, id_employe) VALUES (:type_evenement, :debut_evenement, :fin_evenement, :id_employe);");
        $resultat->bindValue('type_evenement',$type_evenement);
        $resultat->bindValue('date_debut',$debut_evenement);
        $resultat->bindValue('volume',$fin_evenement);
        $resultat->bindValue('statut',$id_employe);
        $resultat->execute();
    }
    public function modifierdb($id, $type_evenement, $debut_evenement, $fin_evenement, $id_employe){
        $bdd = $this->conn;
        $resultat = $bdd->prepare("UPDATE evenement SET type_evenement = :type_evenement, debut_evenement = :debut_evenement, fin_evenement = :fin_evenement, id_employe = :id_employe WHERE id_evenement = :id");
        $resultat->bindValue('id', $id);
        $resultat->bindValue('type_evenement',$type_evenement);
        $resultat->bindValue('debut_evenement',$debut_evenement);
        $resultat->bindValue('fin_evenement',$fin_evenement);
        $resultat->bindValue('id_employe',$id_employe);
        $resultat->execute();
    }
    public function getEvenementIdindb($id_evenement){
        $bdd = $this->conn;
        $resultat = $bdd->prepare("SELECT id_evenement, type_evenement, debut_evenement, fin_evenement, id_employe FROM evenement WHERE id_evenement = :id_evenement");
        $resultat->bindValue('id_evenement', $id_evenement);
        $resultat->execute();
        $ligne = $resultat->fetch();
        if ($ligne) {
            return new evenement(
                $ligne['id_evenement'],
                $ligne['type_evenement'],
                $ligne['debut_evenement'],
                $ligne['fin_evenement'],
                $ligne['id_employe'],
            );
        } else {
            return null; // ou gérer l'erreur comme vous le souhaitez
        }
    }
}