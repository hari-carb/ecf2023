<?php $title = "Restaurant Le Quai Antique - Réserver"; ?>

<?php ob_start(); ?>
<h1>Réserver une table</h1>

<div class="center">
<button class="submit-inline" type="submit"><a href="../../register.php">Inscription</a></button>
<button class="submit-inline" type="submit"><a href="../../loging.php">Connexion</a></button>
</div>
<form class="form" id="formBooking" action="" method="POST">
    <legend class="btn-radio">Choisissez le nombre de personnes</legend>
    <div class="form-checkbox">
        <button class="btn-booking" name="nbpersonnes" value="1">1</button>
        <button class="btn-booking" name="nbpersonnes" value="2">2</button>
        <button class="btn-booking" name="nbpersonnes" value="3">3</button>
        <button class="btn-booking" name="nbpersonnes" value="4">4</button>
        <button class="btn-booking" name="nbpersonnes" value="5 et plus">5 et plus</button>
        <legend class="btn-radio">Choisissez la date</legend>
        <input type="text" class="datepicker" id="datepicker" name="datepicker">
        
        <legend class="btn-radio">Choisissez l'heure</legend>
        <p>Déjeuner</p>
        <button class="btn-booking" name="time" value="12h00">12h00</button>
        <button class="btn-booking" name="time" value="12h15">12h15</button>
        <button class="btn-booking" name="time" value="12h30">12h30</button>
        <button class="btn-booking" name="time" value="12h45">12h45</button>
        <button class="btn-booking" name="time" value="13h00">13h00</button>
        <button class="btn-booking" name="time" value="13h15">13h15</button>
        <button class="btn-booking" name="time" value="13h30">13h30</button>
        <button class="btn-booking" name="time" value="13h45">13h45</button>
        <p>Dîner</p>
        <button class="btn-booking" name="time" value="20h00">20h00</button>
        <button class="btn-booking" name="time" value="20h15">20h15</button>
        <button class="btn-booking" name="time" value="20h30">20h30</button>
        <button class="btn-booking" name="time" value="20h45">20h45</button>
        <button class="btn-booking" name="time" value="21h00">21h00</button>
        <button class="btn-booking" name="time" value="21h15">21h15</button>
        <button class="btn-booking" name="time" value="21h30">21h30</button>
        <button class="btn-booking" name="time" value="21h45">21h45</button>
        <legend class="btn-radio">Vos coordonnées</legend>
    </div>
    <input type="text" class="name formEntry" name="firstname" value="Prénom" required />
    <input type="text" class="name formEntry" name="username" placeholder="Nom" required />
    <input type="email" class="email formEntry" name="email" placeholder="Email" required />
    <input type="tel" class="tel formEntry" name="tel" placeholder="Téléphone" required />
    <textarea class="message formEntry" name="allergies" placeholder="Eventuelles allergies">
    </textarea>
    <button class="submit" type="submit">Réserver</button>
</form>
<?php $content = ob_get_clean(); ?>

<?php require __DIR__ .'/layout.php'; ?>