<?php
require_once '../fichiers/brassin.php';
require_once '../connexionbd.php';
class brassinModele{
    public function __construct(){
        $db = New connexionbd();
        $this->conn = $db->getbd();
    }
    public function liredb() {
        $bdd = $this->getbd(); //utilisation de l'héritage si tout fonctionne bien
        $resultat = $bdd->query("SELECT id_brassin, nom, dates, volume, responsable, statut FROM brassin");
        $brassins = [];
        while ($ligne = $resultat->fetch()) { //pour chaque ligne on crée un objet brassin en utilisant notre constructeur
            $brassins[] = new Brassin(
                $ligne['id_brassin'],
                $ligne['nom'],
                $ligne['volume'],
                $ligne['dates'],
                $ligne['responsable'],
                $ligne['statut']
            );
        }
        return $brassins;
    }
}
