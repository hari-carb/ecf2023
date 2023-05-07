<?php $title = "Restaurant Le Quai Antique - Administration - Carte"; ?>

<?php ob_start(); ?>

<h1>Ajouter un plat</h1>

<form class="" action="" method="POST">
    <div>
        <label for="title">Titre</label>
        <input type="text" class="" name="title" placeholder="Titre du plat" required />
    </div>
    <div>
        <label for="description">Description</label>
        <textarea rows="10" cols="55"class="" name="description" placeholder="Description du plat"></textarea>
    </div>
    <div>
        <label for="price">Prix</label>
        <input type="text" class="" name="price" placeholder="Prix du plat" required />
    </div>
        <legend>Entrée, plat, fromage ou Dessert</legend>
    <div>
        <select name="course">
            <option value="">Sélectionner</option>
            <option value="4">Entrée</option>
            <option value="5">Plat</option><
            <option value="7">Fromage</option>
            <option value="6">Dessert</option>
        </select>
    </div>

    <legend>Autres catégories</legend>
    <div>
      <input type="checkbox" id="meat" name="categories[]" value="2">
      <label for="meat">Viande</label>
    </div>

    <div>
      <input type="checkbox" id="fish" name="categories[]" value="1">
      <label for="fish">Poisson</label>
    </div>
    <div>
      <input type="checkbox" id="vege" name="categories[]"value="3">
      <label for="vege">Végétarien</label>
    </div>
    <div>
      <input type="checkbox" id="seafish" name="categories[]"value="8">
      <label for="seafish">Fruits de mer</label>
    </div>

    <legend>Ajouter à un menu</legend>
      <input type="checkbox" id="menu-dej" name="menus[]"value="1">
      <label for="menu-dej">Menu Déjeuner</label>
    </div>

    <div>
      <input type="checkbox" id="menu-duo" name="menus[]"value="2">
      <label for="menu-duo">Menu Duo</label>
    </div>
    <div>
      <input type="checkbox" id="vege" name="menus[]"value="3">
      <label for="vege">Menu Végétarien</label>
    </div>
    <div>
      <input type="checkbox" id="seafish" name="menus[]"value="4">
      <label for="seafish">Menu Dégustation</label>
    </div>
      <button type="submit">Ajouter le plat</button>
    </div>
</form>
<?php $content = ob_get_clean(); ?>

<?php require __DIR__ .'/../../layout-admin.php'; ?>