<?php $title = "Restaurant Le Quai Antique - Administration - Images"; ?>

<?php ob_start(); ?>

<h1>Gestion des images</h1>

<button type="submit" name="btn_upload" class="submit"><a href="add-image.php">Ajouter une image</a></button>

<h2>Modifier les images du slider de la page d'accueil</h2>
<p>Sélectionnez trois images ci-dessous et validez</p>
<h2>Galerie d'image</h2>
<?php displayImages(); ?>

<?php $content = ob_get_clean(); ?>

<?php require __DIR__ .'/../../layout-admin.php'; ?>