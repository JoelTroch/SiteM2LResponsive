<?php
if (isset($_POST['envoye']))
{
    if ($_POST['identifiant'] == 'admin' && $_POST['motdepasse'] == 'admin')
        header('Location: administrateur/index.php');
    else if ($_POST['identifiant'] == 'user' && $_POST['motdepasse'] == 'user')
        header('Location: utilisateur/index.php');
    else
        header('Location: index.php?erreur=1');
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="Site intranet pour la réservation des salles de la Maison des Ligues de Lorraine" />
        <meta name="author" content="netEmedia" />
        <title>Site intranet M2L - Administration utilisateurs</title>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/bootstrap-theme-colors.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/theme.css" rel="stylesheet" type="text/css" media="all" />
        <!--[if lt IE 9]>
            <script type="text/javascript" src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script type="text/javascript" src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body role="document">
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <p><a class="navbar-brand" href="#">Connexion</a></p>
                </div>
            </div>
        </div>
        <div class="container theme-showcase" role="main">
            <h1>Accueil du site</h1>
            <p class="lead">Veuillez saisir vos informations de connexion :</p>
            <form method="post" action="index.php" role="form">
                <div class="form-group">
                    <label for="identifiant">Identifiant</label>
                    <input type="text" class="form-control form-fix" id="identifiant" name="identifiant" />
                </div>
                <div class="from-group">
                    <label for="motdepasse">Mot de passe</label>
                    <input type="password" class="form-control form-fix" id="motdepasse" name="motdepasse" />
                </div>
                <div class="form-group">
                    <input type="hidden" name="envoye" value="oui" />
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default">Connexion</button>
                </div>
            </form>
            <?php
            if (isset($_GET['erreur']))
                echo '<p class="lead" style="color: red;">Informations de connexion incorrectes.</p>';
            ?>
        </div>
        <script type="text/javascript" src="js/jquery-1.11.1.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
    </body>
</html>
