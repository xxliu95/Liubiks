<!DOCTYPE html>
<html lang="en">

    <?php include "template/templatehead.php" ?>

<body id="page-top">

    <?php include "template/templatenavbar.php" ?>


<!-- Header -->
<header class="masthead">
    <div class="container">
        <div class="intro-text">
            <div class="intro-lead-in">Comparte tu fotos de cubos!</div>
            <div class="intro-heading text-uppercase">Galería</div>
        </div>
    </div>
</header>


<?php
$dirname = "img/galeria/";
$images = glob($dirname."*.*");
$bgboolean = true;

foreach($images as $image) {
    if($bgboolean){
        echo '<section class="bg-light">';
        echo '<div class="container">';
        echo '<img src="'.$image.'" style="width: 100%; align-items: center"/><br />';
        echo '</div>';
        echo '</section>';
        $bgboolean = false;
    } else {
        echo '<section>';
        echo '<div class="container">';
        echo '<img src="'.$image.'" style="width: 100%; align-items: center"/><br />';
        echo '</div>';
        echo '</section>';
        $bgboolean = true;
    }
}
?>

<!-- Subir -->
<section id="subir" class="bg-light">
    <div class="container">
        <div class="row">
            <h2 class="section-heading text-uppercase subefoto">Sube tu foto:</h2>
            <p style="padding: 5%"></p>
        </div>
        <div class="row">
            <form action="subefoto.php" method="post" enctype="multipart/form-data">
                <input type="file" name="foto" id="foto" />
                <p style="padding: 5%"></p>
                <button type="submit" class="btn btn-primary btn-xl text-uppercase js-scroll-trigger">subir</button>
            </form>
            <style>
                input#foto{
                    color: transparent;
                }
                .subefoto{
                    color: white;
                }
            </style>
        </div>
    </div>
</section>

    <?php include "template/templatefooter.php" ?>

    <?php include "template/templatescripts.php" ?>

</body>

</html>