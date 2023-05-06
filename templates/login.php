<?php $title = "Restaurant Le Quai Antique - Connexion"; ?>

<?php ob_start(); ?>
<h1>Se connecter</h1>
<form class="" action="" method="POST">
    <label for="email">Email</label>
    <input type="text" class="" name="email" placeholder="Email" required />

    <label for="password">Mot de passe</label>
    <input type="password" class="" name="password" placeholder="Mot de passe" required />

    <button type="submit">Connexion</button>
</form>
<div>
    <p class="">Pas encore inscrit?</p>
    <p><a href="register.php">Inscrivez-vous ici</a></p>
</div>
<?php $content = ob_get_clean(); ?>

<?php require('layout.php') ?>