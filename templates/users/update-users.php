<?php $title = "Restaurant Le Quai Antique - Espace Client"; ?>
<?php $h1 = "Modifier votre compte"; ?>
<?php ob_start(); ?>
<div  class="errors">
<?php if (!empty($_POST))
  {
    require_once __DIR__ .'/../../src/controllers/log/display.php';
    displayUpdateErrors();
  } ?>
</div>
<form class="form" id="form" action="" method="POST">
  <label class="formLabel" for="firstname">Prénom</label>
  <input type="text" id="firstname" class="name formEntry"  name="firstname" value="<?=$_SESSION['authUser']->firstnmae; ?>"pattern="^[a-zA-ZÀ-ú\s_]+$" title="Lettres et espaces" required />
  <label class="formLabel" for="username">Nom</label>
  <input type="text" id="username" class="name formEntry" name="username" value="<?=$_SESSION['authUser']->username; ?>" pattern="^[a-zA-ZÀ-ú\s_]+$" title="Lettres et espaces" required />
  <label class="formLabel" for="email">Email</label>
  <input type="email" id="email" class="email formEntry"  name="email" value="<?=$_SESSION['authUser']->email; ?>" required />
  <label class="formLabel" for="password">Mot de passe</label>
  <input type="password" id="password" class="password formEntry"  name="password" minlength ="8" pattern="^[A-Za-z0-9]+$" title="Au moins 8 caractères, une majuscule, une minuscule et un chiffre" placeholder="Mot de passe"  required/>
  <label class="formLabel" for="password">Confirmez votre mot de passe</label>
  <input type="password" id="password" class="password formEntry"  name="password_confirm"  minlength ="8" pattern="^[A-Za-z0-9]+$" title="Au moins 8 caractères, une majuscule, une minuscule et un chiffre" placeholder="Confirmez votre mot de passe"  required />
  <label class="formLabel" for="tel">Téléphone</label>
  <input type="tel" id="tel" class="tel formEntry"  name="tel" maxlength="14" value="0<?=$_SESSION['authUser']->tel; ?>"  pattern="^(?:(?:\+|00)33|0)\s*[1-9](?:[\s.-]*\d{2}){4}$" title="01 02 03 04 05 ou 0102030405" required />
  <label class="formLabel" for="nbpers">Nombres de convives par défault <br>(modifiable lors de la réservation)</label>
  <input type="number" id="nbpers" class="number"  name="nbpers"  value="<?=$_SESSION['authUser']->nbpers; ?>" maxlength="2" required />
  <label class="formLabel" for="allergies">Merci d'indiquer d'éventuelles allergies</label>
  <textarea name="allergies" id="allergies" class="message formEntry"><?=$_SESSION['authUser']->allergies; ?></textarea>
  <button type="submit" class="submit">Modifier le compte</button>
</form>

<?php $content = ob_get_clean(); ?>

<?php require __DIR__ .'/../../layout-admin.php'; ?>