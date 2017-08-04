<!--
/**
 * Created by PhpStorm.
 * User: DINTANAVONG
 * Date: 02/07/2017
 * Time: 18:29
 */
-->
<?php

$page = $_SERVER['REQUEST_URI'];
$page = str_replace("/deepsense/", "",$page);
?>
<div class="navbar-collapse collapse navbar-inverse">
    <div class="logo">
        <!-- <a class="navbar-brand" href="#"><img class="small-logo" src="public/img/DS.png" title="deep sense logo" alt="deep sense logo" </a> -->
    </div>
    <ul class="nav navbar-nav">
        <li <?php if($page == "index.php") {echo 'class="active"';} ?>><a href="index.php">Accueil</a></li>
        <li <?php if($page == "aproposdenous.php") {echo 'class="active"';} ?>><a href="aproposdenous.php">A propos de nous</a></li>
        <li <?php if($page == "galerie.php" || $page == "video.php") {echo 'class="active"';} ?> class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Média<span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li <?php if($page == "galerie.php") {echo 'class="active"';} ?>><a href="galerie.php">Galerie photo</a></li>
            </ul>
        </li>
        <li <?php if($page == "supporteznous.php") {echo 'class="active"';} ?>><a href="supporteznous.php">Supportez-nous</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <li><a href="contact.php"><span class="glyphicon glyphicon-user"></span> Contact</a></li>
        <li><a href="#" id="login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
</div>