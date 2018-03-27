<?php
//On demarre les sessions
session_start();

//On se connecte a la base de donnee
$bdd = new PDO('mysql:host=localhost;dbname=BackOffice;charset=utf8', 'root', 'Tom74');
$bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

//Nom du fichier de laccueil
$url_home = 'index.php';

// Afficher les erreurs à l'écran
ini_set('display_errors', 1);

?>