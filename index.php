<?php
/**
 * Created by PhpStorm.
 * User: DINTANAVONG
 * Date: 02/07/2017
 * Time: 16:23
 */

?>
<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <title>Deep Sense | Accueil</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Jeu gratuit de plateforme présentant les étapes du deuil dans une dimension féérique !" />
        <meta name="keywords" content="unity, plateforme, jeu, deep, sense, game, feerique, gratuit, etudiant, jeux" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="public/css/flexslider.css">
        <link rel="stylesheet" href="public/css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" integrity="sha384-OHBBOqpYHNsIqQy8hL1U+8OXf9hH6QRxi0+EODezv82DfnZoV7qoHAZDwMwEJvSw" crossorigin="anonymous">
    </head>
    <body>
    <?php include('views/menu.php') ?>
    <div class="flexslider">
        <ul class="slides">
            <li>
                <img src="http://azvirt.com/uploads/gallery/bayraq/08.jpg" alt="arbre" title="arbre" class="slider" />
               <!-- <p class="flex-caption">Le site est adapté pour n'importe quelle résolution.</p> -->
            </li>
            <li>
                <img src="http://www.lucasmassagetherapy.com/wp-content/uploads/2016/03/Flexspace-exterior-2.jpg" alt="branches" title="branches" class="slider"/>
                <!-- <p class="flex-caption">Le site est adapté pour n'importe quelle résolution.</p> -->
            </li>
            <li>
                <img src="http://www.explor8ion.com/sites/default/files/images/hikes/tent-mountain/tent-mtn-016.jpg" alt="image4" title="image4" class="slider" />
                <!-- <p class="flex-caption">Le site est adapté pour n'importe quelle résolution.</p> -->
            </li>
            <li>
                <img src="http://www.kaempf-gartenbauag.ch/wp-content/uploads/2016/06/wasser-im-garten-header-1.jpg" alt="image5" title="image5" class="slider" />
                <!-- <p class="flex-caption">Le site est adapté pour n'importe quelle résolution.</p> -->
            </li>
        </ul>
    </div>
    <div class="load">
        <i class="fa fa-spinner fa-spin" style="font-size:200px"></i>
    </div>
    <div class="container" id="home">
        <div class="row">
            <div class="col-lg-12">
                <h1>Deep Sense, le jeu de plateforme réalisé sur Unity</h1>
                <hr>
                <p>Sa direction artistique et son scénario nous plonge dans un univers <strong>féérique</strong>. Rejoignez Dolly pour connaître son histoire !</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <p>Un jeu fait par des étudiants pour les petits et les grands !</p>
                <br>
                <h4>Chaque niveau représente une saison</h4>
                <p>Ces niveaux changent progressivement, on apporte une certaine immersion pouvant provoquer différentes humeurs : mélancolique, colérique et j'en passe ! </p>
                <br>
                <h4>Ces niveaux montrent les différentes phases du deuil</h4>
                <ul>
                    <li>Déni</li>
                    <li>Colère</li>
                    <li>Négociation</li>
                    <li>Dépression</li>
                    <li>Acceptation</li>
                </ul>
                <br>
                <p>Ce jeu est un jeu de plateforme en vue 2D disponible sur Windows et tout ça <strong>GRATUITEMENT</strong> !</p>
            </div>
            <div class="col-lg-4">
                <img src="public/img/arbre.jpg" class="img-circle img-responsive" alt="apercu du jeu" title="apercu du jeu"/>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <h1>Restez connecté, sur n'importe quel terminal</h1>
                <hr>
                <div class="col-lg-6">
                    <img src="public/img/mockup_tablet.jpg" class="img-responsive img-thumbnail">
                </div>
                <div class="col-lg-6">
                    <p>Que vous soyez sur tablette, iPhone, Android, Windows, le site s'adapte sans problème. Nous prenons soin de travailler sur l'ergonomie afinn de faciliter la navigation de notre utilisateur.</p>
                    <p>Où que vous soyez, vous pouvez aller sur le site sans problème ! :)</p>
                    <p>Nunc nisi metus, imperdiet rutrum diam et, iaculis dignissim nisl. Duis hendrerit felis vel ex pulvinar scelerisque. Aenean volutpat quam id facilisis condimentum. Praesent a molestie magna. Morbi quis lectus faucibus, facilisis odio id, egestas nunc. Phasellus ac neque mauris. Fusce sed fringilla ipsum, cursus pharetra augue. Integer sodales sollicitudin tincidunt. Vestibulum consequat hendrerit metus ac tristique. Donec augue nulla, ullamcorper nec varius consectetur, volutpat ut augue. Nullam varius consequat ex, vel consequat tortor laoreet quis. Quisque venenatis ornare consequat. Fusce turpis metus, posuere sed euismod in, varius sed magna. Donec feugiat sit amet felis non aliquet.</p>
                </div>
            </div>
        </div>
        <!-- Service block -->
        <div class="row" id="service">
            <h1 class="text-center">Nos services </h1>
            <hr>
            <div class="row">
                <div class="col-md-4 text-center">
                    <div class="box">
                        <div class="box-content">
                            <h1 class="tag-title">Heading</h1>
                            <hr />
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pharetra quam sollicitudin nibh aliquam finibus. Etiam efficitur felis vel imperdiet varius. Maecenas bibendum elementum molestie. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris cursus finibus semper. Fusce molestie tincidunt leo vel varius. Nam scelerisque nulla feugiat leo consequat, id dignissim sem tincidunt. Proin elit mauris, hendrerit in varius sed, facilisis sit amet neque.</p>
                            <br />
                            <a href="ppc.html" class="btn btn-block btn-primary">Learn more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="box">
                        <div class="box-content">
                            <h1 class="tag-title">Heading</h1>
                            <hr />
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pharetra quam sollicitudin nibh aliquam finibus. Etiam efficitur felis vel imperdiet varius. Maecenas bibendum elementum molestie. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris cursus finibus semper. Fusce molestie tincidunt leo vel varius. Nam scelerisque nulla feugiat leo consequat, id dignissim sem tincidunt. Proin elit mauris, hendrerit in varius sed, facilisis sit amet neque.</p>
                            <br />
                            <a href="ppc.html" class="btn btn-block btn-primary">Learn more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="box">
                        <div class="box-content">
                            <h1 class="tag-title">Heading</h1>
                            <hr />
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pharetra quam sollicitudin nibh aliquam finibus. Etiam efficitur felis vel imperdiet varius. Maecenas bibendum elementum molestie. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris cursus finibus semper. Fusce molestie tincidunt leo vel varius. Nam scelerisque nulla feugiat leo consequat, id dignissim sem tincidunt. Proin elit mauris, hendrerit in varius sed, facilisis sit amet neque.</p>
                            <br />
                            <a href="ppc.html" class="btn btn-block btn-primary">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php include('views/footer.php'); ?>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="public/js/script.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="public/js/jquery.flexslider-min.js"></script>
    </body>
</html>
