<?php $title = "Restaurant Le Quai Antique - Administration - Horaires"; ?>

<?php ob_start(); ?>

<h1>Modifier l'horaire du <?=$sche->day;?></h1>
<div  class="errors">
<?php displayErrors(displayScheduleErrors()); ?>
</div>
<form class="form" id="form" action="" method="POST">
  <label class="formLabel" for="lunch">Service du midi</label>
  <input type="text" id="lunch" class="name formEntry"  name="lunch" value="<?=$sche->lunch;?>"pattern="^[0-9a-zA-ZÀ-ú\s_]+$" title="Lettres et espaces" required />
  <label class="formLabel" for="diner">Service du soir</label>
  <input type="text" id="diner" class="name formEntry" name="diner" value="<?=$sche->diner;?>" pattern="^[0-9a-zA-ZÀ-ú\s_]+$" title="Lettres et espaces" required />
  <label class="formLabel" for="opening">Email</label>
  <input type="text" id="opening" class="name formEntry"  name="opening" value="<?=$sche->opening;?>" required />
  </div>
  <button type="submit" class="submit">Modifier l'horaire</button>
</form>

<?php $content = ob_get_clean(); ?>

<?php require __DIR__ .'/../../layout-admin.php'; ?>