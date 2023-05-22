<?php $title = "Restaurant Le Quai Antique - Carte et menus"; ?>
<?php $h1 = "Carte et menus"; ?>
<?php ob_start(); ?>
<section class="custom-flex-column">
    <article class="row justify-content-center">
        <div class="col-sm-5 col-lg-3 m-1">
            <div class="card">
                <img src="images/photo-menu-01.jpg" class="card-img-top" alt="Menu Dégustation">
                <?php displayMenus("Déjeuner"); ?>
            </div>
        </div>
        <div class="col-sm-5 col-lg-3 m-1">
            <div class="card">
                <img src="images/photo-menu-02.jpg" class="card-img-top" alt="Menu Duo">
                <?php displayMenus("Duo"); ?>
            </div>
        </div>
        <div class="col-sm-4 col-lg-3 m-1">
            <div class="card">
                <img src="images/photo-menu-03.jpg" class="card-img-top" alt="Menu Végétarien">
                <?php displayMenus("Végétarien"); ?>
            </div>
        </div>
        <div class="col-sm-4 col-lg-3 m-1">
            <div class="card">
                <img src="images/photo-menu-04.jpg" class="card-img-top" alt="Menu Duo">
                <?php displayMenus("Dégustation"); ?>
            </div>
        </div>
        <div class="col-sm-4 col-lg-3 m-1">
            <div class="card">
                <img src="images/photo-menu-05.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h2 class="card-text">La carte</h2>
                    <button class="submit">
                        <a href="carte.php">Consulter</a>
                    </button>
                </div>
            </div>
        </div>
    </article>
</section>

<?php $content = ob_get_clean(); ?>

<?php require __DIR__ .'/../layout.php'; ?>