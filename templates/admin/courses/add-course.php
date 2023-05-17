<?php $title = "Restaurant Le Quai Antique - Administration - Carte"; ?>

<?php ob_start(); ?>

<h1>Ajouter un plat</h1>
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
  <input type="text" class="name formEntry" name="title" placeholder="Titre du plat" required />
  <label class="formLabel" for="description">Description</label>
  <textarea class="message formEntry" name="description" placeholder="Description du plat"></textarea>
  <label class="formLabel" for="price">Prix du plat</label>
  <input type="number" id="price" class="number"  name="price" placeholder="0" maxlength="3" required />
  <legend class="btn-radio">Entrée, plat, fromage ou Dessert</legend>
  <select class=" select form-checkbox" name="cat1">
    <option value="">Sélectionner</option>
    <option value="1">Entrée</option>
    <option value="2">Plat</option><
    <option value="3">Fromage</option>
    <option value="4">Dessert</option>
  </select>
  <legend class="btn-radio">Autres catégories</legend>
  <select class=" select form-checkbox" name="cat2">
    <option value="">Sélectionner</option>
    <option value="1">Végétarien</option>
    <option value="2">Poisson</option><
    <option value="3">Viande</option>
    <option value="4">Fruits de mer</option>
  </select>
  <button class="submit" type="submit">Ajouter le plat</button>
</form>
<?php $content = ob_get_clean(); ?>

<?php require __DIR__ .'/../../layout-admin.php'; ?>