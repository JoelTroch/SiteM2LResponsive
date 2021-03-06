<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="Site intranet pour la réservation des salles de la Maison des Ligues de Lorraine" />
        <meta name="author" content="netEmedia" />
        <title>Site intranet M2L - Consultation salles</title>
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
                    <p><a class="navbar-brand" href="#">Consultation salles</a></p>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Accueil</a></li>
                        <li class="active"><a href="salles.php">Salles</a></li>
                        <li><a href="reservations.php">Réservations</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Martin Marion (Utilisatrice)</a></li>
                        <li class="active"><a href="../index.php">Se déconnecter</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container theme-showcase" role="main">
            <h1>Salles</h1>
            <form method="post" action="salles.php" role="form">
                <div class="form-group">
                    <label for="domaine">Choix du domaine :</label>
                    <select name="domaine" id="domaine" class="form-control form-fix">
                        <option value="tous" selected>Tous les domaines</option>
                        <option value="multimedia">Multimédia</option>
                        <option value="reunion">Réunion</option>
                    </select>
                </div>
                <div class="from-group">
                    <label for="salle">Choix de la salle :</label>
                    <select name="salle" id="salle" class="form-control form-fix">
                        <option value="tous" selected>Toutes les salles</option>
                        <option value="amphitheatre">Amphithéâtre</option>
                        <option value="baccarat">Baccarat (Réunion)</option>
                        <option value="corbin">Corbin (Réunion)</option>
                        <option value="daum">Daum (Réunion)</option>
                        <option value="galle">Gallé (Réunion)</option>
                        <option value="lamour">Lamour (Réunion)</option>
                        <option value="longwy">Longwy (Réunion)</option>
                        <option value="majorelle">Majorelle (Réunion)</option>
                        <option value="multimedia">Multimédia</option>
                        <option value="reunion_etage">Réunion d'étage</option>
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
                    <th>Description</th>
                    <th>Salle concernée</th>
                    <th>Courriel du responsable</th>
                </tr>
                <tr>
                    <td>Sapin Lucien</td>
                    <td>Journée portes ouvertes M2L</td>
                    <td>Amphithéâtre</td>
                    <td><a href="mailto:lucien.sapin@m2l.fr">lucien.sapin@m2l.fr</a></td>
                </tr>
                <tr>
                    <td>Martin Marion</td>
                    <td>Réunion pour la compétition du club de judo</td>
                    <td>Majorelle</td>
                    <td><a href="mailto:marion.martin@m2l.fr">marion.martin@m2l.fr</a></td>
                </tr>
            </table>
        </div>
        <script type="text/javascript" src="../js/jquery-1.11.1.js"></script>
        <script type="text/javascript" src="../js/bootstrap.js"></script>
    </body>
</html>
