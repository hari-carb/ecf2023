<?php $title = "Restaurant Le Quai Antique - Inscription"; ?>

<?php ob_start(); ?>

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
  
    <button type="submit">Inscription</button>
</form>

<?php $content = ob_get_clean(); ?>

<?php require __DIR__ .'/../layout.php'; ?>