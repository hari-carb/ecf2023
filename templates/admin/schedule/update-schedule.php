<?php $title = "Restaurant Le Quai Antique - Administration - Horaires"; ?>
<?php $h1 = "Modifier l'horaire du '.$sche->day .'"; ?>
<?php ob_start(); ?>
<div  class="errors">
<?php if (!empty($_POST))
    {
    displayScheduleErrors();
    } ?>
</div>
<form class="form" id="form" action="" method="POST">
  <label class="formLabel" for="lunch">Service du midi</label>
  <input type="text" id="lunch" class="name formEntry"  name="lunch" value="<?=$sche->lunch;?>" pattern="^[0-9a-zA-ZÀ-ú\s_]+$" title="Chiffres, lettres et espaces" required />
  <label class="formLabel" for="diner">Service du soir</label>
  <input type="text" id="diner" class="name formEntry" name="diner" value="<?=$sche->diner;?>" pattern="^[0-9a-zA-ZÀ-ú\s_]+$" title="Chiffres, lettres et espaces" required />
  <legend class="btn-radio">Jour de fermeture</legend>
  <select class=" select form-checkbox" name="opening">
    <option value="ouvert" <?=isSelected($sche->opening, "ouvert"); ?> >Ouvert</option>
    <option value="fermé" <?=isSelected($sche->opening, "fermé"); ?> >Fermé</option><
  </select>
  <button type="submit" class="submit">Modifier l'horaire</button>
</form>

<?php $content = ob_get_clean(); ?>

<?php require __DIR__ .'/../../layout-admin.php'; ?>