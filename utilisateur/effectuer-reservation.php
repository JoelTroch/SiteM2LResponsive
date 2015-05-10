<?php
// Connexion base de données
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=mrbs', 'root', 'mysql');
}
catch (PDOException $e)
{
    die('[Erreur MySQL] ' . $e->getMessage());
}

// Vérifie si le champ est défini et si il est rempli
function verifierChamp($champ)
{
    if (isset($_POST[$champ]) && $_POST[$champ] != "")
        return true;
    else
        return false;
}

// Conversion heures DateTime en date Unix (pour MRBS)
function convertirHeuresEnUnix($champ)
{
    $heureDebutHeures = substr($champ, 0, 2);
    $dureeHeures = 0;
    if ($heureDebutHeures != "00")
        $dureeHeures = 3600 * (int)$heureDebutHeures;

    return $dureeHeures;
}

// Conversion minutes DateTime en date Unix (pour MRBS)
function convertirMinutesEnUnix($champ)
{
    $heureDebutMinutes = substr($champ, 3);
    $dureeMinutes = 0;
    if ($heureDebutMinutes != "00")
        $dureeMinutes = 60 * (int)$heureDebutMinutes;

    return $dureeMinutes;
}

// Le formulaire est envoyé
if (isset($_POST['envoye']))
{
    // Les champs sont remplis et corrects
    if (verifierChamp("name") && verifierChamp("description") && verifierChamp("heureDebut") && verifierChamp("heureFin")
        && verifierChamp("dateDebut") && verifierChamp("dateFin"))
    {
        $startTime = strtotime($_POST['dateDebut']) + convertirHeuresEnUnix($_POST['heureDebut']) + convertirMinutesEnUnix($_POST['heureDebut']);
        $endTime = strtotime($_POST['dateFin']) + convertirHeuresEnUnix($_POST['heureFin']) + convertirMinutesEnUnix($_POST['heureFin']);
        $periodicite = (int)$_POST['periodicite'];
        $entryType = 0;
        if ($periodicite > 0)
            $entryType = 1;

        try
        {
            $req = $bdd->prepare('INSERT INTO mrbs_entry(start_time, end_time, entry_type, repeat_id, room_id, create_by, name, description, status) VALUES(:start_time, :end_time, :entry_type, :repeat_id, :room_id, :create_by, :name, :description, :status)');
            $req->execute(array(
                'start_time' => $startTime,
                'end_time' => $endTime,
                'entry_type' => $entryType,
                'repeat_id' => $periodicite,
                'room_id' => $_POST['salle'],
                'create_by' => $_POST['create_by'],
                'name' => $_POST['name'],
                'description' => $_POST['description'],
                'status' => $_POST['status']
                ));
            header('Location: reservations.php');
        }
        catch (PDOException $e)
        {
            die('[Erreur MySQL] ' . $e->getMessage());
        }
    }
    else
        header('Location: effectuer-reservation.php?erreur=1');
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="Site intranet pour la réservation des salles de la Maison des Ligues de Lorraine" />
        <meta name="author" content="netEmedia" />
        <title>Site intranet M2L - Effectuer réservation</title>
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
                    <p><a class="navbar-brand" href="#">Effectuer réservation</a></p>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="salles.php">Salles</a></li>
                        <li class="active"><a href="reservations.php">Réservations</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Martin Marion (Utilisatrice)</a></li>
                        <li class="active"><a href="../index.php">Se déconnecter</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container theme-showcase" role="main">
            <h1>Effectuer une réservation</h1>
            <?php
            if (isset($_GET['erreur']))
                echo '<p class="lead" style="color: red;">Vous devez saisir toutes les informations.</p>';
            ?>
            <form method="post" action="effectuer-reservation.php" role="form">
                <div class="form-group">
                    <label for="name">Brève description :</label>
                    <input type="text" class="form-control form-fix" id="name" name="name" />
                </div>
                <div class="form-group">
                    <label for="description">Description complète :</label>
                    <textarea class="form-control form-fix" id="description" name="description" rows="2"></textarea>
                </div>
                <div class="form-group">
                    <label class="control-label" for="dateDebut">Date de début :</label>
                    <input type="date" id="dateDebut" name="dateDebut" class="form-control form-fix" />
                </div>
                <div class="form-group">
                    <label class="control-label" for="dateFin">Date de fin :</label>
                    <input type="date" id="dateFin" name="dateFin" class="form-control form-fix" />
                </div>
                <div class="form-group">
                    <label for="heureDebut">Heure de début :</label>
                    <input type="time" class="form-control form-fix" id="heureDebut" name="heureDebut" />
                </div>
                <div class="form-group">
                    <label for="heureFin">Heure de fin :</label>
                    <input type="time" class="form-control form-fix" id="heureFin" name="heureFin" />
                </div>
                <div class="form-group">
                    <label>Périodicite :</label>
                </div>
                <div class="form-group">
                    <label class="radio-inline"><input type="radio" name="periodicite" value="0" checked>Aucune</label>
                    <label class="radio-inline"><input type="radio" name="periodicite" value="1">Jour</label>
                    <label class="radio-inline"><input type="radio" name="periodicite" value="2">Semaine</label>
                    <label class="radio-inline"><input type="radio" name="periodicite" value="3">Mois</label>
                    <label class="radio-inline"><input type="radio" name="periodicite" value="4">Année</label>
                    <label class="radio-inline"><input type="radio" name="periodicite" value="5">Mois, même jour semaine</label>
                    <label class="radio-inline"><input type="radio" name="periodicite" value="6">Toutes les N semaines (saississez)</label>
                </div>
                <div class="form-group">
                    <label>Status :</label>
                </div>
                <div class="form-group">
                    <label class="radio-inline"><input type="radio" name="status" value="0" checked>Confirmé</label>
                    <label class="radio-inline"><input type="radio" name="status" value="4">Provisoire</label>
                </div>
                <div class="form-group">
                    <label for="salle">Salle :</label>
                    <select name="salle" id="salle" class="form-control form-fix">
                    <?php
                    try
                    {
                        $req = $bdd->query('SELECT id, room_name FROM mrbs_room');
                        $premierResultat = true;
                        while ($res = $req->fetch())
                        {
                            if ($premierResultat)
                            {
                                echo '<option value="' . $res['id'] . '" selected>' . $res['room_name'] . '</option>';
                                $premierResultat = false;
                            }
                            else
                                echo '<option value="' . $res['id'] . '">' . $res['room_name'] . '</option>';
                        }
                    }
                    catch (PDOException $e)
                    {
                        die('[Erreur MySQL] ' . $e->getMessage());
                    }
                    ?>
                    </select>
                </div>
                <div class="form-group">
                    <input type="hidden" name="create_by" value="admin" />
                    <input type="hidden" name="envoye" value="oui" />
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default">Vérifier la disponibilité</button>
                </div>
            </form>
        </div>
        <script type="text/javascript" src="../js/jquery-1.11.1.js"></script>
        <script type="text/javascript" src="../js/bootstrap.js"></script>
    </body>
</html>
