<?php $title = "Restaurant Le Quai Antique";
require __DIR__ .'/../src/model/db.php';
$req = "SELECT * FROM photos WHERE carousel = 'yes'";?>
<?php $h1 = "Le Quai Antique"; ?>
<?php ob_start(); ?>
<div id="carousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="custom-indic"></li>
        <li data-target="#carousel" data-slide-to="1" class="custom-indic"></li>
        <li data-target="#carousel" data-slide-to="2" class="custom-indic"></li>
    </ol>
    <div class="carousel-inner">
        <?php $first = true;
        foreach ($pdo->query($req) as $photo) : ?>
            <?php if ($first) : ?>
                <div class="carousel-item active">
                    <img src="src/controllers/admin/images/<?=$photo->path; ?>" class="d-block w-100" alt="'. $photo->name .'">
                    <div class="carousel-caption d-none d-md-block">
                        <a href="menus-carte.php"><div class="title-carousel"><?=$photo->description; ?></div></a>
                        <button class="submit"><a href="booking.php">Réservez</a></button>
                    </div>
                </div>
                <?php $first = false;?>
            <?php else : ?>
                <div class="carousel-item">
                    <img src="src/controllers/admin/images/<?=$photo->path; ?>" class="d-block w-100" alt="'. $photo->name .'">
                    <div class="carousel-caption d-none d-md-block">
                        <a href="menus-carte.php"><h2 class="title-carousel"><?=$photo->description; ?></h2></a>
                        <button class="submit"><a href="booking.php">Réservez</a></button>
                    </div>
                </div>
            <?php endif;?>
        <?php endforeach;?>
    </div>
    <a class="left carousel-control" href="#carousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="horaires">
<div class="horaires-text">Le Quai Antique vous accueille les mardi, mercredi, jeudi, vendredi, samedi et dimanche <br> de 12h à 15h et de de 19h à 22h <br>
Fermé le lundi</div>
</div>
<section class="custom-flex-column">
      <article class="row justify-content-center">
          <div class="col-sm-5 m-3">
              <div class="card">
                  <img src="images/table.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h5 class="card-text text-center">Restaurant le Quai Antique à Chambéry</h5>
                      <p class="card-text text-justify p-3">
                        Le Chef Arnaud Michant aime passionnément les produits et producteurs de la Savoie.
                        C’est pourquoi il a décidé d’ouvrir son troisième restaurant dans ce département.<br>
                        Le Quai Antique sera installé à Chambéry et proposera au déjeuner comme au dîner une
                        expérience gastronomique, à travers une cuisine sans artifice.<br>
                        Plus encore que ses deux autres restaurants, Arnaud Michant le voit comme une promesse
                        d’un voyage dans son univers culinaire.
                      </p>
                  </div>
              </div>
          </div>
        <div class="col-sm-5 m-3">
            <div class="card pb-4">
                <img src="images/carte.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                     <p class="card-text"> Le chef et son équipe vous proposent une carte en permanente évolution au fil des saisons.
                        <br>N'hésitez pas à consulter régulièrement la carte et les menus.
                     </p>
                </div>
                <a href="menus-carte.php">
                    <button class="submit">Voir la carte et les menus</button>
                </a>
                <a href="booking.php">
                    <button class="submit">Réserver</button>
                </a>
              </div>
        </div>
    </article>
  </div>
<?php $content = ob_get_clean(); ?>

<?php require __DIR__ .'/layout.php'; ?>