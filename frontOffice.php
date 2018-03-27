<?php
include('db.php');
include('backoffice/class/Artiste.php');
include('backoffice/class/Exposition.php');
include('backoffice/class/Oeuvres.php');
include('backoffice/class/InfoMusee.php');

$requeteArtiste = $bdd->query('select * from Artiste where idArtiste=1');
$dnn = $requeteArtiste->fetchall(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE ,'Artiste');

$requeteExposition = $bdd->query('select * from Exposition where idExposition=1');
$dnn1 = $requeteExposition->fetchall(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE ,'Exposition');

$requeteOeuvres = $bdd->query('select * from Oeuvres');
$dnn2 = $requeteOeuvres->fetchall(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE ,'Oeuvres');

$requeteInfoMusee = $bdd->query('select * from InfoMusee where idMusee=1');
$dnn3 = $requeteInfoMusee->fetchall(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE ,'InfoMusee');

?>
