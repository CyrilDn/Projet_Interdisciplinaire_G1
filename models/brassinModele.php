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
        $bdd = $this->conn; //utilisation de l'héritage si tout fonctionne bien
        $resultat = $bdd->query("SELECT id_brassin, nom_brassin, date_debut, volume, statut FROM brassin");
        $brassins = [];
        while ($ligne = $resultat->fetch()) { //pour chaque ligne on crée un objet brassin en utilisant notre constructeur
            $brassins[] = new Brassin(
                $ligne['id_brassin'],
                $ligne['nom_brassin'],
                $ligne['date_debut'],
                $ligne['volume'],
                $ligne['statut']
            );
        }
        return $brassins;
    }

    // public function ajoutdb(){
    //     $bdd = $this->conn;
    //     $resultat = $bdd->query("INSERT INTO employe (id_employe, nom, role, occupe, id_materiel, id_brassin) VALUES (:id_employe, :nom, :role, :occupe, :id_materiel, :id_brassin)")
    // }
}
