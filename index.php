<?php
include('db.php');
include('frontOffice.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Exposition 32 jours avec Matisse</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.min.css" rel="stylesheet">

</head>

<body id="page-top">
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"><?php echo $dnn1[0]->getNomRaccourci()?></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">Biographie</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Informations</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Galerie</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
					<li>
                        <a href="jeu/">Jeu</a>
                    </li>
                    <li>
                        <a href="index_ru.html"><img src="img/portfolio/flag_ru.png" alt="english version" title="English version"></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
				<hr width="100%">
                <h1 id="homeHeading"><?php echo $dnn1[0]->getNomComplet()?></h1>
				<hr width="100%">
				<p><b>AU MUSEE <?php echo $dnn3[0]->getNom()?></b></p>
                <!-- <p>En exclusivité au musée Khokho René-Corail du 2 janvier au 2 février 2017</p> -->
                <a data-toggle="modal" data-target="#comModal" class="btn btn-primary btn-xl page-scroll">Note du commissaire</a>
            </div>
        </div>
		
		<div class="project-credit text-faded">
		Galerie d'art du musée René-Corail<br/>
		Crédit photo : Cédric Margoulin
		</div>
		
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row" id="conteneur">
                <p><img id="portrait" src="backoffice\images\photo_Biographie.png" alt="portrait Matisse"></p>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading"><?php echo $dnn[0]->getPrenom() ?> <?php echo $dnn[0]->getNom() ?></h2>
                    <hr class="light">
					<?php echo $dnn[0]->getBiographie() ?>
                </div>
            </div>
        </div>
    </section>


    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Informations</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-eur text-primary sr-icons"></i>
                        <h3>Prix</h3>
                        <p class="text-muted">La visite coûte <?php echo $dnn1[0]->getPrix() ?> euros  </p>
						<p class="text-muted">Visite gratuite pour les moins de 25 ans</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-calendar text-primary sr-icons"></i>
                        <h3>Dates d'ouverture</h3>
                        <p class="text-muted">Du <?php echo $dnn1[0]->getDateDebut() ?> au <?php echo $dnn1[0]->getDateFin() ?> </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-clock-o text-primary sr-icons"></i>
                        <h3>Horaires d'ouverture</h3>
                        <p class="text-muted">Exposition accessible du lundi au vendredi de <?php echo $dnn1[0]->getHeureOuverture() ?> à <?php echo $dnn1[0]->getHeureFermeture() ?> au musée <?php echo $dnn3[0]->getNom()?>.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-user text-primary sr-icons"></i>
                        <h3>Responsable</h3>
                        <p class="text-muted">Commissaire de l'exposition : <?php echo $dnn1[0]->getResponsable() ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="no-padding" id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter popup-gallery">
                <div class="col-lg-4 col-sm-6">
                    <a href="backoffice/<?php echo $dnn2[0]->getPhotoOeuvre() ?>" class="portfolio-box" >
                        <img src="backoffice/<?php echo $dnn2[0]->getPhotoOeuvre() ?>"  alt="" >
                        <div class="portfolio-box-caption" id="image_1">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    <?php echo $dnn2[0]->getNom() ?>
                                </div>
                                <div class="project-name">
                                    <?php echo $dnn2[0]->getDateOeuvre() ?><br />
                                    <?php echo $dnn2[0]->getDimensions() ?><br />
                                    <?php echo $dnn2[0]->getTypePeinture() ?><br />
                                    <?php echo $dnn2[0]->getDescription() ?> 
                                </div>
                            </div>
							<div class="project-credit text-faded">
								Crédit photo : <?php echo $dnn2[0]->getCreditPhoto() ?>
							</div>
						</div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="backoffice/<?php echo $dnn2[1]->getPhotoOeuvre() ?>" class="portfolio-box" >
                        <img src="backoffice/<?php echo $dnn2[1]->getPhotoOeuvre() ?>" alt="" >
                        <div class="portfolio-box-caption" id="image_2">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    <?php echo $dnn2[1]->getNom() ?>
                                </div>
                                <div class="project-name">
                                    <?php echo $dnn2[1]->getDateOeuvre() ?><br />
                                    <?php echo $dnn2[1]->getDimensions() ?><br />
                                    <?php echo $dnn2[1]->getTypePeinture() ?><br />
                                    <?php echo $dnn2[1]->getDescription() ?> 
                                </div>
                            </div>
							<div class="project-credit text-faded">
								Crédit photo : <?php echo $dnn2[1]->getCreditPhoto() ?>
							</div>
						</div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="backoffice/<?php echo $dnn2[2]->getPhotoOeuvre() ?>" class="portfolio-box" >
                        <img src="backoffice/<?php echo $dnn2[2]->getPhotoOeuvre() ?>"  alt="" >
                        <div class="portfolio-box-caption" id="image_3">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    <?php echo $dnn2[2]->getNom() ?>
                                </div>
                                <div class="project-name">
                                    <?php echo $dnn2[2]->getDateOeuvre() ?><br />
                                    <?php echo $dnn2[2]->getDimensions() ?><br />
                                    <?php echo $dnn2[2]->getTypePeinture() ?><br />
                                    <?php echo $dnn2[2]->getDescription() ?> 
                                </div>
                            </div>
							<div class="project-credit text-faded">
								Crédit photo : <?php echo $dnn2[2]->getCreditPhoto() ?>
							</div>
						</div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="backoffice/<?php echo $dnn2[3]->getPhotoOeuvre() ?>" class="portfolio-box" >
                        <img src="backoffice/<?php echo $dnn2[3]->getPhotoOeuvre() ?>" alt="" >
                        <div class="portfolio-box-caption" id="image_4">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    <?php echo $dnn2[3]->getNom() ?>
                                </div>
                                <div class="project-name">
                                    <?php echo $dnn2[3]->getDateOeuvre() ?><br />
                                    <?php echo $dnn2[3]->getDimensions() ?><br />
                                    <?php echo $dnn2[3]->getTypePeinture() ?><br />
                                    <?php echo $dnn2[3]->getDescription() ?> 
                                </div>
                            </div>
							<div class="project-credit text-faded">
								Crédit photo : <?php echo $dnn2[3]->getCreditPhoto() ?>
							</div>
						</div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="backoffice/<?php echo $dnn2[4]->getPhotoOeuvre() ?>" class="portfolio-box" >
                        <img src="backoffice/<?php echo $dnn2[4]->getPhotoOeuvre() ?>" alt="" >
                        <div class="portfolio-box-caption" id="image_5">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    <?php echo $dnn2[4]->getNom() ?>
                                </div>
                                <div class="project-name">
                                    <?php echo $dnn2[4]->getDateOeuvre() ?><br />
                                    <?php echo $dnn2[4]->getDimensions() ?><br />
                                    <?php echo $dnn2[4]->getTypePeinture() ?><br />
                                    <?php echo $dnn2[4]->getDescription() ?> 
                                </div>
                            </div>
							<div class="project-credit text-faded">
								Crédit photo : <?php echo $dnn2[4]->getCreditPhoto() ?>
							</div>
						</div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="backoffice/<?php echo $dnn2[5]->getPhotoOeuvre() ?>" class="portfolio-box" >
                        <img src="backoffice/<?php echo $dnn2[5]->getPhotoOeuvre() ?>" alt="" >
                        <div class="portfolio-box-caption" id="image_6">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    <?php echo $dnn2[5]->getNom() ?>
                                </div>
                                <div class="project-name">
                                    <?php echo $dnn2[5]->getDateOeuvre() ?><br />
                                    <?php echo $dnn2[5]->getDimensions() ?><br />
                                    <?php echo $dnn2[5]->getTypePeinture() ?><br />
                                    <?php echo $dnn2[5]->getDescription() ?> 
                                </div>
                            </div>
							<div class="project-credit text-faded">
								Crédit photo : <?php echo $dnn2[5]->getCreditPhoto() ?>
							</div>
						</div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Coordonnées</h2>
                    <hr class="primary">
                    <p>Pour plus d'informations, n'hésitez pas à nous contacter</p>
                </div>
				<div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p><a href="mailto:your-email@your-domain.com"><?php echo $dnn3[0]->getAdresseMail()?></a></p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center" style="margin-left:0px">
                    <i class="fa fa-phone fa-3x sr-contact"></i>
                    <p><?php echo $dnn3[0]->getNumeroTel() ?></p>
                </div>
				<div id="test2" class="col-lg-4 text-center">
					<a data-toggle="modal" data-target=".modalGoogleMap"> <i class="fa fa-map-marker fa-3x sr-contact"> </i> <p><?php echo $dnn3[0]->getAdresse(). ', ' .$dnn3[0]->getCodePostal(). ', ' .$dnn3[0]->getVille() ?></p></a>    
                </div>
								
				<div class="modal fade modalGoogleMap" role="dialog">
					<div class="modal-dialog modal-lg">
						<!-- <div class="modal-content"> -->
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2776.9735056953386!2d6.120317915946271!3d45.89184297910827!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478b8ffe10e29221%3A0x2633c95bbb2705e2!2sSaint+Michel+Annecy!5e0!3m2!1sfr!2sfr!4v1480348253038" width="900" height="800" frameborder="0" align="middle" class="map" allowfullscreen></iframe>
						<!-- </div> -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                        </div>
					</div>
				</div>	
				
            </div>
        </div>
    </section>
	
<nav class="navbar navbar-default text-center">
  <div class="container">
    <p>Musée <?php echo $dnn3[0]->getNom() ?> © <?php echo date("Y"); ?> | <a data-toggle="modal" data-target="#myModal"> Mentions Légales</a> </p>   
  </div>
</nav>


  <div class="modal fade" id="comModal"  role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Note du commissaire</h4>
        </div>
        <div class="modal-body">
            <?php echo $dnn1[0]->getNoteCommissaire() ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade" id="myModal"  role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Mentions légales</h4>
        </div>
        <div class="modal-body">
          <h3>1. Conditions générales d’utilisation du site et des services proposés.</h3>
			<p>L’utilisation du site 
			<a href="http://http://www.32-Jours-Avec-Matisse.com/" title="Musée - http://www.32-Jours-Avec-Matisse.com">http://www.32-Jours-Avec-Matisse.com</a>
			 implique l’acceptation pleine et entière des conditions générales d’utilisation ci-après décrites. Ces conditions d’utilisation sont susceptibles d’être modifiées ou complétées à tout moment, les utilisateurs du site 
			 <a href="http://http://www.32-Jours-Avec-Matisse.com/" title="Musée - http://www.32-Jours-Avec-Matisse.com">http://www.32-Jours-Avec-Matisse.com</a>
			  sont donc invités à les consulter de manière régulière.</p>

			<p>Ce site est normalement accessible à tout moment aux utilisateurs. Une interruption pour raison de maintenance technique peut être toutefois décidée par Musée, qui s’efforcera alors de communiquer préalablement aux utilisateurs les dates et heures de l’intervention.</p>

			<p>Le site 
			<a href="http://http://www.32-Jours-Avec-Matisse.com/" title="Musée - http://www.32-Jours-Avec-Matisse.com">http://www.32-Jours-Avec-Matisse.com</a>
			 est mis à jour régulièrement par Cédric. De la même façon, les mentions légales peuvent être modifiées à tout moment : elles s’imposent néanmoins à l’utilisateur qui est invité à s’y référer le plus souvent possible afin d’en prendre connaissance.</p>



		<h3>2. Description des services fournis.</h3>
			<p>Le site 
			<a href="http://http://www.32-Jours-Avec-Matisse.com/" title="Musée - http://www.32-Jours-Avec-Matisse.com">http://www.32-Jours-Avec-Matisse.com</a>
			 a pour objet de fournir une information concernant l’ensemble des activités de la société.</p>

			<p>Musée s’efforce de fournir sur le site 
			<a href="http://http://www.32-Jours-Avec-Matisse.com/" title="Musée - http://www.32-Jours-Avec-Matisse.com">http://www.32-Jours-Avec-Matisse.com</a>
			 des informations aussi précises que possible. Toutefois, il ne pourra être tenue responsable des omissions, des inexactitudes et des carences dans la mise à jour, qu’elles soient de son fait ou du fait des tiers partenaires qui lui fournissent ces informations.</p>

			<p>Tous les informations indiquées sur le site 
			<a href="http://http://www.32-Jours-Avec-Matisse.com/" title="Musée - http://www.32-Jours-Avec-Matisse.com">http://www.32-Jours-Avec-Matisse.com</a>
			 sont données à titre indicatif, et sont susceptibles d’évoluer. Par ailleurs, les renseignements figurant sur le site 
			 <a href="http://http://www.32-Jours-Avec-Matisse.com/" title="Musée - http://www.32-Jours-Avec-Matisse.com">http://www.32-Jours-Avec-Matisse.com</a>
			  ne sont pas exhaustifs. Ils sont donnés sous réserve de modifications ayant été apportées depuis leur mise en ligne.</p>



		<h3>3. Limitations contractuelles sur les données techniques.</h3>
			<p>Le site utilise la technologie JavaScript.</p>

			<p>Le site Internet ne pourra être tenu responsable de dommages matériels liés à l’utilisation du site. De plus, l’utilisateur du site s’engage à accéder au site en utilisant un matériel récent, ne contenant pas de virus et avec un navigateur de dernière génération mis-à-jour</p>
		<h3>4. Propriété intellectuelle et contrefaçons.</h3>
			<p>Musée est propriétaire des droits de propriété intellectuelle ou détient les droits d’usage sur tous les éléments accessibles sur le site, notamment les textes, images, graphismes, logo, icônes, sons, logiciels.</p>
			<p>Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de : Musée.</p>
			<p>Toute exploitation non autorisée du site ou de l’un quelconque des éléments qu’il contient sera considérée comme constitutive d’une contrefaçon et poursuivie conformément aux dispositions des articles L.335-2 et suivants du Code de Propriété Intellectuelle.</p>

		<h3>5. Limitations de responsabilité.</h3>
			<p>Musée ne pourra être tenue responsable des dommages directs et indirects causés au matériel de l’utilisateur, lors de l’accès au site http://www.32-Jours-Avec-Matisse.com, et résultant soit de l’utilisation d’un matériel ne répondant pas aux spécifications indiquées au point 4, soit de l’apparition d’un bug ou d’une incompatibilité.</p>
			<p>Musée ne pourra également être tenue responsable des dommages indirects (tels par exemple qu’une perte de marché ou perte d’une chance) consécutifs à l’utilisation du site <a href="http://http://www.32-Jours-Avec-Matisse.com/" title="Musée - http://www.32-Jours-Avec-Matisse.com">http://www.32-Jours-Avec-Matisse.com</a>.</p>
			<p>Des espaces interactifs (possibilité de poser des questions dans l’espace contact) sont à la disposition des utilisateurs. Musée se réserve le droit de supprimer, sans mise en demeure préalable, tout contenu déposé dans cet espace qui contreviendrait à la législation applicable en France, en particulier aux dispositions relatives à la protection des données. Le cas échéant, Musée se réserve également la possibilité de mettre en cause la responsabilité civile et/ou pénale de l’utilisateur, notamment en cas de message à caractère raciste, injurieux, diffamant, ou pornographique, quel que soit le support utilisé (texte, photographie…).</p>

		<h3>6. Gestion des données personnelles.</h3>
			<p>En France, les données personnelles sont notamment protégées par la loi n° 78-87 du 6 janvier 1978, la loi n° 2004-801 du 6 août 2004, l'article L. 226-13 du Code pénal et la Directive Européenne du 24 octobre 1995.</p>
			<p>A l'occasion de l'utilisation du site <a href="http://http://www.32-Jours-Avec-Matisse.com/" title="Musée - http://www.32-Jours-Avec-Matisse.com">http://www.32-Jours-Avec-Matisse.com</a>, peuvent êtres recueillies : l'URL des liens par l'intermédiaire desquels l'utilisateur a accédé au site <a href="http://http://www.32-Jours-Avec-Matisse.com/" title="Musée - http://www.32-Jours-Avec-Matisse.com">http://www.32-Jours-Avec-Matisse.com</a>, le fournisseur d'accès de l'utilisateur, l'adresse de protocole Internet (IP) de l'utilisateur.</p>
			<p> En tout état de cause Musée ne collecte des informations personnelles relatives à l'utilisateur que pour le besoin de certains services proposés par le site <a href="http://http://www.32-Jours-Avec-Matisse.com/" title="Musée - http://www.32-Jours-Avec-Matisse.com">http://www.32-Jours-Avec-Matisse.com</a>. L'utilisateur fournit ces informations en toute connaissance de cause, notamment lorsqu'il procède par lui-même à leur saisie. Il est alors précisé à l'utilisateur du site <a href="http://http://www.32-Jours-Avec-Matisse.com/" title="Musée - http://www.32-Jours-Avec-Matisse.com">http://www.32-Jours-Avec-Matisse.com</a> l’obligation ou non de fournir ces informations.</p>
			<p>Conformément aux dispositions des articles 38 et suivants de la loi 78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers et aux libertés, tout utilisateur dispose d’un droit d’accès, de rectification et d’opposition aux données personnelles le concernant, en effectuant sa demande écrite et signée, accompagnée d’une copie du titre d’identité avec signature du titulaire de la pièce, en précisant l’adresse à laquelle la réponse doit être envoyée.</p>
			<p>Aucune information personnelle de l'utilisateur du site <a href="http://http://www.32-Jours-Avec-Matisse.com/" title="Musée - http://www.32-Jours-Avec-Matisse.com">http://www.32-Jours-Avec-Matisse.com</a> n'est publiée à l'insu de l'utilisateur, échangée, transférée, cédée ou vendue sur un support quelconque à des tiers. Seule l'hypothèse du rachat de Musée et de ses droits permettrait la transmission des dites informations à l'éventuel acquéreur qui serait à son tour tenu de la même obligation de conservation et de modification des données vis à vis de l'utilisateur du site <a href="http://http://www.32-Jours-Avec-Matisse.com/" title="Musée - http://www.32-Jours-Avec-Matisse.com">http://www.32-Jours-Avec-Matisse.com</a>.</p>
			<p>Le site n'est pas déclaré à la CNIL car il ne recueille pas d'informations personnelles.</p>
			<p>Les bases de données sont protégées par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative à la protection juridique des bases de données.</p>

		<h3>7. Liens hypertextes et cookies.</h3>
			<p>Le site <a href="http://http://www.32-Jours-Avec-Matisse.com/" title="Musée - http://www.32-Jours-Avec-Matisse.com">http://www.32-Jours-Avec-Matisse.com</a> contient un certain nombre de liens hypertextes vers d’autres sites, mis en place avec l’autorisation de Musée. Cependant, Musée n’a pas la possibilité de vérifier le contenu des sites ainsi visités, et n’assumera en conséquence aucune responsabilité de ce fait.</p>
			<p>La navigation sur le site <a href="http://http://www.32-Jours-Avec-Matisse.com/" title="Musée - http://www.32-Jours-Avec-Matisse.com">http://www.32-Jours-Avec-Matisse.com</a> est susceptible de provoquer l’installation de cookie(s) sur l’ordinateur de l’utilisateur. Un cookie est un fichier de petite taille, qui ne permet pas l’identification de l’utilisateur, mais qui enregistre des informations relatives à la navigation d’un ordinateur sur un site. Les données ainsi obtenues visent à faciliter la navigation ultérieure sur le site, et ont également vocation à permettre diverses mesures de fréquentation.</p>
			<p>Le refus d’installation d’un cookie peut entraîner l’impossibilité d’accéder à certains services. L’utilisateur peut toutefois configurer son ordinateur de la manière suivante, pour refuser l’installation des cookies :</p>
			<p>Sous Internet Explorer : onglet outil (pictogramme en forme de rouage en haut a droite) / optio
			<p>Sous Firefox : en haut de la fenêtre du navigateur, cliquez sur le bouton Firefox, puis aller dans l'onglet Options. Cliquer sur l'onglet Vie privée. Paramétrez les Règles de conservation sur : utiliser les paramètres personnalisés pour l'historique. Enfin décochez-la pour désactiver les cookies.</p>
			<p>Sous Safari : Cliquez en haut à droite du navigateur sur le pictogramme de menu (symbolisé par un rouage). Sélectionnez Paramètres. Cliquez sur Afficher les paramètres avancés. Dans la section "Confidentialité", cliquez sur Paramètres de contenu. Dans la section "Cookies", vous pouvez bloquer les cookies.</p>
			<p>Sous Chrome : Cliquez en haut à droite du navigateur sur le pictogramme de menu (symbolisé par trois lignes horizontales). Sélectionnez Paramètres. Cliquez sur Afficher les paramètres avancés. Dans la section "Confidentialité", cliquez sur préférences. Dans l'onglet "Confidentialité", vous pouvez bloquer les cookies.</p>

		<h3>8. Droit applicable et attribution de juridiction.</h3>
			<p>Tout litige en relation avec l’utilisation du site <a href="http://http://www.32-Jours-Avec-Matisse.com/" title="Musée - http://www.32-Jours-Avec-Matisse.com">http://www.32-Jours-Avec-Matisse.com</a> est soumis au droit français. Il est fait attribution exclusive de juridiction aux tribunaux compétents de Paris.</p>

		<h3>9. Les principales lois concernées.</h3>
			<p>Loi n° 78-17 du 6 janvier 1978, notamment modifiée par la loi n° 2004-801 du 6 août 2004 relative à l'informatique, aux fichiers et aux libertés.</p>
			<p> Loi n° 2004-575 du 21 juin 2004 pour la confiance dans l'économie numérique.</p>
		
		<h3>10. Lexique.</h3>
			<p>Utilisateur : Internaute se connectant, utilisant le site susnommé.</p>
			<p>Informations personnelles : « les informations qui permettent, sous quelque forme que ce soit, directement ou non, l'identification des personnes physiques auxquelles elles s'appliquent » (article 4 de la loi n° 78-17 du 6 janvier 1978).</p>	
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
        </div>
      </div>
    </div>
  </div>


    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>

</body>

</html>
