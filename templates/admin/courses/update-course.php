<?php $title = "Restaurant Le Quai Antique - Administration - Carte"; ?>

<?php ob_start(); ?>

<h1>Modifier un plat</h1>
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
<form class="form" id="form" action="" method="POST">
  <label class="formLabel" for="title">Titre du plat</label>
  <input type="text" class="name formEntry" name="title" value="<?=$course->title;?>" required />
  <label class="formLabel" for="title">Description</label>
  <textarea class="message formEntry" name="description"><?=$course->description;?></textarea>
  <label class="formLabel" for="title">Prix</label>
  <input type="number" class="number" name="price" value="<?=$course->price;?>" required />
  <legend class="btn-radio">Entrée, plat, fromage ou Dessert</legend>
  <select class=" select form-checkbox" name="cat1">
    <option value="1" <?=isSelected($categories->c1_id, "1"); ?> >Entrée</option>
    <option value="2" <?=isSelected($categories->c1_id, "2"); ?> >Plat</option><
    <option value="3" <?=isSelected($categories->c1_id, "3"); ?> >Fromage</option>
    <option value="4" <?=isSelected($categories->c1_id, "4"); ?> >Dessert</option>
  </select>
  <legend class="btn-radio">Autres catégories</legend>
  <select class=" select form-checkbox" name="cat2">
    <option value="1" <?=isSelected($categories->c2_id, "1"); ?> >Végétarien</option>
    <option value="2" <?=isSelected($categories->c2_id, "2"); ?> >Poisson</option>
    <option value="3" <?=isSelected($categories->c2_id, "3"); ?> >Viande</option>
    <option value="4" <?=isSelected($categories->c2_id, "4"); ?> >Fruits de mer</option>
  </select>
  <button class="submit" type="submit">Modifier le plat</button>
</form>
<?php $content = ob_get_clean(); ?>

<?php require __DIR__ .'/../../layout-admin.php'; ?>