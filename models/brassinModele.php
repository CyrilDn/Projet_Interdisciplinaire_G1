<?php
require_once 'fichiers/brassin.php';
require_once 'connexionbd.php';

class brassinModele{
    private $conn;
    public function __construct(){
        $db = New connexionbd();
        $this->conn = $db->getbd();
    }
    public function liredb() {
        $bdd = $this->conn;
        $resultat = $bdd->query("SELECT id_brassin, nom_brassin, date_debut, volume, statut, id_ingredient FROM brassin");
        $brassins = [];
        while ($ligne = $resultat->fetch()) { //pour chaque ligne on crée un objet brassin en utilisant notre constructeur
            $brassins[] = new Brassin(
                $ligne['id_brassin'],
                $ligne['nom_brassin'],
                $ligne['date_debut'],
                $ligne['volume'],
                $ligne['statut'],
                $ligne['id_ingredient']
            );
        }
        return $brassins;
    }
    
    public function ajouterdb($nom_brassin, $date_debut, $volume, $statut, $id_ingredient){
        $bdd = $this->conn;
        $resultat = $bdd->prepare("INSERT INTO brassin (nom_brassin, date_debut, volume, statut, id_ingredient) VALUES (:nom_brassin, :date_debut, :volume, :statut, :id_ingredient);");
        $resultat->bindValue('nom_brassin',$nom_brassin);
        $resultat->bindValue('date_debut',$date_debut);
        $resultat->bindValue('volume',$volume);
        $resultat->bindValue('statut',$statut);
        $resultat->bindValue('id_ingredient',$id_ingredient);
        $resultat->execute();
    }
    public function modifierdb($id, $nom_brassin, $date_debut, $volume, $statut, $id_ingredient){
        $bdd = $this->conn;
        $resultat = $bdd->prepare("UPDATE brassin SET nom_brassin = :nom_brassin, date_debut = :date_debut, volume = :volume, statut = :statut, id_ingredient = :id_ingredient WHERE id_brassin = :id");
        $resultat->bindValue('id', $id);
        $resultat->bindValue('nom_brassin',$nom_brassin);
        $resultat->bindValue('date_debut',$date_debut);
        $resultat->bindValue('volume',$volume);
        $resultat->bindValue('statut',$statut);
        $resultat->bindValue('id_ingredient',$id_ingredient);
        $resultat->execute();
    }
    public function getBrassinbyIdindb($id_brassin){
        $bdd = $this->conn;
        $resultat = $bdd->prepare("SELECT id_brassin, nom_brassin, date_debut, volume, statut, id_ingredient FROM brassin WHERE id_brassin = :id_brassin");
        $resultat->bindValue('id_brassin', $id_brassin);
        $resultat->execute();
        $ligne = $resultat->fetch();
        if ($ligne) {
            return new Brassin(
                $ligne['id_brassin'],
                $ligne['nom_brassin'],
                $ligne['date_debut'],
                $ligne['volume'],
                $ligne['statut'],
                $ligne['id_ingredient']
            );
        } else {
            return null; // ou gérer l'erreur comme vous le souhaitez
        }
    }
}