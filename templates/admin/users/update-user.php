<?php $title = "Restaurant Le Quai Antique - Administration - Utilisateurs"; ?>

<?php ob_start(); ?>

<h1>Modifier un utilisateur ou administrateur</h1>
<div  class="errors">
<?php if (!empty($_POST))
  {
    require_once __DIR__ .'/../../src/controllers/log/display.php';
    displayUpdateErrors();
  } ?>
</div>
<form class="form" id="form" action="" method="POST">
  <label class="formLabel" for="firstname">Prénom</label>
  <input type="text" id="firstname" class="name formEntry"  name="firstname" value="<?=$user->firstname;?>"pattern="^[a-zA-ZÀ-ú\s_]+$" title="Lettres et espaces" required />
  <label class="formLabel" for="username">Nom</label>
  <input type="text" id="username" class="name formEntry" name="username" value="<?=$user->username;?>" pattern="^[a-zA-ZÀ-ú\s_]+$" title="Lettres et espaces" required />
  <label class="formLabel" for="email">Email</label>
  <input type="email" id="email" class="email formEntry"  name="email" value="<?=$user->email;?>" required />
  <label class="formLabel" for="password">Mot de passe</label>
  <input type="password" id="password" class="password formEntry"  name="password" minlength ="8" pattern="^[A-Za-z0-9]+$" title="Au moins 8 caractères, une majuscule, une minuscule et un chiffre" placeholder="Mot de passe"  required/>
  <label class="formLabel" for="password">Confirmez votre mot de passe</label>
  <input type="password" id="password" class="password formEntry"  name="password_confirm"  minlength ="8" pattern="^[A-Za-z0-9]+$" title="Au moins 8 caractères, une majuscule, une minuscule et un chiffre" placeholder="Confirmez votre mot de passe"  required />
  <label class="formLabel" for="tel">Téléphone</label>
  <input type="tel" id="tel" class="tel formEntry"  name="tel" maxlength="14" value="<?=$user->tel;?>"  pattern="^(?:(?:\+|00)33|0)\s*[1-9](?:[\s.-]*\d{2}){4}$" title="01 02 03 04 05 ou 0102030405" required />
  <label class="formLabel" for="nbpers">Nombres de convives par défault <br>(modifiable lors de la réservation)</label>
  <input type="number" id="nbpers" class="number"  name="nbpers"  value="<?=$user->nbpers;?>" maxlength="2" required />
  <label class="formLabel" for="allergies">Merci d'indiquer d'éventuelles allergies</label>
  <textarea name="allergies" id="allergies" class="message formEntry"><?=$user->allergies;?></textarea>
  <div class="btn-booking">
    <input type="radio" class="" id="user" name="type" value="user" <?=isChecked($user->type, "user"); ?> />
    <label class="formLabel" for="user">Client</label>
    <input type="radio" class="" id="admin" name="type" value="admin" <?=isChecked($user->type, "admin"); ?> />
    <label for="admin">Administrateur</label>
  </div>
  <button type="submit" class="submit">Modifier le compte</button>
</form>

<?php $content = ob_get_clean(); ?>

<?php require __DIR__ .'/../../layout-admin.php'; ?>