<?php
include('config.php');
include('class/InfoMusee.php');
include('bootstrap.php');
$requeteInfoMusee = $bdd->query('select * from InfoMusee where idMusee=1');
$dnn3 = $requeteInfoMusee->fetchall(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE ,'InfoMusee');
?>

<!doctype html>
<html lang="fr">
    <head>
        <meta content="charset=utf-8" />
        <link href="style.css" rel="stylesheet" title="Style" />
        <title>Info Musee</title>
    </head>
    <body>
    	<div class="header">
        	<a href="<?php echo $url_home; ?>"><img src="images/logo.png" /></a>
	    </div>
        <div class="content">

<?php
//Si lutilisateur est connecte, on affiche le formulaire pour modifier les infos du musée
if(isset($_SESSION['username']))
{
?>
	
	<link rel="stylesheet" href="formoid_files/formoid1/formoid-solid-blue.css" type="text/css" />
	
	<form class="formoid-solid-blue" style="background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" method="post" action="actionInfoMusee.php"><div class="title"><h2>Informations du musée</h2></div>
	<div class="element-input"><label class="title">Nom du musée</label><div class="item-cont"><input class="large" type="text" name="inputNomMusee" placeholder="Nom" value="<?php echo $dnn3[0]->getNom() ?>"/><span class="icon-place"></span></div></div>
	<div class="element-input"><label class="title">Adresse</label><div class="item-cont"><input class="large" type="text" name="inputAdresse" placeholder="Adresse" value="<?php echo $dnn3[0]->getAdresse() ?>"/><span class="icon-place"></span></div></div>
	<div class="element-input"><label class="title">Ville</label><div class="item-cont"><input class="large" type="text" name="inputVille" placeholder="Ville" value="<?php echo $dnn3[0]->getVille() ?>"/><span class="icon-place"></span></div></div>
	<div class="element-input"><label class="title">Code Postal</label><div class="item-cont"><input class="large" type="text" name="inputCodePostal" placeholder="Code postal" value="<?php echo $dnn3[0]->getCodePostal() ?>"/><span class="icon-place"></span></div></div>
	<div class="element-input"><label class="title">Numéro de téléphone</label><div class="item-cont"><input class="large" type="text" name="inputNumTelephone" placeholder="Numéro de téléphone" value="<?php echo $dnn3[0]->getNumeroTel() ?>"/><span class="icon-place"></span></div></div>
	<div class="element-input"><label class="title">E-mail</label><div class="item-cont"><input class="large" type="text" name="inputEMail" placeholder="E-mail" value="<?php echo $dnn3[0]->getAdresseMail() ?>"/><span class="icon-place"></span></div></div>
	<div class="submit"><input type="submit" value="Mettre à jour"/></div></form>
	
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

