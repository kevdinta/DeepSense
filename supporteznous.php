<!DOCTYPE HTML>
<html lang="fr">
<head>
    <title>Deep Sense | Supportez-nous</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Jeu gratuit de plateforme présentant les étapes du deuil dans une dimension féérique !" />
    <meta name="keywords" content="unity, plateforme, jeu, deep, sense, game, feerique, gratuit, etudiant, jeux" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="public/css/flexslider.css">
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body id="bg-support" style="background:url('https://static.pexels.com/photos/33688/delicate-arch-night-stars-landscape.jpg');">
<?php include('views/menu.php') ?>
<div class="load">
    <i class="fa fa-spinner fa-spin" style="font-size:200px"></i>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12 supporteznous" style="background:white;">
            <h1>Supportez-nous !</h1>
            <hr>
            <p>Nous avons besoin de votre soutien, on essaye au max d'avancer le projet ! Ça pourrait nous réchauffer notre coeur de voir toutes vos têtes !</p>

            <div class="col-lg-6 fb">
                <h2>Rejoignez-nous sur Facebook !</h2>
                <hr>
                <p>Apportez votre soutien en likant notre page Facebook pour vous abonner à l'actualité de Wolpertinger !</p>
                <div id="fb-root"></div>
                <script>(function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s); js.id = id;
                        js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8&appId=1228278677291503";
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>
                <div class="fb-page"
                     data-href="https://www.facebook.com/DeepSenseGame/"
                     data-width="500"
                     data-hide-cover="false"
                     data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/DeepSenseGame/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/DeepSenseGame/">Deep Sense - Wolpertinger</a></blockquote>
                </div>
            </div>
            <div class="col-lg-6 donate">
                <h2>Un p'tit don pour nous encourager ? :)</h2>
                <hr>
                <p>Chaque don permettra à Dolly d'avancer pour de nouvelles aventures !</p>
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="MY7W4Y4DTK9DG">
                    <input type="image" src="http://img15.deviantart.net/29f6/i/2016/217/8/2/jolteon_donate_button_by_xdream3-dacrzc7.png" style="width:40%;" border="0" name="submit" alt="PayPal, le réflexe sécurité pour payer en ligne">
                    <img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
                </form>
            </div>
            <div class="col-lg-12 discord">
                <h2>On est aussi sur Discord !</h2>
                <hr>
                <p>Venez, on peut parler, jouer si vous voulez.</p>
                <a href="https://discord.gg/Jb67G3e"><img src="https://upload.wikimedia.org/wikipedia/fr/c/cb/Discord_logo_violet.png"></a>
                <br>
                <br>
            </div>
        </div>
    </div>
</div>
<?php include('views/footer.php'); ?>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="public/js/script.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
