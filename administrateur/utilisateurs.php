<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="Site intranet pour la réservation des salles de la Maison des Ligues de Lorraine" />
		<meta name="author" content="netEmedia" />
		<title>Site intranet M2L - Administration utilisateurs</title>
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
			<p><a class="navbar-brand" href="#">M2L - Administration utilisateur</a></p>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="index.php">Accueil</a></li>
                            <li class="active"><a href="utilisateurs.php">Utilisateurs</a></li>
                            <li><a href="salles.php">Salles</a></li>
                            <li><a href="reservations.php">Réservations</a></li>
          		</ul>
          		<ul class="nav navbar-nav navbar-right">
                            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Bruce Wayne (Administrateur)</a></li>
                            <li class="active"><a href="../index.php">Se déconnecter</a></li>
          		</ul>
                    </div>
                </div>
            </div>
            <div class="container theme-showcase" role="main">
                <form method="post" action = "utilisateurs.php" class="form-horizontal">
                    <div class="control-group">
                        <label class="control-label"for="utilisateurs">
                            Utilisateur :
                        </label>
                        <select name="utilisateurs" class="form-control">
                            <option value="0">Tous les utilisateurs</option>
                            <option value="1">Marion Martin</option>
                            <option value="2">Gérard Gégé</option>
                            <option value="3">Luc Lamaison</option>
                        </select>
                        <br/>
                    </div>
                    <div class="control-group">
                        <input type="hidden" name="envoye" value="oui" />
                        <button type="submit" class="btn btn-default">Filtrer</button>
                    </div>
                </form>
            </div>
            <script type="text/javascript" src="../js/jquery-1.11.1.js"></script>
            <script type="text/javascript" src="../js/bootstrap.js"></script>
    </body>
</html>
