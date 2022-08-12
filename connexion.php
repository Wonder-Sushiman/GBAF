<?php include('header.php');?>


    <h2>Connectez vous</h2>



     <form class="container" method="POST" action="submit_login.php" >
        <div>
            <label for="user" style="color:blue;"><h3>Username :</h3></label>
            <input placeholder="Votre id"  type="username" name="username" id="username">
        </div>
        <div>
            <label for="password" style="color:blue;"><h3>Password :</h3></label>
            <input placeholder="Votre mot de passe" name="password" id="password">
        </div>
        <div class="button">
            <button type="submit">Se connecter</button>
        </div>
    </form>

<!--
   Si utilisateur/trice est non identifié(e), on affiche le formulaire
-->

<?php if(!isset($loggedUser)): ?>
<form action="connexion.php" method="post" class="container">
    <!-- si message d'erreur on l'affiche -->
    <?php if(isset($errorMessage)) : ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $errorMessage; ?>
        </div>
    <?php endif; ?>
    <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="username" class="form-control" id="username" name="username" placeholder="asticot35">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Mot de passe</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Envoyer</button>
</form>

<!-- 
    Si utilisateur/trice bien connectée on affiche un message de succès
-->

<?php else: ?>
    <div class="alert alert-success" role="alert">
        Bonjour <?php echo $loggedUser['username']; ?> et bienvenue !
    </div>
<?php endif; ?>

    <div class="container" id="solution">
        <p>Créer un compte <a href="newaccount.php"> ici </a>! </p>
        <p>Mot de passe oublié? La solution <a href="resetpassword.php"> juste là </a>!</p>
    </div>

    <?php include('footer.php'); ?>


