<?php
require_once '../fichiers/brassin.php';
class brassinModele extends connexionbd {
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

?>