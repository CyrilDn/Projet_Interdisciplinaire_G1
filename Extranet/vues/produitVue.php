<?php
    require_once 'fichiers/produit.php';
?>

<div>
<?php
    foreach($bd as $ligne) {
        
        echo '<div>';
        echo '<h3>Produit : ' . $ligne->getNom() . '</h3>';
        echo '<p>Quantité disponible : '. $ligne->getQuantite() .' Unités</p>';
        echo '<p>Prix : '. $ligne->getPrix() .'€/L  </p>';
        echo '</div>';
    }

?>
</div>

