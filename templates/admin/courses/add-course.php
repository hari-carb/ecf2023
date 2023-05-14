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
<form class="form" action="" method="POST">
  <input type="text" class="name formEntry" name="title" placeholder="Titre du plat" required />
  <textarea rows="10" cols="55" class="message formEntry" name="description" placeholder="Description du plat"></textarea>
  <input type="text" class="tel formEntry" name="price" placeholder="Prix du plat" required />
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
  <legend class="btn-radio">Ajouter à un menu</legend>
  <div class="form-checkbox">
    <input class="checkbox" type="checkbox" id="menu-dej" name="menus[]"value="1">
    <label for="menu-dej">Menu Déjeuner</label>
  </div>
  <div class="form-checkbox">
    <input class="checkbox" type="checkbox" id="menu-duo" name="menus[]"value="2">
    <label for="menu-duo">Menu Duo</label>
  </div>
  <div class="form-checkbox">
    <input class="checkbox" type="checkbox" id="vege" name="menus[]"value="3">
    <label for="vege">Menu Végétarien</label>
  </div>
  <div class="form-checkbox">
    <input class="checkbox" type="checkbox" id="seafish" name="menus[]"value="4">
    <label for="seafish">Menu Dégustation</label>
  </div>
  <button class="submit" type="submit">Ajouter le plat</button>
</form>
<?php $content = ob_get_clean(); ?>

<?php require __DIR__ .'/../../layout-admin.php'; ?>