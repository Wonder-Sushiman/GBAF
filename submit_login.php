
<?php

include_once("bdd.php");


if (!empty($_POST['username']) AND !empty($_POST['password']))
{
//  Récupération de l'utilisateur et de son password
$req = $bdd->prepare('SELECT id, firstname, lastname, password FROM users WHERE username = ?');
$req->execute(array($_POST['username']));
$resultat = $req->fetch();


    // comparaison entre password envoyé via le formulaire avec la bdd
    $correctPassword = password_verify($_POST['password'], $resultat['password']);
    
    if (!$correctPassword) 
    {
        header('Location: connexion.php?err=password'); 

    }
    else 
    {
        $_SESSION['id'] = $resultat['id'];
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['lastname']= $resultat['lastname'];
        $_SESSION['firstname']= $resultat['firstname'];
        header('Location: index_user.php');
    }
}
else
{
    header('Location: connexion.php?err=champs');
}        

?>

