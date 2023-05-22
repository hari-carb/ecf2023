<?php $title = "Restaurant Le Quai Antique - Administration - Menus"; ?>
<?php $h1 = "Gestion des menus"; ?>
<?php ob_start(); ?>
<h2>Liste des plats par menus</h2>
<div class="row justify-content-center">
    <div class="col-auto">
        <?php displayCourse('1'); ?>
    </div>
    <div class="col-auto">
        <?php adminDisplayMenu('Déjeuner'); ?>
    </div>
    <div class="col-auto">
        <?php  displayCourse('2'); ?>
    </div>
    <div class="col-auto">
        <?php adminDisplayMenu('Duo'); ?>
    </div>
    <div class="col-auto">
        <?php displayCourse('3'); ?>
    </div>
    <div class="col-auto">
        <?php adminDisplayMenu('Végétarien'); ?>
    </div>
    <div class="col-auto">
        <?php displayCourse('4'); ?>
    </div>
    <div class="col-auto">
        <?php adminDisplayMenu('Dégustation'); ?>
    </div>
</div>

  
<?php $content = ob_get_clean(); ?>

<?php require __DIR__ .'/../../layout-admin.php'; ?>