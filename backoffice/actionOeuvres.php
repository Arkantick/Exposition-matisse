<?php
include ("config.php");
ini_set('display_errors', 1);
include('class/Oeuvres.php');

if(isset($_POST['inputNomOeuvre'], $_POST['inputAnnee'], $_POST['inputDimensions'], $_POST['inputTypePeinture'], $_POST['textareaDescription'], $_POST['inputCreditPhoto']) && $_POST['selectIDOeuvres'] != '-1')
{
	$nomPhoto = $_FILES["photo_Oeuvre"]["name"];
	$chemin = "images/oeuvres/{$nomPhoto}";
	
	//On modifie les informations avec les nouvelles (mise a jour d'une oeuvre)
	$requetteModifieOeuvres = $bdd->prepare("update Oeuvres set nom= :nom, dateOeuvre= :annee, dimensions= :dimensions, typePeinture= :typePeinture,
	description= :description, photoOeuvre= :photoOeuvre, creditPhoto= :creditPhoto where idOeuvre= :idOeuvre ");
	$requetteModifieOeuvres->execute(array(':nom' => $_POST['inputNomOeuvre'],
	':annee' => $_POST['inputAnnee'],
	':dimensions' => $_POST['inputDimensions'],
	':typePeinture' => $_POST['inputTypePeinture'],
	':description' => $_POST['textareaDescription'],
	':photoOeuvre' => $chemin,
	':creditPhoto' => $_POST['inputCreditPhoto'],
	':idOeuvre' => $_POST['selectIDOeuvres']));

	//echo $nomPhoto;
	//echo $chemin;
	move_uploaded_file($_FILES['photo_Oeuvre']['tmp_name'],$chemin);
	header("location:".  $_SERVER['HTTP_REFERER']); 
}

/*else if($_POST['selectIDOeuvres'] == '-1' && isset($_POST['inputNomOeuvre'], $_POST['inputAnnee'], $_POST['inputDimensions'], $_POST['inputTypePeinture'], $_POST['textareaDescription'], $_POST['inputCreditPhoto']) && $_POST['checkbox_Delete'] != '1')
{
	//ajoute la nouvelle oeuvre
	$nomPhoto = $_FILES["photo_Oeuvre"]["name"];
	$chemin = "images/oeuvres/{$nomPhoto}";
	$requetteAjouteOeuvres = $bdd->prepare("insert into Oeuvres VALUES (NULL, :nom, :annee, :dimensions, :typePeinture, :description, :photoOeuvre, :creditPhoto)");
	try
	{
	$requetteAjouteOeuvres->execute(array(':nom' => $_POST['inputNomOeuvre'],
	':annee' => $_POST['inputAnnee'],
	':dimensions' => $_POST['inputDimensions'],
	':typePeinture' => $_POST['inputTypePeinture'],
	':description' => $_POST['textareaDescription'],
	':photoOeuvre' => $nomPhoto,
	':creditPhoto' => $_POST['inputCreditPhoto']));
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}
	move_uploaded_file($_FILES['photo_Oeuvre']['tmp_name'],$chemin);
	header("location:".  $_SERVER['HTTP_REFERER']);
}*/
/*else if ($_POST['checkbox_Delete'] == '1' && $_POST['selectIDOeuvres'] != '-1')
{
	//on supprime l'oeuvre
	$requetteSupprimeOeuvre = $bdd->prepare("delete from Oeuvres where idOeuvre= :idOeuvre ");
	$requetteSupprimeOeuvre->bindParam(':idOeuvre',$_POST['selectIDOeuvres']);
	$requetteSupprimeOeuvre->execute();
	header("location:".  $_SERVER['HTTP_REFERER']); 
}*/
else
{
	header("location:".  $_SERVER['HTTP_REFERER']); 
}
?>