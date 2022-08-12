<?php

//   VOILA LE FORMULAIRE POUR INSERER EN BDD


require("bdd.php");

if (!empty($_POST['lastname']) AND !empty($_POST['firstname']) AND !empty($_POST['username']) AND !empty($_POST['password']) AND !empty($_POST['passwordConfirm']) AND !empty($_POST['question']) AND !empty($_POST['answer']))
{

// Ecriture de la requête
$sqlQuery = 'INSERT INTO user(lastname, firstname, username, password, question, anwser) VALUES (:firstname, :lastname, :username, :password, :question, :answer)';

// Préparation
$insertUser = $bdd->prepare($sqlQuery);

// inserer le user en bdd
$insertUser->execute([
    'lastname' => $_POST['lastname'],
    'firstname' => $_POST['firstname'],
    'username' => $_POST['username'],
    'password' => $_POST['password'],
    'question' => $_POST['question'],
    'answer' => $_POST['answer'],
]);
}
?>