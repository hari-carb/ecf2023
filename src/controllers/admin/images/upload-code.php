<?php

require __DIR__ .'/../../../model/db.php';

$message = "";
if (isset($_POST["btn_upload"]) == "Upload")
{
	$fileTmp = $_FILES["fileImg"]["tmp_name"];
	$fileName = $_FILES["fileImg"]["name"];
	$imageName = htmlspecialchars( $_POST["img-name"]);
	$imageDesc = htmlspecialchars($_POST["img-description"]);
	$filePath = "images/".$fileName;

	if ($imageName == "")
	{
		$message = "Merci d'entrer le nom de l'image.";
	}
    $tableau = @getimagesize($fileTmp);
	if ($tableau == FALSE)
    {
		// si le fichier uploadé n'est pas une image, efface le fichier uploadé et affiche un message
		unlink($fileTmp);
		$message = 'Votre fichier n\'est pas une image.';
	}
    // image : jpeg ou png
	if ($tableau[2] == 2 || $tableau[2] == 3)
    {
		if (file_exists($filePath))
		{
			$message = "L'image <b>$fileName</b> existe déjà.";
		}
    }else
    {
        $message = "L'image doit être de format jpeg ou png";
    }
	if (!empty($imageName) || !preg_match('/^[a-zA-ZÀ-ú\s_]+$/', $imageName) && !empty($imageDesc) || !preg_match('/^[a-zA-ZÀ-ú\s_]+$/', $imageDesc))
    {
		$req = $pdo->prepare("INSERT INTO photos(name, description, path) VALUES('$fileName', '$imageDesc', '$filePath')");
		$req->execute();
		$result = $req->fetch();
		move_uploaded_file($fileTmp, $filePath);
		$message = '<p align=center>Fichier '. $imageName . ' enregistré.
		<br/><button class="submit"><a href="admin-images.php">Retour à la galerie pour voir l\'image</a></button>';
    }else
	{
		echo 'Seuls les lettres et espaces sont autorisés dans les chmaps titre et description';
	}
	//création de l'image mini
	$ratio = 150;
	$dir_mini = 'mini';
	// si notre image est de type jpeg
	if ($tableau[2] == 2)
	{
		// on crée une image à partir de notre grande image à l'aide de la librairie GD
		$src = imagecreatefromjpeg('images/'. $fileName);
		// on teste si notre image est de type paysage ou portrait
		if ($tableau[0] > $tableau[1]) {
		$im = imagecreatetruecolor(round(($ratio/$tableau[1])*$tableau[0]), $ratio);
		imagecopyresampled($im, $src, 0, 0, 0, 0, round(($ratio/$tableau[1])*$tableau[0]), $ratio, $tableau[0], $tableau[1]);
		}else
		{
		$im = imagecreatetruecolor($ratio, round(($ratio/$tableau[0])*$tableau[1]));
		imagecopyresampled($im, $src, 0, 0, 0, 0, $ratio, round($tableau[1]*($ratio/$tableau[0])), $tableau[0], $tableau[1]);
		}
		//création image dans le dossier mini
		imagejpeg($im, $dir_mini. '/' .$fileName);
	}elseif ($tableau[2] == 3)
	{
		$src = imagecreatefrompng('images/'. $fileName);
		if ($tableau[0] > $tableau[1])
		{
			$im = imagecreatetruecolor(round(($ratio/$tableau[1])*$tableau[0]), $ratio);
			imagecopyresampled($im, $src, 0, 0, 0, 0, round(($ratio/$tableau[1])*$tableau[0]), $ratio, $tableau[0], $tableau[1]);
		}else
		{
			$im = imagecreatetruecolor($ratio, round(($ratio/$tableau[0])*$tableau[1]));
			imagecopyresampled($im, $src, 0, 0, 0, 0, $ratio, round($tableau[1]*($ratio/$tableau[0])), $tableau[0], $tableau[1]);
		}
		imagejpeg($im, $dir_mini. '/' .$fileName);
	}
}