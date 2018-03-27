<?php
include ("config.php");
if(isset($_POST['inputPrenom'], $_POST['inputNom'], $_POST['textareaBiographie']))
{
	//On modifie les infos de l'artistes par les nouvelles
	$requetteModifieArtiste = $bdd->prepare("update Artiste set prenom = :prenom , nom= :nom , biographie= :biographie where idArtiste=1");
	$requetteModifieArtiste->execute(array(':prenom' => $_POST['inputPrenom'],
	':nom' => $_POST['inputNom'],
	':biographie' => $_POST['textareaBiographie']));
	
	$filename = $_FILES["file_Photo"]["name"];
	$pos = strrpos($filename, '.');
	$ext = substr($filename, $pos);
	$nouveauFichier = "photo_Biographie" . $ext;
	move_uploaded_file($_FILES['file_Photo']['tmp_name'], 'images/' . $nouveauFichier);
	header("location:".  $_SERVER['HTTP_REFERER']);
}
?>