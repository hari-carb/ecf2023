<?php $title = "Restaurant Le Quai Antique - Client"; ?>
<?php $h1 = 'Bienvenue sur votre espace client <br>'.$_SESSION['authUser']->firstname .' '. $_SESSION['authUser']->username .''; ?>
<?php ob_start(); ?>
<h2>Vos réservations</h2>
<form id="form" onChange= "form.submit()" class="form-control" action="users.php" method="POST">
    <select name="selectBooking" class="form-select" aria-label= "Sélectionner une période">
        <option selected>Sélectionner une période</option>
        <option value="1">Vos réservations à venir</option>
        <option value="2">Le mois dernier</option>
        <option value="3">L'année dernière</option>
    </select>
</form>
<?php insertBookingUser(); ?>
<button class="submit"><a href="booking.php">Réserver à nouveau</a></button>

<h2>Votre compte</h2>
<h3>Vos coordonnées</h3>
    <p>Nom : <?=$_SESSION['authUser']->username; ?></p>
    <p>Prénom : <?=$_SESSION['authUser']->firstname; ?></p>
    <p>Email : <?=$_SESSION['authUser']->email; ?></p>
    <p>Téléphone : 0<?=$_SESSION['authUser']->tel; ?></p>
    <p>Nombre de personnes : <?=$_SESSION['authUser']->nbpers; ?></p>
    <p>Allergies : <?=$_SESSION['authUser']->allergies; ?></p>
    <a href="update-users.php">
        <button  type="button" class="submit">Modifier vos coordonnées</button>
    </a>
<?php $content = ob_get_clean(); ?>

<?php require __DIR__ .'/layout.php'; ?>