
<?php $title = "Restaurant Le Quai Antique - Administration - Carte"; ?>

<?php ob_start(); ?>

<h1>Modifier un plat</h1>

<form class="form" action="" method="POST">
  <input type="text" class="name formEntry" name="title" value="<?=$course->title;?>" required />
  <textarea rows="10" cols="55" class="message formEntry" name="description" value="<?=$course->description;?>"></textarea>
  <input type="text" class="tel formEntry" name="price" value="<?=$course->price;?>" required />
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
  <button class="submit" type="submit">Modifier le plat</button>
</form>
<?php $content = ob_get_clean(); ?>

<?php require __DIR__ .'/../../layout-admin.php'; ?>