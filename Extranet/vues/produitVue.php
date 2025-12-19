<?php
    require_once 'fichiers/produit.php';
?>

<div class="bloc-centre">
<?php
    foreach($bd as $ligne) {
        
        echo '<div class="element">';
        echo '<h3>Produit : ' . htmlspecialchars($ligne->getNom()) . '</h3>';
        echo '<p>Quantité disponible : '. htmlspecialchars($ligne->getQuantite()) .' Unités</p>';
        echo '<p>Prix : '. htmlspecialchars($ligne->getPrix()) .'€/L  </p>';
        echo '</div>';
    }

?>
</div>

