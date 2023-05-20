<?php $title = "Restaurant Le Quai Antique - Administration - Images"; ?>

<?php ob_start(); ?>
<h1>Ajouter une image</h1>
<div class="errors">
<strong>
	<?php if (isset($message))
	{
		echo $message;
	}?>
</strong>
</div>
<form class="form" id="form" action="" method="POST" enctype="multipart/form-data">
	<label class="formLabel" for="fileImg">Choisir un fichier</label>
	<input type="file" name="fileImg" class="name formEntry" />
    <label class="formLabel" for="img-name">Entrez le nom de l'image</label>
	<input type="text" placeholder="viande" name="img-name" class="name formEntry" />
    <label class="formLabel" for="img-description">Titre du plat correspondant à l'image</label>
	<textarea class="message formEntry" id="img-description" name="img-description"></textarea>
	<button type="submit" name="btn_upload" class="submit">Envoyer l'image</button>
</form>

<?php $content = ob_get_clean(); ?>

<?php require __DIR__ .'/../../layout-admin.php'; ?>