<?php $title = "Restaurant Le Quai Antique - Administration - Utilisateurs"; ?>

<?php ob_start(); ?>
<h1>Ajouter un utilisateur ou administrateur</h1>
<div  class="errors">
<?php
if (!empty($_POST))
{
  require_once __DIR__ .'/../../../src/controllers/log/display.php';
  insertDisplayErrors();
}
?>
</div>
<form class="form" method="POST">
  <input type="text" class="name formEntry"  name="firstname" placeholder="Prénom" required />
  <input type="text" class="name formEntry" name="username" placeholder="Nom" required />
  <input type="text" class="email formEntry"  name="email" placeholder="Email" required />
  <input type="tel" class="tel formEntry"  name="tel" placeholder="Téléphone" required />
  <input type="password" class="password formEntry"  name="password" placeholder="Mot de passe"  required/>
  <div class="info">Minimum 8 caractères dont majuscule, minuscule, chiffre</div>
  <input type="password" class="password formEntry"  name="password_confirm" placeholder="Confirmez votre mot de passe"  required />
  <div class="info">Confirmez votre mot de passe</div>
  <div class="btn-radio">
  <label for="user">Client</label>
  <input type="radio" class="" id="user" name="type" value="user" checked/>
  <label for="admin">Administrateur</label>
  <input type="radio" class="" id="admin" name="type" value="admin"/>
  </div>
  <button type="submit" class="submit">S'inscrire</button>
</form>

<?php $content = ob_get_clean(); ?>

<?php require __DIR__ .'/../../layout-admin.php'; ?>

