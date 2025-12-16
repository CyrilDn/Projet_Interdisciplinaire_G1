<?php

class connexionbd {

    private $hote = "localhost";
    private $nom_bd = "bd_brassin_or";
    private $nom_util = "root";
    private $mdp = "";
    private $conn;

   

    public function getbd(){
        try {
            $this->conn=new PDO('mysql:host='.$this->hote.';dbname='.$this->nom_bd, $this->nom_util, $this->mdp);
            $this->conn->exec("SET NAMES 'utf8'");
    }
        catch (Exception $e) {
            die('Erreur de connexion à la BD : '.$e->getMessage());
        }
        return $this->conn;
    }
?>