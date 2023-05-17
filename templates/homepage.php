<?php $title = "Restaurant Le Quai Antique"; ?>
<?php ob_start(); ?>
<h1>Le Quai Antique</h1>
<div id="carousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel" data-slide-to="0" class="active"></li>
    <li data-target="#carousel" data-slide-to="1"></li>
    <li data-target="#carousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images\canette.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h2>La canette au sang servie saignante</h2>
        <button><a href="menus-carte.php">Consultez la Carte</a></button>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images\vegetable.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Les grosses asperges vertes de Provence</h5>
        <button><a href="menus-carte.php">Consultez la Carte</a></button>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images\chocolate.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Le chocolat Sao Tomé</h5>
        <button><a href="menus-carte.php">Consultez la Carte</a></button>
      </div>
    </div>
  </div>
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<?php $content = ob_get_clean(); ?>

<?php require __DIR__ .'/layout.php'; ?>