<?php

//Connexion bdd
    try
    {
        $pdo_option [PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $bdd = new PDO('mysql:host=localhost;dbname=gbaf;charset=utf8', 'root', 'root',
        $pdo_option);
    }
    catch(Exception $e)
{
	// Erreur
        die('Erreur : '.$e->getMessage());
}
// Requete recup des données users
        $sqlQuery = 'SELECT * FROM users';
        $checkusers = $bdd->prepare($sqlQuery);
        $checkusers->execute();
        $users = $checkusers->fetchAll();
        
