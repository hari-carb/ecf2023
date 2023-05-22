<?php
//Vérification qu'une session n'est pas déjà ouverte
if (session_status() == PHP_SESSION_NONE)
{
  session_start();
}
// Vérifie si l'utilisateur est un administrateur, sinon redirection vers la page de connexion
if (!isset($_SESSION['authAdmin']))
{
  $_SESSION['flash']['danger'] = "Vous devez vous connecter pour accéder à l'espace administration.";
  header("Location: ../../../../login.php");
  exit();
}
require __DIR__ .'/../src/controllers/flashMessage.php';
require __DIR__ .'/../src/controllers/display-layout.php'; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="../../../../style/style.css">
    <title><?= $title ?></title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="../../../../index.php">
                <img id="logo" src="../../../../images/logo.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="../../../../menus-carte.php">Carte & Menus <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="../../../../booking.php">Réserver</a>
                    <?php if (isset($_SESSION['authUser'])): ?>
                        <a class="nav-item nav-link" href="../../../../logout.php">Se déconnecter</a>
                    <?php elseif (isset($_SESSION['authAdmin'])): ?>
                        <a class="nav-item nav-link" href="../../../../admin.php">Espace Administration</a>
                        <a class="nav-item nav-link" href="../../../../logout.php">Se déconnecter</a>
                    <?php else: ?>
                        <a class="nav-item nav-link" href="../../../../login.php">Se connecter</a>
                    <?php endif; ?>
                </div>
            </div>
        </nav>
    </header>
    <div class="nav">
        <a class="nav-link" href="../users/admin-users.php">Gestion utilisateurs</a>
        <a class="nav-link" href="../courses/admin-courses.php">Gestion de la carte</a>
        <a class="nav-link" href="../menus/admin-menus.php">Gestion des menus</a>
        <a class="nav-link" href="../booking/admin-booking.php">Réservations</a>
        <a class="nav-link" href="../images/admin-images.php">Gestion des images</a>
        <a class="nav-link" href="../schedule/admin-schedule.php">Gestion des horaires</a>
    </div>
    <div class="container-fluid">
        <h1><?= $h1 ?></h1>
        <div>
            <?php flashMessage(); ?>
        </div>
        <?= $content ?>
    </div>
    <footer>
    <section class="custom-flex-column">
        <article class="row justify-content-center">
            <div class="col-sm-5 m-1">
                <h3 class="">Restaurant le Quai Antique</h3>
                <h3 class="card-text">65 rue de la République <br>73000 Chambery</h3>
                <p class="card-text">Télephone : 01 02 03 04 05</p>
                <a href="booking.php"><button type="button" class="submit">Réserver</button></a>
            </div>
            <div class="col-sm-5 m-1">
                <h3 class="">Horaires d'ouverture</h3>
                <div>
                    <table>
                        <?php displayScheduleOpen(); ?>
                        <td colspan="2">Fermé le <?= $scheC->day; ?></td>
                    </table>
                </div>
            </div>
        </article>
    </section>
</footer>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="../../../../script/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>