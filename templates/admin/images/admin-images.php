<?php $title = "Restaurant Le Quai Antique - Administration - Images"; ?>
<?php $h1 = "Gestion des images"; ?>
<?php ob_start(); ?>
<a href="add-image.php">
    <button type="submit" name="btn_upload" class="submit">Ajouter une image</button>
</a>

<h2>Modifier les images du slider de la page d'accueil</h2>
<p>Sélectionnez trois images ci-dessous et validez</p>
<h2>Galerie d'image</h2>
<?php displayImages(); ?>

<?php $content = ob_get_clean(); ?>

<?php require __DIR__ .'/../../layout-admin.php'; ?>