<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="Site intranet pour la réservation des salles de la Maison des Ligues de Lorraine" />
		<meta name="author" content="netEmedia" />
		<title>Site intranet M2L - Administration salles</title>
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
			<p><a class="navbar-brand" href="#">M2L - Administration salles</a></p>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="index.php">Accueil</a></li>
                            <li><a href="utilisateurs.php">Utilisateurs</a></li>
                            <li class="active"><a href="salles.php">Salles</a></li>
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
                    <div class="control-group">
                        <label class="control-label"for="salles">
                            Choix de la salle :
                        </label>
                        <select name="salles" class="form-control">
                            <option value="0"></option>
                            <option value="1">Salle 1</option>
                            <option value="2">Salle 2</option>
                            <option value="3">Salle 3</option>
                        </select>
                        <br/>
                        <label class="control-label"for="domaines">
                            Choix du domaine :
                        </label>
                        <select name="domaines" class="form-control">
                            <option value="0"></option>
                            <option value="1">Domaine 1</option>
                            <option value="2">Domaine 2</option>
                            <option value="3">Domaine 3</option>
                        </select>
                    </div>
                    <div class="form-group">
			<button type="submit" class="btn btn-default">Filtrer</button>
                    </div>
                    <table class="table form-fix">
			<tr>
                            <th>Nom</th>
                            <th>Description</th>
                            <th>Max</th>
                            <th>Courriels des responsables</th>
			</tr>
			<tr>
                            <td>Nom 1</td>
                            <td>37</td>
                            <td>?</td>
                            <td><a href="mailto:ethan.mars@m2l.fr">ethan.mars@m2l.fr</a></td>
			</tr>
			<tr>
                            <td>Nom 2</td>
                            <td>74</td>
                            <td>?</td>
                            <td><a href="mailto:jules.hugo@m2l.fr">jules.hugo@m2l.fr</a></td>
			</tr>
                    </table>
		</div>
		<script type="text/javascript" src="../js/jquery-1.11.1.js"></script>
		<script type="text/javascript" src="../js/bootstrap.js"></script>
	</body>
</html>
