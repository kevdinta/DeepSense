<!DOCTYPE HTML>
<html lang="fr">
<head>
    <title>Contact</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Contactez nous pour rendre le jeu meilleur !" />
    <meta name="keywords" content="unity, plateforme, jeu, deep, sense, game, feerique, gratuit, etudiant, jeux" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="public/css/flexslider.css">
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body id="formulaire">
<?php include('views/menu.php') ?>
<div class="load">
    <i class="fa fa-spinner fa-spin" style="font-size:200px"></i>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12 contact ">
            <?php
            $action= isset($_REQUEST['action']);
            if ($action=="")
            {
                ?>
                <div class="row">
                    <div class="col-lg-6">
                        <form  action="" method="POST" enctype="multipart/form-data" id="contact">
                            <input type="hidden" name="action" value="submit">
                            <h1 style="margin-top: 5%;">Formulaire de contact</h1>
                            <hr>
                            <div class="form-group">
                                <label for="name">Votre nom et prénom :</label>
                                <input name="name" class="form-control" id="name" type="text" />
                            </div>
                            <div class="form-group">
                                <label for="subject">Sujet :</label>
                                <input name="subject" class="form-control" id="subject" type="text"/>
                            </div>
                            <div class="form-group">
                                <label for="email">Email :</label>
                                <input name="email" type="text" value="" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="message">Your message:</label>
                                <textarea name="message" id="message" class="form-control"></textarea>
                            </div>
                            <input type="submit" value="Envoyer" class="btn btn-default"/>
                            <br>
                            <br>
                        </form>
                    </div>
                    <div class="col-lg-6">
                        <h1 style="margin-bottom: 4.7%;">Envie de nous rendre visite ?</h1>
                        <hr>
                        <div id="map"></div>
                        <br>
                        <div>
                            <p><i class="fa fa-map-marker fa-lg"></i> 133 Rue Marius Berliet, 69008 Lyon </p>
                            <p><i class="fa fa-envelope-o fa-lg"></i><a href="mailto:wolpertinger.game@gmail.com"> wolpertinger.game@gmail.com</a> </p>
                        </div>
                    </div>
                </div>

                <?php
            }
            else
            {
                $name=$_REQUEST['name'];
                $email=$_REQUEST['email'];
                $message=$_REQUEST['message'];
                if (($name=="")||($email=="")||($message==""))
                {
                    echo "Tous les chanmps sont requis, remplissez <a href=\"\">le formulaire</a> une nouvelle fois.";
                }
                else{
                    $from="From: $name<$email>\r\nReturn-path: $email";
                    $subject="Message sent using your contact form";
                     mail("kevin.dintanavong@gmail.com", $subject, $message, $from);
                    echo "E-mail envoyé !";
                }
            }
            ?>
        </div>
    </div>
</div>
<?php include('views/footer.php'); ?>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="public/js/script.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
    function initMap() {
        var lyon = {lat: 45.764043, lng: 4.835659};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 12,
            center: lyon
        });
        var marker = new google.maps.Marker({
            position: lyon,
            map: map
        });
        $(document).ready(function() {
            google.maps.event.addListener(map, "idle", function(){
                google.maps.event.trigger(map, 'resize');
            });
        });
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8_VFASIhdsiX6b1rWuiFJmY-t2Ve8r_4&callback=initMap">
</script>
</body>
