<?php $title = "Restaurant Le Quai Antique - Administration - Images"; ?>
<?php $h1 = "Gestion des images"; ?>
<?php ob_start(); ?>
<a href="add-image.php">
    <button type="button" class="btn-admin btn btn-primary btn-large">Ajouter une image</button>
</a>

<h2>Modifier les images du slider de la page d'accueil</h2>
<p>Sélectionnez trois images ci-dessous et validez en bas de page</p>
<?php displayImages(); ?>

<?php $content = ob_get_clean(); ?>

<?php require __DIR__ .'/../../layout-admin.php'; ?>