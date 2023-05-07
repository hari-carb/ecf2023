<?php $title = "Restaurant Le Quai Antique"; ?>
<?php ob_start(); ?>
<h1>Le Quai Antique</h1>

<?php $content = ob_get_clean(); ?>

<?php require __DIR__ .'/layout.php'; ?>