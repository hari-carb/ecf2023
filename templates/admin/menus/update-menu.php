<?php $title = "Restaurant Le Quai Antique - Administration - Menu"; ?>
<?php $h1 = "Modifier un menu"; ?>
<?php ob_start(); ?>
<div  class="errors">
<?php
if (!empty($_POST))
{
      print '<ul>';
      foreach ($errors as $error)
      {
          print '<li>' .$error. '</li>';
      }
      print '</ul>';
}
?>
</div>
<form class="form" action="" method="POST">
  <label class="formLabel" for="name">Nom du menu</label>
  <input type="text"  id="name" class="name formEntry" name="name" value="<?=$menu->name; ?>" required />
  <label class="formLabel" for="price">Prix du menu</label>
  <input type="number"  id="name" class="number" name="price" value="<?=$menu->price; ?>" required />
  <button class="submit" type="submit">Modifier le menu</button>
</form>
<?php $content = ob_get_clean(); ?>

<?php require __DIR__ .'/../../layout-admin.php'; ?>