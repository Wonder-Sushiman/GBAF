<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="stylesheet.css">
    <title> Page d'acceuil</title>
</head>

<body>
    
    <header>
    <?php include('header.php');?>
    </header>

        <h1 style="font-size:300%;text-align:center;">Mot de passe perdu?</h1>

    <form class="container"> <!--action="submit_contact.php" method="POST">-->
        <div>
            <div><label for="user" style="color:blue;"><h3>Username :</h3></label></div>
            <input placeholder="Votre id"  type="username" name="username" id="username">
        </div>
        <div>
            <div><label for="answer" style="color:blue;"><h3>Réponse à la question secrète :</h3></label></div>
            <input placeholder="Votre réponse"  type="answer" name="answer" id="answer">
        </div>
        <div class="connexion"><button type="submit"><a href="home.php" >Envoyer</button></a></div>
    </form>

    <footer>
    <?php include('footer.php'); ?>
    </footer>

</body>

</html>
<p><a href="home.php">Retour</a></p>