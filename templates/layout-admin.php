<?php
//Vérification qu'une session n'est pas déjà ouverte
if (session_status() == PHP_SESSION_NONE)
{
  session_start();
}
 ?>
<?php require __DIR__ .'/../src/controllers/flashMessage.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="../../../../style/style.css" rel="stylesheet">
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
    <div class="content container container-md container-lg">
        <a href="../users/admin-users.php">Gestion utilisateurs</a> |
        <a href="../courses/admin-courses.php">Gestion de la carte</a> |
        <a href="../menus/admin-menus.php">Gestion des menus</a> |
        <a href="../booking/admin-booking.php">Réservations</a> |
        <a href="">Gestion des images</a> |
    </div>
    <div class="content container container-md container-lg">
    <?php flashMessage(); ?>
    </div>
    <div class="content container container-md container-lg">
        <?= $content ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 
</body>
</html>