<?php $title = "Restaurant Le Quai Antique - Client"; ?>

<?php ob_start(); ?>
<h1>Bienvenue sur votre espace client</h1>

</div>

<h2>Votre compte</h2>
<h3>Vos coordonnées</h3>
<p>Nom : <?=$_SESSION['authUser']->username; ?></p>
<p>Prénom : <?=$_SESSION['authUser']->firstname; ?></p>
<p>Email : <?=$_SESSION['authUser']->email; ?></p>
<p>Téléphone : <?=$_SESSION['authUser']->tel; ?></p>
<p>Nombre de personnes : <?=$_SESSION['authUser']->nbpers; ?></p>
<p>Allergies : <?=$_SESSION['authUser']->allergies; ?></p>
<button class="submit"><a href="update-users.php">Modifier vos coordonnées</a></button>
<h3>Vos réservations</h3>
<!--afficher futures -->
<select name="" id="">Voir vos précédentes réservations</select>
<button class="submit"><a href="booking.php">Réserver</a></button>
<?php $content = ob_get_clean(); ?>

<?php require __DIR__ .'/layout.php'; ?>