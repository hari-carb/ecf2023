<?php $title = "Restaurant Le Quai Antique - Administration - Utilisateurs"; ?>


<?php ob_start(); ?>
<?php require __DIR__ .'/../nav-admin.php'; ?>
<h1>Ajouter un utilisateur ou administrateur</h1>

<form class="" action="" method="POST">
    <label for="firstname">Prénom</label>
    <input type="text" class="" name="firstname" placeholder="Jean" required />

    <label for="username">Nom de famille</label>
    <input type="text" class="" name="username" placeholder="Dupont" required />

    <label for="email">Email</label>
    <input type="text" class="" name="email" placeholder="jean.dupont@gmail.com" required />

    <label for="tel">Téléphone</label>
     <input type="tel" class="" name="tel" placeholder="06********" required />

    <label for="password">Mot de passe</label>
    <input type="password" class="" name="password" required />

    <label for="password">Confirmez votre mot de passe</label>
    <input type="password" class="" name="password_confirm" required />

    <input type="radio" class="" id="user" name="type" value="user" checked/>
    <label for="user">Client</label>
    <input type="radio" class="" id="admin" name="type" value="admin"/>
    <label for="admin">Administrateur</label>

    <button type="submit">Inscription</button>
</form>
<?php $content = ob_get_clean(); ?>

<?php require __DIR__ .'/../../layout-admin.php'; ?>

