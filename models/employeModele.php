<?php
require_once 'fichiers/employe.php';
require_once 'connexionbd.php';
class employeModele{
    private $conn;
    public function __construct(){
        $db = New connexionbd();
        $this->conn = $db->getbd();
    }
    public function liredb() {
        $bdd = $this->conn;
        $resultat = $bdd->query("SELECT id_employe, nom, specialisation, occupe, id_materiel, id_brassin FROM employe");
        $employes = [];
        while ($ligne = $resultat->fetch()) { //pour chaque ligne on crée un employé employe en utilisant notre constructeur
            $employes[] = new Employe(
                $ligne['id_employe'],
                $ligne['nom'],
                $ligne['specialisation'],
                $ligne['occupe'],
                $ligne['id_materiel'],
                $ligne['id_brassin']
            );
        }
        return $employes;
    }
    public function ajouterdb($nom, $specialisation, $occupe, $id_materiel, $id_brassin){
        $bdd = $this->conn;
        $resultat = $bdd->prepare("INSERT INTO brassin (nom, specialisation, occupe, id_materiel, id_brassin) VALUES (:nom, :specialisation, :occupe, :id_materiel, :id_brassin);");
        $resultat->bindValue('nom',$nom);
        $resultat->bindValue('specialisation',$specialisation);
        $resultat->bindValue('occupe',$occupe);
        $resultat->bindValue('id_materiel',$id_materiel);
        $resultat->bindValue('id_brassin',$id_brassin);
        $resultat->execute();
    }
    public function modifierdb($id, $nom, $specialisation, $occupe, $id_materiel, $id_brassin){
        $bdd = $this->conn;
        $resultat = $bdd->prepare("UPDATE employe SET nom = :nom, specialisation = :specialisation, occupe = :occupe, id_materiel = :id_materiel, id_brassin = :id_brassin WHERE id_employe = :id");
        $resultat->bindValue('id', $id);
        $resultat->bindValue('nom',$nom);
        $resultat->bindValue('specialisation',$specialisation);
        $resultat->bindValue('occupe',$occupe);
        $resultat->bindValue('id_materiel',$id_materiel);
        $resultat->bindValue('id_brassin',$id_brassin);
        $resultat->execute();
    }
    public function getEmployeIdindb($id_employe){
        $bdd = $this->conn;
        $resultat = $bdd->prepare("SELECT id_employe, nom, specialisation, occupe, id_materiel, id_brassin FROM employe WHERE id_employe = :id_employe");
        $resultat->bindValue('id_employe', $id_employe);
        $resultat->execute();
        $ligne = $resultat->fetch();
        if ($ligne) {
            return new employe(
                $ligne['id_employe'],
                $ligne['nom'],
                $ligne['specialisation'],
                $ligne['occupe'],
                $ligne['id_materiel'],
                $ligne['id_brassin']
            );
        } else {
            return null; 
        }
    }

}
