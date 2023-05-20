<?php $title = "Restaurant Le Quai Antique - Client"; ?>

<?php ob_start(); ?>
<h1>Bienvenue sur votre espace client <?=$_SESSION['authUser']->firstname; ?> <?=$_SESSION['authUser']->username; ?></h1>

<div>
<h2>Votre compte</h2>
<h3>Vos coordonnées</h3>
    <p>Nom : <?=$_SESSION['authUser']->username; ?></p>
    <p>Prénom : <?=$_SESSION['authUser']->firstname; ?></p>
    <p>Email : <?=$_SESSION['authUser']->email; ?></p>
    <p>Téléphone : <?=$_SESSION['authUser']->tel; ?></p>
    <p>Nombre de personnes : <?=$_SESSION['authUser']->nbpers; ?></p>
    <p>Allergies : <?=$_SESSION['authUser']->allergies; ?></p>
</div>
<button class="submit"><a href="src/controllers/users/update-users.php">Modifier vos coordonnées</a></button>

<h3>Vos réservations</h3>
    <button class="submit"><a href="booking.php">Réserver à nouveau</a></button>
    <form id="form" onChange= "form.submit()" class="form-control" action="users.php" method="POST">
        <select name="selectBooking" class="form-select" aria-label= "Sélectionner une période">
            <option selected>Sélectionner une période</option>
            <option value="1">Vos réservations à venir</option>
            <option value="2">Le mois dernier</option>
            <option value="3">L'année dernière</option>
        </select>
    </form>

<?php $content = ob_get_clean(); ?>

<?php require __DIR__ .'/layout.php'; ?>