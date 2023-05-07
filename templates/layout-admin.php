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
    <link href="../../../style\style.css" rel="stylesheet">
    <title><?= $title ?></title>
</head>
<body>
<header>
    <div>
        <ul>
            <li><a href="../../../index.php">Retour à l'accueil</a></li>
            <li><a href="../../../menus-carte.php">La carte</a></li>
            <li><a href="../../../booking.php">Réserver</a></li>
            <?php if (isset($_SESSION['authUser'])): ?>
                <li><a href="../../../logout.php">Se déconnecter</a></li>
            <?php elseif (isset($_SESSION['authAdmin'])): ?>
                <li><a href="../../../admin.php">Espace Administration</a></li>
                <li><a href="../../../logout.php">Se déconnecter</a></li>
             <?php else: ?>
                <li><a href="../../../login.php">Se connecter</a></li>
              <?php endif; ?>
            <li><a href="../../../register.php">S'inscrire</a></li>
        </ul>
    </div>
</header>
<div>
<?php flashMessage(); ?>
</div>
    <?= $content ?>
</body>
</html>