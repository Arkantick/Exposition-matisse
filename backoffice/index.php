<?php
include('config.php')
?>
<!doctype html>
<html lang="fr">
    <head>
        <meta content="charset=utf-8" />
        <link href="style.css" rel="stylesheet" title="Style" />
        <title>BackOffice</title>
		
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">	
	
    </head>
    <body>
    	<div class="header">
        	<a href="<?php echo $url_home; ?>"><img src="images/logo.png" alt="Espace Membre" /></a>
	    </div>
        <div class="content">
<?php
//On affiche un message de bienvenue, si lutilisateur est connecte, on affiche son pseudo
?>
Bonjour<?php if(isset($_SESSION['username'])){echo ' '.htmlentities($_SESSION['username'], ENT_QUOTES, 'UTF-8');} ?>,<br />
Bienvenue dans le back office du site web de votre musée<br />

<?php
//Si lutilisateur est connecte, on lui propose de modifier certaiens infos du site
if(isset($_SESSION['username']))
{
	?>
	Cliquez sur le type d'informations que vous souhaitez modifier
	<br />
	<br />
	<a href="modifArtiste.php">Artiste</a><br /><br />
	<a href="modifExposition.php">Exposition</a><br /><br />
	<a href="modifOeuvres.php">Oeuvres</a><br /><br />
	<a href="modifInfoMusee.php">Information du musée</a><br /><br />
	<br/>
	<a href="edit_infos.php">Modifier vos informations de connexions</a><br /><br />
	<button type="button" class="btn btn-primary" onclick="location.href = 'connexion.php';">Se déconnecter</button>
	<?php
}
else
{
	//Sinon, on lui donne un lien pour se connecter
	?>
	<button type="button" class="btn btn-primary" onclick="location.href = 'connexion.php';">Se connecter</button>
	<?php
}
?>
		</div>
	</body>
</html>