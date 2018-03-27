<?php
include('config.php');
?>
<!doctype html>
<html lang="fr">
    <head>
        <meta content="charset=utf-8" />
        <link href="style.css" rel="stylesheet" title="Style" />
        <title>Connection</title>
    </head>
    <body>
    	<div class="header">
        	<a href="<?php echo $url_home; ?>"><img src="images/logo.png" alt="Espace Membre" /></a>
	    </div>
<?php
//Si lutilisateur est connecte, on le deconecte
if(isset($_SESSION['username']))
{
	//On le deconecte en supprimant simplement les sessions username et userid
	unset($_SESSION['username'], $_SESSION['userid']);
	?>
	<div class="message">Vous avez bien été déconnecté.<br />
	<a href="<?php echo $url_home; ?>">Accueil</a></div>
	<?php
}
else
{
	$ousername = '';
	//On verifie si le formulaire a ete envoye
	if(isset($_POST['username'], $_POST['password']))
	{
		//On echappe les variables pour pouvoir les mettre dans des requetes SQL
		if(get_magic_quotes_gpc())
		{
			$ousername = stripslashes($_POST['username']);
			$username = stripslashes($_POST['username']);
			$password = stripslashes($_POST['password']);
		}
		else
		{
			$username = $_POST['username'];
			$password = $_POST['password'];
		}
		//On recupere le mot de passe de lutilisateur
		$requete = $bdd->query('select idUser,motDePasse from Users where login="'.$username.'"');
		$dn = $requete->fetch();
		
		//On le compare a celui quil a entre et on verifie si le membre existe
		if($dn['motDePasse'] == $password and $requete->columnCount()>0)
		{
			//Si le mot de passe es bon, on ne vas pas afficher le formulaire
			$form = false;
			//On enregistre son pseudo dans la session username et son identifiant dans la session userid
			$_SESSION['username'] = $_POST['username'];
			$_SESSION['userid'] = $dn['idUser'];
?>
<div class="message">Vous avez bien été connecté. Vous pouvez accéder au panel d'administration.<br />
<a href="<?php echo $url_home; ?>">Accueil</a></div>
<?php
		}
		else
		{
			//Sinon, on indique que la combinaison nest pas bonne
			$form = true;
			$message = 'La combinaison que vous avez entré n\'est pas bonne.';
		}
	}
	else
	{
		$form = true;
	}
	if($form)
	{
		//On affiche un message sil y a lieu
	if(isset($message))
	{
		echo '<div class="message">'.$message.'</div>';
	}
	//On affiche le formulaire
?>
<div class="content">
    <form action="connexion.php" method="post">
        Veuillez entrer vos identifiants pour vous connecter:<br />
        <div class="center">
            <label for="username">Nom d'utilisateur</label><input type="text" name="username" id="username" value="<?php echo htmlentities($ousername, ENT_QUOTES, 'UTF-8'); ?>" /><br />
            <label for="password">Mot de passe</label><input type="password" name="password" id="password" /><br />
			<br />
            <input type="submit" class="btn btn-primary" value="Connection" />
		</div>
    </form>
</div>
<?php
	}
}
?>
		<div class="foot"><a href="<?php echo $url_home; ?>">Retour à l'accueil</a> </div>
	</body>
</html>