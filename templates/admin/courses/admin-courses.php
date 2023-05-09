 <?php $title = "Restaurant Le Quai Antique - Administration - Carte"; ?>

<?php require __DIR__ .'/../../../src/controllers/admin/courses/display-courses.php';?>

<?php ob_start(); ?>

<h1>Gestion de la carte</h1>

<h2><a href="add-course.php">Ajouter un plat</a></h2>
<h2>Liste des plats</h2>
<?php $courses = 'SELECT * FROM  plats_by_cat1';?>
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
<?php $content = ob_get_clean(); ?>

<?php require __DIR__ .'/../../layout-admin.php'; ?>