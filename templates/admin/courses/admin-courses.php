 <?php $title = "Restaurant Le Quai Antique - Administration - Utilisateurs"; ?>

<?php require __DIR__ .'/../../../src/controllers/admin/courses/display-courses.php';?>

<?php ob_start(); ?>

<h1>Gestion de la carte</h1>

<h2><a href="add-course.php">Ajouter un plat</a></h2>
<h2>Modifier ou supprimer un plat</h2>
<?php $courses = 'SELECT * FROM  plats_par_cat_ent_plat_dess';?>
<table>
    <caption><h3>Listes des plats</h3></caption>
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