<?php $title = "Restaurant Le Quai Antique - Administration - Utilisateurs"; ?>

<?php ob_start(); ?>

<h1>Modifier un utilisateur ou administrateur</h1>
<div  class="errors">
<?php
if (!empty($_POST))
{
  require_once __DIR__ .'/../../../src/controllers/log/display.php';
  insertDisplayErrors();
}
?>
</div>
<form class="" action="" method="POST">
    <label for="firstname">Prénom</label>
    <input type="text" class="" name="firstname" value="<?=$user->firstname;?>" required />

    <label for="username">Nom de famille</label>
    <input type="text" class="" name="username" value="<?=$user->username;?>"required />

    <label for="email">Email</label>
    <input type="text" class="" name="email" value="<?=$user->email;?>"required />

    <label for="tel">Téléphone</label>
    <input type="tel" class="" name="tel" value="<?=$user->tel;?>" required />

    <label for="password">Mot de passe</label>
    <input type="password" class="" name="password" required />

    <label for="password">Confirmez votre mot de passe</label>
    <input type="password" class="" name="password_confirm" required />

    <label for="user">Client</label>
    <input type="radio" class="" id="user" name="type" value="user" 
    <?php if ($user->type ="user") {echo 'checked="checked"';} ?> />
    <label for="admin">Administrateur</label>
    <input type="radio" class="" id="admin" name="type" value="admin" />

    <button type="submit" class="btn btn-primary btn-sm">Modifier le compte</button>
</form>
<?php $content = ob_get_clean(); ?>

<?php require __DIR__ .'/../../layout-admin.php'; ?>