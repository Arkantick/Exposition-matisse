<?php
include ("config.php");
if(isset($_POST['inputNomMusee'], $_POST['inputAdresse'], $_POST['inputVille'], $_POST['inputCodePostal'], $_POST['inputNumTelephone'], $_POST['inputEMail']))
{
	//On modifie les informations avec les nouvelles
	$requetteModifieInfoMusee = $bdd->prepare("update InfoMusee set nom= :nom , adresse= :adresse , ville= :ville , 
	codePostal= :codePostal , numeroTel= :numeroTel , adresseMail= :adresseMail where idMusee=1 ");

	$requetteModifieInfoMusee->execute(array(':nom' => $_POST['inputNomMusee'],
	':adresse' => $_POST['inputAdresse'],
	':ville' => $_POST['inputVille'],
	':codePostal' => $_POST['inputCodePostal'],
	':numeroTel' => $_POST['inputNumTelephone'],
	':adresseMail' => $_POST['inputEMail']));
	header("location:".  $_SERVER['HTTP_REFERER']);
}
?>