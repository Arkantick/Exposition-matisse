<?php
include('config.php');
?>
<!doctype html>
<html lang="fr">
    <head>
        <meta content="charset=utf-8" />
        <link href="style.css" rel="stylesheet" title="Style" />
        <title>Liste des utilisateurs</title>
    </head>
    <body>
    	<div class="header">
        	<a href="<?php echo $url_home; ?>"><img src="images/logo.png" alt="Espace Membre" /></a>
	    </div>
        <div class="content">
Voici la liste des utilisateurs:
<table>
    <tr>
    	<th>Id</th>
    	<th>Nom d'utilisateur</th>
    	<th>Email</th>
    </tr>
<?php
//On recupere les identifiants, les pseudos et les emails des utilisateurs
$req = $bdd->query('select idUser, login, email from Users');
while($dnn = $req->fetch())
{
?>
	<tr>
    	<td class="left"><?php echo $dnn['idUser']; ?></td>
    	<td class="left"><a href="profile.php?id=<?php echo $dnn['idUser']; ?>"><?php echo htmlentities($dnn['login'], ENT_QUOTES, 'UTF-8'); ?></a></td>
    	<td class="left"><?php echo htmlentities($dnn['email'], ENT_QUOTES, 'UTF-8'); ?></td>
    </tr>
<?php
}
?>
</table>
		</div>
		<div class="foot"><a href="<?php echo $url_home; ?>">Retour à l'accueil</a></div>
	</body>
</html>