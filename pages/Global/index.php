<?php include("../Commons/header.php");

echo styleTitreNiveau1("Ils ont besoin de vous !", COLOR_ASSO);
?>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active bg-dark"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1" class="bg-dark"></li>
    </ol>
    <div class="carousel-inner">
        <!-- Début d'un ITEM -->
        <div class="carousel-item active">
            <div class="row no-gutters border rounded overflow-hidden mb-4 perso_bgRose">
                <div class="col-12 col-md-auto text-center">
                    <img src="../../sources/images/Animaux/Chats/Framboise/Framboise.jpg" style="height:250px;" class="" alt="Photo de Framboise">
                </div>
                <div class="col p-4 d-flex flex-column position-static">
                    <h3 class="perso_colorRoseMenu perso_policeTitre perso_textShadow">Framboise</h3>
                    <div class="text-muted mb-1">02/2019</div>
                    <p class="mb-auto">
                        Description de Framboise
                    </p>
                    <a href="" class="btn btn-primary">Visiter ma page</a>
                </div>
            </div>
        </div>
        <!-- Fin d'un ITEM -->

        <!-- Début d'un ITEM -->
        <div class="carousel-item">
            <div class="row no-gutters border rounded overflow-hidden mb-4 perso_bgRose">
                <div class="col-12 col-md-auto text-center">
                    <img src="../../sources/images/Animaux/Chats/Framboise/Framboise.jpg" style="height:250px;" class="" alt="Photo de Framboise">
                </div>
                <div class="col p-4 d-flex flex-column position-static">
                    <h3 class="perso_colorRoseMenu perso_policeTitre perso_textShadow">Framboise</h3>
                    <div>02/2019</div>
                    <p class="mb-auto">
                        Description de Framboise
                    </p>
                    <a href="" class="btn btn-primary">Visiter ma page</a>
                </div>
            </div>
        </div>
        <!-- Fin d'un ITEM -->

    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only ">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="row">
    <div class="col-6 mt-3">
        <?php
        $txt = "<img src='../../sources/images/Autres/icones/journal.png' alt='logo News' />
            Nouvelles des adoptés";

        echo styleTitreNiveau2($txt, COLOR_ACTUS); ?>

    </div>
    <div class="col-6 mt-3">
        <?php
        $txt = "<img src='../../sources/images/Autres/icones/action.png' alt='logo Action' />
            Evénements et Actions";

        echo styleTitreNiveau2($txt, COLOR_PENSIONNAIRE); ?>        
    </div>
</div>
<div class="row">
    <div class="col-6">
        <div class="row no-gutters border rounded mb-4">
            <div class="col-auto d-none d-lg-block">
                <img src="../../sources/images/Animaux/Chats/Framboise/Framboise.jpg" style="height:150px;" class="" alt="Photo de Framboise">
            </div>
            <div class="col p-3 d-flex flex-column position-static perso_bgVert">
                <h3 class="mb-0 perso_colorVertMenu perso_policeTitre perso_textShadow">Doyenne Chipie</h3>
                <p class="perso_size12 mt-2">Un petit coucou de notre doyenne CHIPIE (20 ans) en famille d'accueil...</p>
                <a href="" class="btn btn-primary">Visiter ma page</a>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="row no-gutters border rounded mb-4">
            <div class="col-auto d-none d-lg-block">
                <img src="../../sources/images/Animaux/Chats/Framboise/Framboise.jpg" style="height:150px;" class="" alt="Photo de Framboise">
            </div>
            <div class="col p-3 d-flex flex-column position-static perso_bgOrange">
                <h3 class="mb-0 perso_colorOrangeMenu perso_policeTitre perso_textShadow">Doyenne Chipie</h3>
                <p class="perso_size12 mt-2">Un petit coucou de notre doyenne CHIPIE (20 ans) en famille d'accueil...</p>
                <a href="" class="btn btn-primary">Visiter ma page</a>
            </div>
        </div>
    </div>
</div>

<?php include("../Commons/footer.php") ?>