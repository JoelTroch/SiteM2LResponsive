<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="Site intranet pour la réservation des salles de la Maison des Ligues de Lorraine" />
		<meta name="author" content="netEmedia" />
		<title>Site intranet M2L - Administrateur Utilisateurs</title>
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
					<p class="navbar-brand">M2L - Réservation des salles</p>
                                        <p class="navbar-brand"><a href="../administrateur/utilisateurs.php">Utilisateurs</a></p>
                                        <p class="navbar-brand"><a href="../administrateur/salles.php">Salles</a></p>
                                        <p class="navbar-brand"><a href="../administrateur/reservations.php">Réservations</a></p>
				</div>
			</div>
		</div>
		<div class="container theme-showcase" role="main">
			<div>
				<h1>Utilisateurs</h1>
                                 <FORM>
                                    <INPUT type="checkbox" name="nouvelUtilisateur" value="1"> Nouvel utilisateur
                                 </FORM>
				<p class="lead">Choix de l'utilisateur : 
                                    <input type=text list=utilisateurs >
                                    <datalist id=utilisateurs >
                                       <option> Dupond Toto
                                       <option> Durand Martin
                                    </datalist>
                                
                                </p>
			</div>
		</div>
		<script type="text/javascript" src="../js/jquery-1.11.1.js"></script>
		<script type="text/javascript" src="../js/bootstrap.js"></script>
	</body>
</html>
