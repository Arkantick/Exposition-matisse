<?php
include('config.php');
?>
<!doctype html>
<html lang="fr">
    <head>
        <meta content="charset=utf-8" />
        <link href="style.css" rel="stylesheet" title="Style" />
        <title>Modifier ses informations personnelles</title>
    </head>
    <body>
    	<div class="header">
        	<a href="<?php echo $url_home; ?>"><img src="images/logo.png" /></a>
	    </div>
<?php
//On verifie si lutilisateur est connecte
if(isset($_SESSION['username']))
{
	//On verifie si le formulaire a ete envoye
	if(isset($_POST['username'], $_POST['password'], $_POST['passverif'], $_POST['email']))
	{
		//On verifie si le mot de passe et celui de la verification sont identiques
		if($_POST['password']==$_POST['passverif'])
		{
			//On verifie si le mot de passe a 6 caracteres ou plus
			if(strlen($_POST['password'])>=6)
			{
				//On verifie si lemail est valide
				if(preg_match('#^(([a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+\.?)*[a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+)@(([a-z0-9-_]+\.?)*[a-z0-9-_]+)\.[a-z]{2,}$#i',$_POST['email']))
				{
					$username = $_POST['username'];
					$password = $_POST['password'];
					$email = $_POST['email'];
					//On verifie sil ny a pas deja un utilisateur inscrit avec le pseudo choisis
					$requeteVerifExistUser = $bdd->prepare("select count(*) as nb from Users where login= :login ");
					$requeteVerifExistUser->bindParam(':login', $username);
					$requeteVerifExistUser->execute();
					$dn = $requeteVerifExistUser->fetch();
					
					//On verifie si le pseudo a ete modifie pour un autre et que celui-ci n'est pas deja utilise
					if($dn['nb']==0 or $_POST['username']==$_SESSION['username'])
					{
						//On modifie les informations de lutilisateur avec les nouvelles						
						$requetteModifieUser = $bdd->prepare("update Users set login= :login, motDePasse= :motDePasse, email= :email where idUser= :id ");
						$requetteModifieUser->bindParam(':login', $username);
						$requetteModifieUser->bindParam(':motDePasse', $password);
						$requetteModifieUser->bindParam(':email', $email);
						$requetteModifieUser->bindParam(':id', $_SESSION['userid']);
						$requetteModifieUser->execute();
						if($requetteModifieUser)
						{
							//Si ca a fonctionne, on naffiche pas le formulaire
							$form = false;
							//On supprime les sessions username et userid au cas ou il aurait modifie son pseudo
							unset($_SESSION['username'], $_SESSION['userid']);
?>
<div class="message">Vos informations ont bien été modififée. Vous devez vous reconnecter.<br />
<a href="connexion.php">Se connecter</a></div>
<?php
						}
						else
						{
							//Sinon on dit quil y a eu une erreur
							$form = true;
							$message = 'Une erreur est survenue lors des modifications.';
						}
					}
					else
					{
						//Sinon, on dit que le pseudo voulu est deja pris
						$form = true;
						$message = 'Un autre utilisateur utilise déjà le nom d\'utilisateur que vous désirez utiliser.';
					}
				}
				else
				{
					//Sinon, on dit que lemail nest pas valide
					$form = true;
					$message = 'L\'email que vous avez entr&eacute; n\'est pas valide.';
				}
			}
			else
			{
				//Sinon, on dit que le mot de passe nest pas assez long
				$form = true;
				$message = 'Le mot de passe que vous avez entr&eacute; contien moins de 6 caractères.';
			}
		}
		else
		{
			//Sinon, on dit que les mots de passes ne sont pas identiques
			$form = true;
			$message = 'Les mot de passe que vous avez entrés ne sont pas identiques.';
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
			echo '<strong>'.$message.'</strong>';
		}
		//Si le formulaire a deja ete envoye on recupere les donnes que lutilisateur avait deja insere
		if(isset($_POST['username'],$_POST['password'],$_POST['email']))
		{
			$username = htmlentities($_POST['username'], ENT_QUOTES, 'UTF-8');
			if($_POST['password']==$_POST['passverif'])
			{
				$password = htmlentities($_POST['password'], ENT_QUOTES, 'UTF-8');
			}
			else
			{
				$password = '';
			}
			$email = htmlentities($_POST['email'], ENT_QUOTES, 'UTF-8');
		}
		else
		{
			//Sinon, on affiche les donnes a partir de la base de donnee
			$requeteAffichage = $bdd->prepare("select login,motDePasse,email from Users where login= :login ");
			$requeteAffichage->bindParam(':login', $_SESSION['username']);
			$requeteAffichage->execute();	
			$dnn = $requeteAffichage->fetch();
			$username = $dnn['login'];
			$password = $dnn['motDePasse'];
			$email = $dnn['email'];
		}
		//On affiche le formulaire
?>
<div class="content">
    <form action="edit_infos.php" method="post">
        Vous pouvez modifier vos informations:<br />
        <div class="center">
            <label for="username">Nom d'utilisateur</label><input type="text" name="username" id="username" value="<?php echo $username; ?>" /><br />
            <label for="password">Mot de passe<span class="small">(6 caracteres min.)</span></label><input type="password" name="password" id="password" value="<?php echo $password; ?>" /><br />
            <label for="passverif">Mot de passe<span class="small">(verification)</span></label><input type="password" name="passverif" id="passverif" value="<?php echo $password; ?>" /><br />
            <label for="email">Email</label><input type="text" name="email" id="email" value="<?php echo $email; ?>" /><br />
            <br />
			<input type="submit" class="btn btn-primary" value="Envoyer" />
        </div>
    </form>
</div>
<?php
	}
}
else
{
?>
<div class="message">Pour accéder à cette page, vous devez être connecté.<br />
<a href="connexion.php">Se connecter</a></div>
<?php
}
?>
		<div class="foot"><a href="<?php echo $url_home; ?>">Retour à l'accueil</a></div>
	</body>
</html>