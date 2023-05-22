<?php $title = "Restaurant Le Quai Antique - Connexion"; ?>
<?php $h1 = "Se connecter"; ?>
<?php ob_start(); ?>

<section class="p-2">
    <form class="form" id="form" action="" method="POST">
        <label class="formLabel" for="email">Email</label>
        <input type="email" class="email formEntry" name="email" placeholder="jean.dupont@gmail.com" required/>
        <label class="formLabel" for="password">Mot de passe</label>
        <input type="password" class="password formEntry" name="password" placeholder="**********"/>
        <button type="submit" class="submit">Se connecter</button>
        <div class="center">
            <p>Première connexion?</p>
            <p><a href="register.php">Inscrivez-vous ici</a></p>
        </div>
    </form>
</section>

<?php $content = ob_get_clean(); ?>

<?php require __DIR__ .'/../layout.php'; ?>