<?php
include('config.php');
include('class/Artiste.php');
include('bootstrap.php');
$requeteArtiste = $bdd->query('select * from Artiste');
$dnn1 = $requeteArtiste->fetchall(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE ,'Artiste');
?>

<!doctype html>
<html lang="fr">
    <head>
        <meta content="charset=utf-8" />
        <link href="style.css" rel="stylesheet" title="Style" />
        <title>Artiste</title>
    </head>
    <body>
    	<div class="header">
        	<a href="<?php echo $url_home; ?>"><img src="images/logo.png" /></a>
	    </div>
        <div class="content">

<?php
//Si lutilisateur est connecte, on lui affiche le formulaire pour modifier l'artiste
if(isset($_SESSION['username']))
{
?>	
	<link rel="stylesheet" href="formoid_files/formoid1/formoid-solid-blue.css" type="text/css" />
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
	
	<form enctype="multipart/form-data" class="formoid-solid-blue" style="background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" method="post" action="actionArtiste.php" ><div class="title"><h2>Informations sur l'artiste</h2></div>
		<div class="element-input" title="Prénom de l'artiste"><label class="title">Prénom de l'artiste</label><div class="item-cont"><input class="large" type="text" name="inputPrenom" id="inputPrenom" value="<?php echo $dnn1[0]->getPrenom() ?>" placeholder="Prénom"/><span class="icon-place"></span></div></div>
		<div class="element-input" title="Nom de l'artiste"><label class="title">Nom de l'artiste</label><div class="item-cont"><input class="large" type="text" name="inputNom" id="inputNom" value="<?php echo $dnn1[0]->getNom() ?>" placeholder="Nom"/><span class="icon-place"></span></div></div>
		<div class="element-file"><label class="title">Photo de l'auteur</label><div class="item-cont"><label class="large" ><div class="button">Choisissez une photo</div><input type="file" class="file_input" name="file_Photo" /><div class="file_text">Aucune photo sélectionné</div><span class="icon-place"></span></label></div></div>
		<div class="element-textarea"><label class="title">Biographie</label><div class="item-cont">
			<textarea class="ckeditor" name="textareaBiographie" cols="20" rows="5" placeholder="Biographie" ><?php echo $dnn1[0]->getBiographie() ?></textarea></div></div>
		<div class="submit">
		<input type="submit" value="Envoyer"/>
		</div>
	</form>
	
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

