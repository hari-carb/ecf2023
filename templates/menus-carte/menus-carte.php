<?php $title = "Restaurant Le Quai Antique - La Carte"; ?>

<?php ob_start(); ?>

<h1>Carte et menus</h1>
<div>
    <?php displayMenus(); ?>
</div>
<div>
    <h2>La carte</h2>
    <button><a href="carte.php">Consulter</a></button>    
</div>
<?php $content = ob_get_clean(); ?>

<?php require __DIR__ .'/../layout.php'; ?>