<?php $title = "Restaurant Le Quai Antique - Administration - Menu"; ?>

<?php ob_start(); ?>

<h1>Ajouter un plat</h1>
<form class="" action="" method="POST">
    <select id="addCourseMenu" name="addCourseMenu">
        <option value="">Sélectionner</option>
        <?php 
        // ajouter exclusion des plats du menu
        $coursesInMenu = "SELECT * FROM menu_plats_cat1";
        foreach ($pdo->query($coursesInMenu) as $course)
        {
          print '<option value="'. $course->plats_id .'">'. $course->category1_type .' : ' .$course->title .'</option>';
        } ?>
    </select>
    <button type="submit">Ajouter le plat au menu</button>
</form>
<?php $content = ob_get_clean(); ?>

<?php require __DIR__ .'/../../layout-admin.php'; ?>