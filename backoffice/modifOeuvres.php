<?php
include('config.php');
include('class/Oeuvres.php');
//include('bootstrap.php');
$requetteIdOeuvre = $bdd->query('SELECT idOeuvre FROM Oeuvres');

$requeteOeuvres = $bdd->query('select * from Oeuvres');
$dnn2 = $requeteOeuvres->fetchall(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE ,'Oeuvres');
?>

<!doctype html>
<html lang="fr">
    <head>
        <meta content="charset=utf-8" />
        <link href="style.css" rel="stylesheet" title="Style" />
        <title>Oeuvres</title>
    </head>
    <body>
    	<div class="header">
        	<a href="<?php echo $url_home; ?>"><img src="images/logo.png" /></a>
	    </div>
        <div class="content">

<?php
//Si lutilisateur est connecte, on lui affiche le formulaire pour modifier les oeuvres
if(isset($_SESSION['username']))
{
?>
	<link rel="stylesheet" href="formoid_files/formoid1/formoid-solid-blue.css" type="text/css" />
	<script type="text/javascript" src="formoid_files/formoid1/jquery.min.js"></script>
	<script type="text/javascript" src="formoid_files/formoid1/formoid-solid-blue.js"></script>
	
<form enctype="multipart/form-data" class="formoid-solid-blue" style="background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" method="post" action="actionOeuvres.php" ><div class="title"><h2>Oeuvres</h2></div>
	<div class="element-select">
		<label class="title">Id de l'oeuvre</label>
			<div class="item-cont">
			<div class="large">
				<span>
				<select id="selectIDOeuvres" name="selectIDOeuvres" >
				
				<?php 
				while ($donnees = $requetteIdOeuvre->fetch())
				{
				?>
					<option value="<?php echo $donnees['idOeuvre']; ?>">Oeuvre n°<?php echo $donnees['idOeuvre']?> </option>
				<?php
				}
				?>
				</select>
				<span class="icon-place"></span></span>
				</div>
			</div>
	</div>
	<div class="element-input"><label class="title">Nom de l'oeuvre</label><div class="item-cont"><input class="large" type="text" id="inputNomOeuvre" name="inputNomOeuvre" placeholder="Nom" value="<?php echo $dnn2[0]->getNom() ?>"/><span class="icon-place"></span></div></div>
	<div class="element-input"><label class="title">Année de production</label><div class="item-cont"><input class="large" type="text" id="inputAnnee" name="inputAnnee" placeholder="Année" value="<?php echo $dnn2[0]->getDateOeuvre() ?>"/><span class="icon-place"></span></div></div>
	<div class="element-input"><label class="title">Dimensions</label><div class="item-cont"><input class="large" type="text" id="inputDimensions" name="inputDimensions" placeholder="Dimensions" value="<?php echo $dnn2[0]->getDimensions() ?>"/><span class="icon-place"></span></div></div>
	<div class="element-input"><label class="title">Type de peinture</label><div class="item-cont"><input class="large" type="text" id="inputTypePeinture" name="inputTypePeinture" placeholder="Type de peinture" value="<?php echo $dnn2[0]->getTypePeinture() ?>"/><span class="icon-place"></span></div></div>
	<div class="element-textarea"><label class="title">Description</label><div class="item-cont"><textarea class="medium" id="textareaDescription" name="textareaDescription" cols="20" rows="5" placeholder="Description" value="<?php echo $dnn2[0]->getDescription() ?>"></textarea><span class="icon-place"></span></div></div>
	<div class="element-file"><label class="title">Photo de l'oeuvre</label><div class="item-cont"><label class="large" ><div class="button">Sélectionner une photo</div><input type="file" class="file_input" name="photo_Oeuvre" /><div class="file_text">Aucune photo sélectionné</div><span class="icon-place"></span></label></div></div>
	<div class="element-input"><label class="title">Crédit photo</label><div class="item-cont"><input class="large" type="text" id="inputCreditPhoto" name="inputCreditPhoto" placeholder="Crédit photo" value="<?php echo $dnn2[0]->getCreditPhoto() ?>"/><span class="icon-place"></span></div></div>
	
	<div class="submit"><input type="submit" value="Valider"/>
</div></form>

<script type="text/javascript">
    $(document).on("change", "#selectIDOeuvres", function(){
        var value = $(this).val(); 
        if(value == '0')
        {
			document.getElementById("inputNomOeuvre").value = '<?php echo $dnn2[0]->getNom() ?>';
			document.getElementById("inputAnnee").value = '<?php echo $dnn2[0]->getDateOeuvre() ?>';
			document.getElementById("inputDimensions").value = '<?php echo $dnn2[0]->getDimensions() ?>';
			document.getElementById("inputTypePeinture").value = '<?php echo $dnn2[0]->getTypePeinture() ?>';
			document.getElementById("textareaDescription").value = '<?php echo $dnn2[0]->getDescription() ?>';
			document.getElementById("inputCreditPhoto").value = '<?php echo $dnn2[0]->getCreditPhoto() ?>';
        }
		else if(value == '1')
		{
			document.getElementById("inputNomOeuvre").value = "<?php echo $dnn2[1]->getNom() ?>";
			document.getElementById("inputAnnee").value = "<?php echo $dnn2[1]->getDateOeuvre() ?>";
			document.getElementById("inputDimensions").value = '<?php echo $dnn2[0]->getDimensions() ?>';
			document.getElementById("inputTypePeinture").value = "<?php echo $dnn2[1]->getTypePeinture() ?>";
			document.getElementById("textareaDescription").value = "<?php echo $dnn2[1]->getDescription() ?>";
			document.getElementById("inputCreditPhoto").value = "<?php echo $dnn2[1]->getCreditPhoto() ?>";
		}
		else if(value == '2')
		{
			document.getElementById("inputNomOeuvre").value = "<?php echo $dnn2[2]->getNom() ?>";
			document.getElementById("inputAnnee").value = "<?php echo $dnn2[2]->getDateOeuvre() ?>";
			document.getElementById("inputDimensions").value = '<?php echo $dnn2[0]->getDimensions() ?>';
			document.getElementById("inputTypePeinture").value = "<?php echo $dnn2[2]->getTypePeinture() ?>";
			document.getElementById("textareaDescription").value = "<?php echo $dnn2[2]->getDescription() ?>";
			document.getElementById("inputCreditPhoto").value = "<?php echo $dnn2[2]->getCreditPhoto() ?>";
		}
		else if(value == '3')
		{
			document.getElementById("inputNomOeuvre").value = "<?php echo $dnn2[3]->getNom() ?>";
			document.getElementById("inputAnnee").value = "<?php echo $dnn2[3]->getDateOeuvre() ?>";
			document.getElementById("inputDimensions").value = '<?php echo $dnn2[0]->getDimensions() ?>';
			document.getElementById("inputTypePeinture").value = "<?php echo $dnn2[3]->getTypePeinture() ?>";
			document.getElementById("textareaDescription").value = "<?php echo $dnn2[3]->getDescription() ?>";
			document.getElementById("inputCreditPhoto").value = "<?php echo $dnn2[3]->getCreditPhoto() ?>";
		}
		else if(value == '4')
		{
			document.getElementById("inputNomOeuvre").value = "<?php echo $dnn2[4]->getNom() ?>";
			document.getElementById("inputAnnee").value = "<?php echo $dnn2[4]->getDateOeuvre() ?>";
			document.getElementById("inputDimensions").value = '<?php echo $dnn2[0]->getDimensions() ?>';
			document.getElementById("inputTypePeinture").value = "<?php echo $dnn2[4]->getTypePeinture() ?>";
			document.getElementById("textareaDescription").value = "<?php echo $dnn2[4]->getDescription() ?>";
			document.getElementById("inputCreditPhoto").value = "<?php echo $dnn2[4]->getCreditPhoto() ?>";
		}
		else if(value == '5')
		{
			document.getElementById("inputNomOeuvre").value = "<?php echo $dnn2[5]->getNom() ?>";
			document.getElementById("inputAnnee").value = "<?php echo $dnn2[5]->getDateOeuvre() ?>";
			document.getElementById("inputDimensions").value = '<?php echo $dnn2[0]->getDimensions() ?>';
			document.getElementById("inputTypePeinture").value = "<?php echo $dnn2[5]->getTypePeinture() ?>";
			document.getElementById("textareaDescription").value = "<?php echo $dnn2[5]->getDescription() ?>";
			document.getElementById("inputCreditPhoto").value = "<?php echo $dnn2[5]->getCreditPhoto() ?>";
		}
        else 
        {
			document.getElementById("inputNomOeuvre").value = "";
			document.getElementById("inputAnnee").value = "";
			document.getElementById("inputDimensions").value = "";
			document.getElementById("inputTypePeinture").value = "";
			document.getElementById("textareaDescription").value = "";
			document.getElementById("inputCreditPhoto").value = "";
        }
    });
</script>
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

