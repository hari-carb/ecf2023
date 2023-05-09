<?php $title = "Restaurant Le Quai Antique - Connexion"; ?>

<?php ob_start(); ?>

<section class="p-2">
  <h1>Se connecter</h1>
  <form class="form" method="POST">
    <input type="email" class="email formEntry" name="email" placeholder="Email" required/>
    <input type="text" class="password formEntry" name="password" placeholder="Mot de passe"/>
    <button type="submit" class="submit">Se connecter</button>
  <div class="center">
    <p>Pas encore inscrit? <a href="register.php">Inscrivez-vous ici</a></p>
  </div>
  </form>
</section>

<?php $content = ob_get_clean(); ?>

<?php require __DIR__ .'/../layout.php'; ?>