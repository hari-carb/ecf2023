<?php $title = "Restaurant Le Quai Antique - La Carte"; ?>
<?php $h1 = "La carte"; ?>
<?php ob_start(); ?>
<?php require __DIR__ .'/nav-menu.php'; ?>
    <form id="form" onChange= "form.submit()" class="form-control" action="carte.php" method="POST">
        <select name="selectCat" class="form-select" aria-label= "Sélectionner une catégorie de plat">
            <option selected>Sélection</option>
            <option value="1">Entrées</option>
            <option value="2">Plats</option>
            <option value="3">Fromage</option>
            <option value="4">Dessert</option>
            <option value="5">Végétarien</option>
            <option value="6">Poisson</option>
            <option value="7">Viande</option>
            <option value="8">Fruits de mer</option>
        </select>
    </form>
    <?php displayCourses(); ?>

<?php $content = ob_get_clean(); ?>

<?php require __DIR__ .'/../layout.php'; ?>