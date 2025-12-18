<?php
class produit {
    private $id_produit;
    private $nom;
    private $quantite;
    private $prix;


    public function __construct($id_produit, $nom, $quantite, $prix){

    $this->id_produit = $id_produit;
    $this->nom = $nom;
    $this->quantite = $quantite;
    $this->prix = $prix;
    }

    public function getIdProduit(){
        return $this->id_produit;
    }
    public function getNom(){
        return $this->nom;
    }
    public function getQuantite(){
        return $this->quantite;
    }
    public function getPrix(){
        return $this->prix;
    }


}