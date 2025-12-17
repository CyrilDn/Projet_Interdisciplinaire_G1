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
        $resultat = $bdd->query("SELECT id_employe, nom, role, occupe, id_materiel, id_brassin FROM employe");
        $employes = [];
        while ($ligne = $resultat->fetch()) { //pour chaque ligne on crée un employé employe en utilisant notre constructeur
            $employes[] = new Employe(
                $ligne['id_employe'],
                $ligne['nom'],
                $ligne['role'],
                $ligne['occupe'],
                $ligne['id_materiel'],
                $ligne['id_brassin']
            );
        }
        return $employes;
    }

    // public function ajoutdb(){
    //     $bdd = $this->conn;
    //     $resultat = $bdd->query("INSERT INTO employe (id_employe, nom, role, occupe, id_materiel, id_brassin) VALUES (:id_employe, :nom, :role, :occupe, :id_materiel, :id_brassin)")
    // }
}
