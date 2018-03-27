<?php
include ("config.php");
if(isset($_POST['inputNomComplet'], $_POST['inputNomRaccourci'], $_POST['inputPrix'], $_POST['date_DateDebut'], $_POST['date_DateFin'], $_POST['inputResponsable'], $_POST['inputHeureOuverture'], $_POST['inputHeureFermeture'], $_POST['textareaNoteCommissaire']))
{
	//On modifie les informations avec les nouvelles
	$requetteModifieExposition = $bdd->prepare("update Exposition set nomComplet= :nomComplet, nomRaccourci= :nomRaccourci, prix= :prix, 
	dateDebut= :dateDebut, dateFin= :dateFin, responsable= :responsable, heureOuverture= :heureOuverture, 
	heureFermeture= :heureFermeture, noteCommissaire= :noteCommissaire where idExposition=1");
	$requetteModifieExposition->execute(array(':nomComplet' => $_POST['inputNomComplet'],
	':nomRaccourci' => $_POST['inputNomRaccourci'],
	':prix' => $_POST['inputPrix'],
	':dateDebut' => $_POST['date_DateDebut'],
	':dateFin' => $_POST['date_DateFin'],
	':responsable' => $_POST['inputResponsable'],
	':heureOuverture' => $_POST['inputHeureOuverture'],
	':heureFermeture' => $_POST['inputHeureFermeture'],
	':noteCommissaire' => $_POST['textareaNoteCommissaire']));
	header("Location:".  $_SERVER['HTTP_REFERER']);
}
else
	echo "probleme";
?>
