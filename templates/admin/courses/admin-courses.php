 <?php $title = "Restaurant Le Quai Antique - Administration - Carte"; ?>
 <?php $h1 = "Gestion de la carte"; ?>
<?php ob_start(); ?>
<div class="container container-md container-lg center">
    <a href="add-course.php">
        <button class="btn-admin btn btn-primary btn-large">Ajouter un plat</button>
    </a>
    <h2>Liste des plats</h2>
</div>
<?php $courses = 'SELECT * FROM  plats_by_cat1';?>
<div class="row justify-content-center">
    <div class="col-auto">
        <table name="liste-admin-courses" class="table table-responsive table-sm table-striped table-bordered vertical-align-middle">
            <thead>
                <tr>
                <th>Catégorie</th>
                <th>Titre</th>
                <th>Description</th>
                <th>Prix</th>
                </tr>
            </thead>
            <tbody>
                <?php adminDisplayCoursesByCategories('Entrée') ?>
                <?php adminDisplayCoursesByCategories('Plat') ?>
                <?php adminDisplayCoursesByCategories('Fromage') ?>
                <?php adminDisplayCoursesByCategories('Dessert') ?>
            </tbody>
        </table>
    </div>
</div>
<?php $content = ob_get_clean(); ?>

<?php require __DIR__ .'/../../layout-admin.php'; ?>