

<?php include('header.php');?>



    <h1 style="font-size:300%;text-align:center;">Inscription</h1>

<form class="container" action="submit_register.php" method="POST">
    <div>
        <div><label for="firstname" style="color:blue;"><h3>Nom :</h3></label></div>
        <input placeholder="Votre nom"  type="firstname" name="firstname" id="firstname">
    </div>
    <div>
        <div><label for="lastname" style="color:blue;"><h3>Prénom :</h3></label></div>
        <input placeholder="Votre id"  type="lastname" name="lastname" id="lastname">
    </div>
    <div>
        <div><label for="user" style="color:blue;"><h3>Username :</h3></label></div>
        <input placeholder="Votre id"  type="username" name="username" id="username">
    </div>
    <div>
        <div><label for="password" style="color:blue;"><h3>Password :</h3></label></div>
        <input placeholder="Votre mot de passe" name="password" id="password">
    </div>
    <div>
        <div><label for="passwordConfirm" style="color:blue;"><h3>Confirmez votre Password :</h3></label></div>
        <input placeholder="Votre mot de passe a nouveau" name="passwordConfirm" id="passwordConfirm">
    </div>
    <div>
        <div><label for="question" style="color:blue;"><h3>Question secrète :</h3></label></div>
        <textarea placeholder="Inscrivez ici votre question secrète"  type="question" name="question" id="question"></textarea>
    </div>
    <div>
        <div><label for="answer" style="color:blue;"><h3>Réponse :</h3></label></div>
        <input placeholder="Votre réponse"  type="answer" name="answer" id="answer">
    </div>
    <div class="connexion"><button type="submit"><a href="index.php" >Valider</button></a></div>
</form>

<p><a href="connexion.php">Retour</a></p>


<?php include('footer.php'); ?>


