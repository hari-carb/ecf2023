<?php $title = "Restaurant Le Quai Antique - Réserver"; ?>

<?php ob_start(); ?>
<?php require __DIR__ .'/../../src/controllers/log/display.php';?>
<h1>Réserver une table</h1>
<div  class="errors">
<?php if (!empty($_POST))
    {
    displayBookingErrors();
    } ?>
</div>
<?php if (!isset($_SESSION['authUser'])): ?>
    <div class="inline">
        <button class="submit" type="submit"><a href="login.php">Connexion</a></button>
    </div>
<?php endif; ?>
<form class="form" id="formBooking" action="" method="POST">
    <legend class="btn-radio">Choisissez le nombre de personnes</legend>
    <div class="form-checkbox">
        <div class="btn-booking">
            <input type="radio" id="nbpers1" name="nbpers" value="1" <?php if (isset($_SESSION['authUser'])) {isChecked($_SESSION['authUser']->nbpers, '1');}; ?> />
            <label for="nbpers1">1</label>
            <input type="radio" id="nbpers2" name="nbpers" value="2" <?php if (isset($_SESSION['authUser'])) {isChecked($_SESSION['authUser']->nbpers, '2');}; ?> />
            <label for="nbpers2">2</label>
            <input type="radio" id="nbpers3" name="nbpers" value="3" <?php if (isset($_SESSION['authUser'])) {isChecked($_SESSION['authUser']->nbpers, '3');}; ?> />
            <label for="nbpers3">3</label>
            <input type="radio" id="nbpers4" name="nbpers" value="4" <?php if (isset($_SESSION['authUser'])) {isChecked($_SESSION['authUser']->nbpers, '4');}; ?> />
            <label for="nbpers4">4</label>
            <input type="radio" id="nbpers5" name="nbpers" value="5" <?php if (isset($_SESSION['authUser'])) {isChecked($_SESSION['authUser']->nbpers, '5');}; ?> />
            <label for="nbpers5">5</label>
            <input type="radio" id="nbpers6" name="nbpers" value="6" <?php if (isset($_SESSION['authUser'])) {isChecked($_SESSION['authUser']->nbpers, '6');}; ?> />
            <label for="nbpers6">6</label>
            <input type="radio" id="nbpers7" name="nbpers" value="7" <?php if (isset($_SESSION['authUser'])) {isChecked($_SESSION['authUser']->nbpers, '7');}; ?> />
            <label for="nbpers7">7</label>
            <input type="radio" id="nbpers8" name="nbpers" value="8" <?php if (isset($_SESSION['authUser'])) {isChecked($_SESSION['authUser']->nbpers, '8');}; ?> />
            <label for="nbpers8">8</label>
            <input type="radio" id="nbpers9" name="nbpers" value="9" <?php if (isset($_SESSION['authUser'])) {isChecked($_SESSION['authUser']->nbpers, '9');}; ?> />
            <label for="nbpers9">9</label>
            <input type="radio" id="nbpers10" name="nbpers" value="10" <?php if (isset($_SESSION['authUser'])) {isChecked($_SESSION['authUser']->nbpers, '10');}; ?> />
            <label for="nbpers10">10</label>
        </div>
        <legend class="btn-radio">Choisissez la date</legend>
        <input type="text" id="datepicker" class="datepicker btn-booking" name="datepicker" required>
        <legend class="btn-radio">Choisissez l'heure</legend>
        <p>Déjeuner</p>
        <div class="btn-booking">
            <input type="radio" id="time1" name="time" value="12h00"/>
            <label for="time1">12h00</label>
            <input type="radio" id="time2" name="time" value="12h15"/>
            <label for="time2">12h15</label>
            <input type="radio" id="time3" name="time" value="12h30"/>
            <label for="time3">12h30</label>
            <input type="radio" id="time4" name="time" value="12h45"/>
            <label for="time4">12h45</label>
            <input type="radio" id="time5" name="time" value="13h00"/>
            <label for="time5">13h00</label>
            <input type="radio" id="time6" name="time" value="13h15"/>
            <label for="time6">13h15</label>
            <input type="radio" id="time7" name="time" value="13h30"/>
            <label for="time7">13h30</label>
            <input type="radio" id="time8" name="time" value="13h45"/>
            <label for="time8">13h45</label>
        </div>
        <p>Dîner</p>
        <div class="btn-booking">
            <input type="radio" id="time9" name="time" value="19h00"/>
            <label for="time9">19h00</label>
            <input type="radio" id="time10" name="time" value="19h15"/>
            <label for="time10">19h15</label>
            <input type="radio" id="time11" name="time" value="19h30"/>
            <label for="time11">19h30</label>
            <input type="radio" id="time12" name="time" value="19h45"/>
            <label for="time12">19h45</label>
            <input type="radio" id="time13" name="time" value="20h00"/>
            <label for="time13">20h00</label>
            <input type="radio" id="time14" name="time" value="21h15"/>
            <label for="time14">21h15</label>
            <input type="radio" id="time15" name="time" value="21h30"/>
            <label for="time15">21h30</label>
            <input type="radio" id="time16" name="time" value="21h45"/>
            <label for="time16">21h45</label>
        </div>
        <div class="btn-booking">
            <legend  type="radio" class="btn-radio">Vos coordonnées</legend>
        </div>
    </div>
    <?php if (isset($_SESSION['authUser'])): ?>
        <label class="formLabel" for="firstname">Prénom</label>
        <input type="text"  id="firstname" class="name formEntry" name="firstname"  value="<?=$_SESSION['authUser']->firstname; ?>" pattern="^[a-zA-ZÀ-ú\s_]+$" title="Lettres et espaces" required  />
        <label class="formLabel" for="username">Nom</label>
        <input type="text" id="username" class="name formEntry" name="username" value="<?=$_SESSION['authUser']->username; ?>" pattern="^[a-zA-ZÀ-ú\s_]+$" title="Lettres et espaces" required  />
        <label class="formLabel" for="email">Email</label>
        <input type="email" id="email" class="email formEntry" name="email" value="<?=$_SESSION['authUser']->email; ?>" required />
        <label class="formLabel" for="tel">Téléphone</label>
        <input type="tel" id="tel" class="tel formEntry" name="tel" value="<?=$_SESSION['authUser']->tel; ?>" pattern="^(?:(?:\+|00)33|0)\s*[1-9](?:[\s.-]*\d{2}){4}$" title="01 02 03 04 05 ou 0102030405" required />
        <label class="formLabel" for="allergies">Allergies</label>
        <textarea class="message formEntry" id="allergies" name="allergies"><?=$_SESSION['authUser']->allergies; ?>
        </textarea>
    <?php else : ?>
        <label class="formLabel" for="firstname">Prénom</label>
        <input type="text"  id="firstname"class="name formEntry" name="firstname" placeholder="Jean" pattern="^[a-zA-ZÀ-ú\s_]+$" title="Lettres et espaces" required />
        <label class="formLabel" for="username">Nom</label>
        <input type="text" id="username" class="name formEntry" name="username" placeholder="Dupond" pattern="^[a-zA-ZÀ-ú\s_]+$" title="Lettres et espaces" required />
        <label class="formLabel" for="email">Email</label>
        <input type="email"  id="email" class="email formEntry" name="email" placeholder="Email" placeholder="jean.dupont@gmail.com" required />
        <label class="formLabel" for="tel">Téléphone</label>
        <input type="tel" class="tel formEntry" name="tel" placeholder="Téléphone" placeholder="06********"  pattern="^(?:(?:\+|00)33|0)\s*[1-9](?:[\s.-]*\d{2}){4}$" title="01 02 03 04 05 ou 0102030405" required />
        <label class="formLabel" for="allergies">Allergies</label>
        <textarea class="message formEntry" id="allergies" name="allergies"></textarea>
    <?php endif; ?>
    <button class="submit" type="submit">Réserver</button>
</form>
<?php $content = ob_get_clean(); ?>

<?php require __DIR__ .'/../layout.php'; ?>