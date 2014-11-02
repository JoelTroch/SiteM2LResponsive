<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Site intranet pour la réservation des salles de la Maison des Ligues de Lorraine" />
	<meta name="author" content="netEmedia" />
	<title>Site intranet M2L - Ajouter utilisateur</title>
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
                    <p><a class="navbar-brand" href="#">Ajouter utilisateur</a></p>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Accueil</a></li>
                        <li class="active"><a href="utilisateurs.php">Utilisateurs</a></li>
                        <li><a href="salles.php">Salles</a></li>
                        <li><a href="reservations.php">Réservations</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sapin Lucien (Administrateur)</a></li>
                        <li class="active"><a href="../index.php">Se déconnecter</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container theme-showcase" role="main">
            <h1>Ajouter un utilisateur</h1>
            <p class="lead">L'identifiant sera généré à partir du nom et du prénom.</p>
            <form method="post" action = "utilisateurs.php" class="form-horizontal">
                <div class="form-group">
                    <label class="control-label" for="nom">Nom :</label>
                    <input type="text" id="nom" class="form-control form-fix" />
                </div>
                <div class="form-group">
                    <label class="control-label" for="prenom">Prénom :</label>
                    <input type="text" id="prenom" class="form-control form-fix" />
                </div>
                <div class="form-group">
                    <label class="control-label" for="motdepasse">Mot de passe :</label>
                    <input type="password" id="motdepasse" class="form-control form-fix" />
                </div>
                <div class="form-group">
                    <label class="control-label" for="sexe">Sexe :</label>
                    <select name="sexe" class="form-control form-fix">
                        <option value="0" selected>Homme</option>
                        <option value="1">Femme</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label" for="type">Type de compte :</label>
                    <select name="type" class="form-control form-fix">
                        <option value="0" selected>Utilisateur(trice)</option>
                        <option value="1">Administrateur(trice)</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="hidden" name="envoye" value="oui" />
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default">Ajouter</button>
                </div>
            </form>
        </div>
        <script type="text/javascript" src="../js/jquery-1.11.1.js"></script>
        <script type="text/javascript" src="../js/bootstrap.js"></script>
    </body>
</html>
