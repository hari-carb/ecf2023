<?php $title = "Restaurant Le Quai Antique - Menu"; ?>


<?php ob_start(); ?>
<?php require __DIR__ .'/nav-menu.php'; ?>
<?php $content = ob_get_clean(); ?>

<?php require __DIR__ .'/../layout.php'; ?>