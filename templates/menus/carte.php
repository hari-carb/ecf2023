<?php $title = "Restaurant Le Quai Antique - La Carte"; ?>


<?php ob_start(); ?>
<?php require('templates/nav-menu.php') ?>
<div>
    <select name="courses-cat" id="courses">
        <option value="">Trier par</option>
        <?php displayCategories(); ?>
    </select>
</div>
<?php
    displayCoursesByCategories('Entrée');
    displayCoursesByCategories('Plat');
    displayCoursesByCategories('Fromage');
    displayCoursesByCategories('Dessert');
    displayCoursesByCategories('Végétarien');
    displayCoursesByCategories('Viande');
    displayCoursesByCategories('Poisson');
    displayCoursesByCategories('Fruits de mer');
?>
<?php $content = ob_get_clean(); ?>

<?php require('templates/layout.php') ?>