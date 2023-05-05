<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style/style.css" rel="stylesheet">
    <title><?= $title ?></title>
</head>
<body>
<header>
    <div>
        <ul>
            <li><a href="index.php">Retour à l'accueil</a></li>
            <li><a href="src/controllers/menu.php">La carte</a></li>
            <li><a href="src/controllers/booking.php">Réserver</a></li>
            <li><a href="src/controllers/login.php">Se connecter</a></li>
            <li><a href="src/controllers/register.php">S'inscrire</a></li>
        </ul>
    </div>
</header>
    <?= $content ?>
</body>
</html>