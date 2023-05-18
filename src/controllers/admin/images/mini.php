<?php
require __DIR__ .'/../../../../model/db.php';
$ratio = 150;
$dir = $pdo->query('SELECT * FROM photos ORDER BY id DESC');
// si aucune image n'est donnée en arguments, on redirige le visiteur vers l'accueil de la galerie


    foreach ($dir as $image)
    {
        $tableau = @getimagesize($image);
        // si il ne s'agit pas d'un fichier image, on redirige le visiteur vers l'accueil de la galerie
        if ($tableau == FALSE)
        {
            $_SESSION['flash']['danger'] = 'Ce fichier n\'est pas une image';
            header('location: admin-images.php');
            exit();
        }else
        {
            // si notre image est de type jpeg
            if ($tableau[2] == 2)
            {
                // on crée une image à partir de notre grande image à l'aide de la librairie GD
                $src = imagecreatefromjpeg($image);
                // on teste si notre image est de type paysage ou portrait
                if ($tableau[0] > $tableau[1]) {
                $im = imagecreatetruecolor(round(($ratio/$tableau[1])*$tableau[0]), $ratio);
                imagecopyresampled($im, $src, 0, 0, 0, 0, round(($ratio/$tableau[1])*$tableau[0]), $ratio, $tableau[0], $tableau[1]);
                }else
                {
                $im = imagecreatetruecolor($ratio, round(($ratio/$tableau[0])*$tableau[1]));
                imagecopyresampled($im, $src, 0, 0, 0, 0, $ratio, round($tableau[1]*($ratio/$tableau[0])), $tableau[0], $tableau[1]);
                }
                // contrairement au premier cas où l'on créait un fichier sur le disque dur, ici, comme on génère des images à la volée, on envoie un header au navigateur web du visiteur lui disant que le fichier mini.php va en fait générer une image de type jpeg, soit du type mime image/jpeg.
                header("Content-type: image/jpeg");
                imagejpeg($im);
            }elseif ($tableau[2] == 3)
            {
                $src = imagecreatefrompng($image);
                if ($tableau[0] > $tableau[1])
                {
                    $im = imagecreatetruecolor(round(($ratio/$tableau[1])*$tableau[0]), $ratio);
                    imagecopyresampled($im, $src, 0, 0, 0, 0, round(($ratio/$tableau[1])*$tableau[0]), $ratio, $tableau[0], $tableau[1]);
                }else
                {
                    $im = imagecreatetruecolor($ratio, round(($ratio/$tableau[0])*$tableau[1]));
                    imagecopyresampled($im, $src, 0, 0, 0, 0, $ratio, round($tableau[1]*($ratio/$tableau[0])), $tableau[0], $tableau[1]);
                }
                header("Content-type: image/png");
                imagepng($im);
            }
        }
	}