<?php
class loginControleur {
    public function afficherLogin() {
        include "vues/loginVue.php";
    }

    public function authentifier() {
        $user = $_POST['util'];
        $mdp = $_POST['password'];

        $ldap = ldap_connect("ldap://192.168.1.42");
        if (!$ldap) {
            die("Connexion au serveur LDAP impossible.");
        } 
        $ldaprdn = $user."@lamoussedor.lan" ; // fqdn de mon utilisateur (domaine + identifiant)
        ldap_set_option($ldap, LDAP_OPT_PROTOCOL_VERSION, 3);
        ldap_set_option($ldap, LDAP_OPT_REFERRALS, 0);
        // Tentative de connexion 
        if ($user != "" && $mdp != "") {
            if (@ldap_bind($ldap, $ldaprdn, $mdp)) {
                session_start();
                $_SESSION['user'] = $user;
                $_SESSION['auth'] = true;
                header("Location: index.php");
                exit();
            } else {
                $erreur = "Identifiants AD incorrects.";
                include "vues/loginVue.php";
            }
        }
        ldap_unbind($ldap);
    }
    public function deconnecter() {
        session_destroy(); // Détruit la session
        header("Location: index.php?action=login");
        exit();
    }
}