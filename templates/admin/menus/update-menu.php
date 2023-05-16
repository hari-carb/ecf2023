<?php $title = "Restaurant Le Quai Antique - Administration - Menu"; ?>

<?php ob_start(); ?>

<h1>Modifier un menu</h1>
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
  <input type="text" class="name formEntry" name="name" value="<?=$menu->name; ?>" required />
  <input type="text" class="tel formEntry" name="price" value="<?=$menu->price; ?>" required />
  <button class="submit" type="submit">Modifier le menu</button>
</form>
<?php $content = ob_get_clean(); ?>

<?php require __DIR__ .'/../../layout-admin.php'; ?>