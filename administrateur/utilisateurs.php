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
                    <p><a class="navbar-brand" href="#">Administration utilisateurs</a></p>
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
            <h1>Utilisateurs</h1>
            <p class="lead"><a href="utilisateurs-ajouter.php">Ajouter un utilisateur</a></p>
            <form method="post" action = "utilisateurs.php" class="form-horizontal">
                <div class="form-group">
                    <label class="control-label"for="utilisateur">Utilisateur :</label>
                    <select name="utilisateurs" class="form-control form-fix">
                        <option value="0">Tous les utilisateurs</option>
                        <option value="1">Lucien Sapin</option>
                        <option value="2">Marion Martin</option>
                        <option value="3">Gérard Gégé</option>
                        <option value="4">Luc Lamaison</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="hidden" name="envoye" value="oui" />
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default">Filtrer</button>
                </div>
            </form>
            <table class="table form-fix">
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Courriel</th>
                    <th>Type</th>
                    <th>Actions</th>
                </tr>
                <tr>
                    <td>Sapin</td>
                    <td>Lucien</td>
                    <td><a href="mailto:lucien.sapin@m2l.fr">lucien.sapin@m2l.fr</a></td>
                    <td>Administrateur</td>
                    <td><a href="#">Modifier</a> <a href="#">Supprimer</a></td>
                </tr>
                <tr>
                    <td>Martin</td>
                    <td>Marion</td>
                    <td><a href="mailto:marion.martin@m2l.fr">marion.martin@m2l.fr</a></td>
                    <td>Utilisatrice</td>
                    <td><a href="#">Modifier</a> <a href="#">Supprimer</a></td>
                </tr>
                <tr>
                    <td>Gégé</td>
                    <td>Gérard</td>
                    <td><a href="mailto:gerard.gege@m2l.fr">gerard.gege@m2l.fr</a></td>
                    <td>Utilisateur</td>
                    <td><a href="#">Modifier</a> <a href="#">Supprimer</a></td>
		</tr>
                <tr>
                    <td>Lamaison</td>
                    <td>Luc</td>
                    <td><a href="mailto:luc.lamaison@m2l.fr">luc.lamaison@m2l.fr</a></td>
                    <td>Utilisateur</td>
                    <td><a href="#">Modifier</a> <a href="#">Supprimer</a></td>
                </tr>
            </table>
        </div>
        <script type="text/javascript" src="../js/jquery-1.11.1.js"></script>
        <script type="text/javascript" src="../js/bootstrap.js"></script>
    </body>
</html>
