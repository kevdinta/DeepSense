<!DOCTYPE HTML>
<html lang="fr">
<head>
    <title>Galerie</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Voici un aperçu de la galerie photos, à vos pinceaux, les artistes !" />
    <meta name="keywords" content="unity, plateforme, jeu, deep, sense, game, feerique, gratuit, etudiant, jeux" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="public/css/flexslider.css">
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
<?php include('views/menu.php') ?>
<div class="container">
    <div class="col-lg-12 galerie">
        <h1>Galerie photos</h1>
        <hr>
        <ul class="breadcrumb">
            <li><a href="index.php">Accueil</a></li>
            <li class="active">Galerie</li>
        </ul>
        <p>Vous trouverez ci-dessous les réalisations de nos artistes farfelus !</p>
        <div id="bloc_galerie">
            <div class="gallery">
                <a target="_blank" href="https://s-media-cache-ak0.pinimg.com/736x/03/ce/da/03ceda735ce0643418c465b596ecdf43--deviant-art-art-illustrations.jpg">
                    <img src="https://s-media-cache-ak0.pinimg.com/736x/03/ce/da/03ceda735ce0643418c465b596ecdf43--deviant-art-art-illustrations.jpg" alt="Fjords" width="300" height="200">
                </a>
                <div class="desc">Add a description of the image here</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="https://s-media-cache-ak0.pinimg.com/736x/03/ce/da/03ceda735ce0643418c465b596ecdf43--deviant-art-art-illustrations.jpg">
                    <img src="https://s-media-cache-ak0.pinimg.com/736x/03/ce/da/03ceda735ce0643418c465b596ecdf43--deviant-art-art-illustrations.jpg" alt="Fjords" width="300" height="200">
                </a>
                <div class="desc">Add a description of the image here</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="https://s-media-cache-ak0.pinimg.com/736x/03/ce/da/03ceda735ce0643418c465b596ecdf43--deviant-art-art-illustrations.jpg">
                    <img src="https://s-media-cache-ak0.pinimg.com/736x/03/ce/da/03ceda735ce0643418c465b596ecdf43--deviant-art-art-illustrations.jpg" alt="Fjords" width="300" height="200">
                </a>
                <div class="desc">Add a description of the image here</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="https://s-media-cache-ak0.pinimg.com/736x/03/ce/da/03ceda735ce0643418c465b596ecdf43--deviant-art-art-illustrations.jpg">
                    <img src="https://s-media-cache-ak0.pinimg.com/736x/03/ce/da/03ceda735ce0643418c465b596ecdf43--deviant-art-art-illustrations.jpg" alt="Fjords" width="300" height="200">
                </a>
                <div class="desc">Add a description of the image here</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="https://s-media-cache-ak0.pinimg.com/736x/03/ce/da/03ceda735ce0643418c465b596ecdf43--deviant-art-art-illustrations.jpg">
                    <img src="https://s-media-cache-ak0.pinimg.com/736x/03/ce/da/03ceda735ce0643418c465b596ecdf43--deviant-art-art-illustrations.jpg" alt="Fjords" width="300" height="200">
                </a>
                <div class="desc">Add a description of the image here</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="https://s-media-cache-ak0.pinimg.com/736x/03/ce/da/03ceda735ce0643418c465b596ecdf43--deviant-art-art-illustrations.jpg">
                    <img src="https://s-media-cache-ak0.pinimg.com/736x/03/ce/da/03ceda735ce0643418c465b596ecdf43--deviant-art-art-illustrations.jpg" alt="Fjords" width="300" height="200">
                </a>
                <div class="desc">Add a description of the image here</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="https://s-media-cache-ak0.pinimg.com/736x/03/ce/da/03ceda735ce0643418c465b596ecdf43--deviant-art-art-illustrations.jpg">
                    <img src="https://s-media-cache-ak0.pinimg.com/736x/03/ce/da/03ceda735ce0643418c465b596ecdf43--deviant-art-art-illustrations.jpg" alt="Fjords" width="300" height="200">
                </a>
                <div class="desc">Add a description of the image here</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="https://s-media-cache-ak0.pinimg.com/736x/03/ce/da/03ceda735ce0643418c465b596ecdf43--deviant-art-art-illustrations.jpg">
                    <img src="https://s-media-cache-ak0.pinimg.com/736x/03/ce/da/03ceda735ce0643418c465b596ecdf43--deviant-art-art-illustrations.jpg" alt="Fjords" width="300" height="200">
                </a>
                <div class="desc">Add a description of the image here</div>
            </div>
        </div>
        <ul class="pagination pagination-lg">
            <li id="1"><a href="#1">1</a></li>
            <li id="2"><a href="#2">2</a></li>
        </ul>
    </div>
</div>
<div class="load">
    <i class="fa fa-spinner fa-spin" style="font-size:200px"></i>
</div>
<?php include('views/footer.php'); ?>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script>
    $("#1").click(function () {
        $("#bloc_galerie").fadeOut('slow', function () {
            $("#bloc_galerie").load("galerie.php #bloc_galerie", function () {
                $("#bloc_galerie").fadeIn();
            });
        })
    })
    $("#2").click(function () {
        $("#bloc_galerie").fadeOut('slow', function () {
            $("#bloc_galerie").load("views/galerie_p2.php #bloc_galerie", function () {
                $("#bloc_galerie").fadeIn();
            });
        })
    })
</script>
<script src="public/js/script.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>