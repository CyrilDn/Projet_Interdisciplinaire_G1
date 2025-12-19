<div class="login-container">
    <h2>Connexion Intranet - Brassin d'Or</h2>
    <?php

     if(isset($erreur)) echo "<p style='color:red'>" . htmlspecialchars($erreur) . "</p>"; ?>
    
    <form method="POST" action="index.php?action=login_check">
        <input type="text" name="util" placeholder="Identifiant Windows" required>
        <input type="password" name="password" placeholder="Mot de passe" required>
        <input type="submit" value="Se connecter">
    </form>
</div>