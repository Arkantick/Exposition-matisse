<?php
include('config.php');
include('class/Exposition.php');
include('bootstrap.php');
$requeteExposition = $bdd->query('select * from Exposition');
$dnn = $requeteExposition->fetchall(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE ,'Exposition');
?>

<!doctype html>
<html lang="fr">
    <head>
        <meta content="charset=utf-8" />
        <link href="style.css" rel="stylesheet" title="Style" />
        <title>Exposition</title>
    </head>
    <body>
    	<div class="header">
        	<a href="<?php echo $url_home; ?>"><img src="images/logo.png" /></a>
	    </div>
        <div class="content">

<?php
//Si lutilisateur est connecte, on lui affiche le formulaire pour modifier l'exposition
if(isset($_SESSION['username']))
{
?>	
	<link rel="stylesheet" href="formoid_files/formoid1/formoid-solid-blue.css" type="text/css" />

	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
	
	<form class="formoid-solid-blue" style="background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" method="post" action="actionExposition.php"><div class="title"><h2>Informations sur l'expo</h2></div>
	<div class="element-input" title="Nom complet de l'exposition"><label class="title">Nom Complet de l'exposition</label><div class="item-cont"><input class="large" type="text" name="inputNomComplet" value="<?php echo $dnn[0]->getNomComplet(); ?>" placeholder="Nom complet"/><span class="icon-place"></span></div></div>
	<div class="element-input" title="Nom raccourci de l'exposition"><label class="title">Nom raccourci de l'exposition</label><div class="item-cont"><input class="large" type="text" name="inputNomRaccourci" value="<?php echo $dnn[0]->getNomRaccourci(); ?>" placeholder="Nom raccourci"/><span class="icon-place"></span></div></div>
	<div class="element-input" title="Prix de l'exposition"><label class="title">Prix de l'exposition</label><div class="item-cont"><input class="large" type="text" name="inputPrix" value="<?php echo $dnn[0]->getPrix(); ?>" placeholder="Prix"/><span class="icon-place"></span></div></div>
	<div class="element-date" title="Date de début de l'exposition">Date de début de l'exposition<label class="title"></label><div class="item-cont"><input class="large" type="date" name="date_DateDebut" value="<?php echo $dnn[0]->getDateDebut();?>" /><span class="icon-place"></span></div></div>
	<div class="element-date" title="Date de fin de l'exposition">Date de fin de l'exposition<label class="title"></label><div class="item-cont"><input class="large" type="date" name="date_DateFin" value="<?php echo $dnn[0]->getDateFin(); ?>" /><span class="icon-place"></span></div></div>
	<div class="element-input" title="Responsable de l'exposition">Responsable de l'exposition<label class="title"></label><div class="item-cont"><input class="large" type="text" name="inputResponsable" value="<?php echo $dnn[0]->getResponsable(); ?>" placeholder="Nom du responsable"/><span class="icon-place"></span></div></div>
	<div class="element-input" title="Horaires d'ouverture de l'exposition"><label class="title">Horaires d'ouverture</label><div class="item-cont"><input class="large" type="text" name="inputHeureOuverture" value="<?php echo $dnn[0]->getHeureOuverture(); ?>" placeholder="Horaires d'ouverture"/><span class="icon-place"></span></div></div>
	<div class="element-input" title="Horaires de fermeture de l'exposition"><label class="title">Horaires de fermeture</label><div class="item-cont"><input class="large" type="text" name="inputHeureFermeture" value="<?php echo $dnn[0]->getHeureFermeture(); ?>" placeholder="Horaires de fermeture"/><span class="icon-place"></span></div></div>
	<div class="element-textarea"><label class="title">Note du commissaire</label><div class="item-cont"><textarea class="ckeditor" name="textareaNoteCommissaire" cols="20" rows="5" placeholder="Note du commissaire" id="editor1" ><?php echo $dnn[0]->getNoteCommissaire();?></textarea></div></div>
	<div class="submit">
	<input type="submit" value="Envoyer"/></div></form>
	
	<button type="button" class="btn btn-primary" onclick="location.href = 'index.php';">Retour</button>

	<?php
}
else
{
	//Sinon, on lui donne un lien pour se connecter
	?>
	<a href="connexion.php">Se connecter</a>
	<?php
}
?>
		</div>
	</body>
</html>

