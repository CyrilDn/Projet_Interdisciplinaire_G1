<?php
    require_once 'fichiers/produit.php';
?>

<div class="bloc-centre">
<?php
    foreach($bd as $ligne) {
        
        echo '<div class="element">';
        echo '<h3>Produit : ' . $ligne->getNom() . '</h3>';
        echo '<p>Quantité disponible : '. $ligne->getQuantite() .' Unités</p>';
        echo '<p>Prix : '. $ligne->getPrix() .'€/L  </p>';
        echo '</div>';
    }

?>
</div>

