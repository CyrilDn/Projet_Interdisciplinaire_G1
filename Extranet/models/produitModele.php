<?php

require_once 'fichiers/produit.php';
require_once 'connexionbd.php';

class produitModele{
  
    private $conn;
    public function __construct(){
        $db = New connexionbd();
        $this->conn = $db->getbd();
    }

    public function liredb() {
        $bdd = $this->conn; 
        $resultat = $bdd->query("SELECT id_produit, nom, quantite, prix FROM produit");
        $produits = [];
        while ($ligne = $resultat->fetch()) {
            $produits[] = new produit(
                $ligne['id_produit'],
                $ligne['nom'],
                $ligne['quantite'],
                $ligne['prix'],
            );
        }
        return $produits;
    }

}