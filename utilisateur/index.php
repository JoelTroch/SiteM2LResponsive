<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="Site intranet pour la réservation des salles de la Maison des Ligues de Lorraine" />
		<meta name="author" content="netEmedia" />
		<title>Site intranet M2L - Accueil utilisateur</title>
		<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
		<link href="../css/bootstrap-theme-colors.css" rel="stylesheet" type="text/css" media="all" />
		<link href="../css/theme.css" rel="stylesheet" type="text/css" media="all" />
		<!--[if lt IE 9]>
			<script type="text/javascript" src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script type="text/javascript" src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
	</head>
	<body role="document">
		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Afficher/masquer menu de navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<p><a class="navbar-brand" href="#">M2L - Accueil</a></p>
				</div>
				<div class="navbar-collapse collapse">
         			<ul class="nav navbar-nav">
            			<li class="active"><a href="#">Accueil</a></li>
            			<li><a href="salles.php">Salles</a></li>
            			<li><a href="#">Réservations</a></li>
          			</ul>
          			<ul class="nav navbar-nav navbar-right">
          				<li class="active"><a href="../index.php">Se déconnecter</a></li>
          			</ul>
        		</div>
			</div>
		</div>
		<div class="container theme-showcase" role="main">
			<h1>Accueil</h1>
			<p class="lead">Bienvenue sur la page d'accueil de la section utilisateur du site intranet.</p>
			<p class="lead">Pour consulter les informations sur les salles, cliquez sur le bouton "Salles" dans le menu en haut de l'écran.</p>
			<p class="lead">Les informations sur les réservations sont disponible en cliquant sur le bouton "Réservations" dans le même menu.</p>
			<p class="lead">Vous pouvez vous déconnecter à tout moment en cliquant sur le bouton prévu à cet effet en haut à droite.</p>
		</div>
		<script type="text/javascript" src="../js/jquery-1.11.1.js"></script>
		<script type="text/javascript" src="../js/bootstrap.js"></script>
	</body>
</html>
