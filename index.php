<!DOCTYPE html>
<html lang="en">

    <?php include "template/templatehead.php" ?>

<body id="page-top">

    <?php include "template/templatenavbar.php" ?>


<!-- Header -->
<header class="masthead">
    <div class="container">
        <div class="intro-text">
            <div class="intro-lead-in">¿Quieres aprender a resolver el cubo de rubik?</div>
            <div class="intro-heading text-uppercase">SIGUE ESTOS SIMPLES PASOS</div>
            <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="tutoriales.php">IR</a>
        </div>
    </div>
</header>

<!-- SpeedCubing -->
<section id="speedcubing">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Conoce SpeedCubing</h2>
                <h3 class="section-subheading text-muted">Quieres resolver el cubo en menos de 30 segundos?</h3>
            </div>

        </div>
        <div class="col-lg-12 text-center">
            <a id="CFOPButton" class="btn btn-primary btn-xl text-uppercase" href="https://www.iberorubik.com/tutoriales/3x3x3/m%C3%A9todo-fridrich-modificado-parte-1/">Método CFOP</a>
        </div>
    </div>
</section>



<!-- Videos -->
<section id="videos"  class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Videos interesantes</h2>
                <h3 class="section-subheading text-muted">Aquí os recomiendo videos y canales para aprender más sobre este mundo de puzles</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6">
                <div class="videos-yt col-md-12 embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/60NEfxS2OTQ" frameborder="0" allow=" encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="videos-yt col-md-12 embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/jNPdEP4gRpg" frameborder="0" allow=" encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="videos-yt col-md-12 embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/gsfkuhpFi98" frameborder="0" allow=" encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="videos-yt col-md-12 embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/ZB2IPOUGQsg" frameborder="0" allow=" encrypted-media" allowfullscreen></iframe>
                </div>
            </div>

        </div>
        <div class="canales row">
            <div class="col-lg-12 text-center">
                <h4 class="section-heading text-uppercase">Más videos:</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 text-center">
                <a href="https://www.youtube.com/user/KaiXevandStanley/">
                    <img class="logos" src="img/logos/logo4.jpg" width="80%" alt="">
                    <h4>Tony Fisher</h4>
                </a>
            </div>
            <div class="col-md-3 text-center">
                <a href="https://www.youtube.com/channel/UCqrvm_E2QrXgdB8QsOmZ2hg">
                    <img class="logos" src="img/logos/logo5.jpg"  width="80%"  alt="">
                    <h4>Crazy Bad Cuber</h4>
                </a>
            </div>
            <div class="col-md-3 text-center">
                <a href="https://www.youtube.com/channel/UCpm2hok50tHldh63tc17lcA">
                    <img  class="logos" src="img/logos/logo6.jpg" width="80%" alt="">
                    <h4>RedKB</h4>
                </a>
            </div>
            <div class="col-md-3 text-center">
                <a href="https://www.youtube.com/channel/UCDy1lHSVGBDL0d2_C5NZNJw">
                    <img  class="logos" src="img/logos/logo7.jpg" width="80%" alt="">
                    <h4>TheMaoiSha</h4>
                </a>
            </div>

        </div>
    </div>
</section>

<!-- Comprar -->
<section id="comprar">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">¿Dónde comprar?</h2>
                <h3 class="section-subheading text-muted">Aquí puedes comprar la mejor variedad de cubos</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 text-center">
                <a href="http://www.hknowstore.com/">
                    <img class="logos" src="img/logos/logo1.gif" width="80%" alt="">
                    <h4>HKNowStore</h4>
                </a>
            </div>
            <div class="col-md-4 text-center">
                <a href="http://www.thecubicle.us/">
                    <img class="logos" src="img/logos/logo2.png"  width="80%"  alt="">
                    <h4>The Cubicle</h4>
                </a>
            </div>
            <div class="col-md-4 text-center">
                <a href="http://www.lightake.com/">
                    <img  class="logos" src="img/logos/logo3.png" width="80%" alt="">
                    <h4>Lightake</h4>
                </a>
            </div>
        </div>
    </div>

</section>

<!-- Comentarios -->
<section id="comentarios" class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Comentarios:</h2>
            </div>
        </div>
        <div class="list-group">
            <?php
            require_once 'conectar.php';
            $sql = "SELECT nombre, comentario FROM Comentarios LIMIT 10";

            foreach ($db->query($sql) as $fila) {
                print "<br>"; ?>
                <?php
                echo '<a class="list-group-item"> <h4 class="list-group-item-heading">'.$fila['nombre'] . ':</h4><p class="list-group-item-text">'.$fila['comentario'] . '</p></a>' ;
            }
            ?>
        </div>
    </div>
</section>

<!-- Contacto -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="contacto text-uppercase">Deja un comentario:</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form id="contactForm" name="sentMessage" method="post" action="anadecomentario.php" enctype="multipart/form-data" novalidate>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input class="form-control" id="nombre" name="nombre" type="text" placeholder="Tu nombre *" required data-validation-required-message="Obligatorio">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea class="form-control" id="comentario" name="comentario" placeholder="Tu mensaje *" required data-validation-required-message="obligatorio"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                       <div class="col-md-12">
                               <?php
                               if (!empty($_REQUEST['error'])) {
                                   echo '<div class="alert alert-warning" role="alert">';
                                   echo "<p class='error'>" . $_REQUEST['error'] . "</p>";
                                   echo '</div>';
                               }
                               ?>
                       </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" data-toggle="modal" data-target="#enviarModal" type="submit">Enviar Mensaje</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</section>

    <?php include "template/templatefooter.php" ?>

    <?php include "template/templatescripts.php" ?>

</body>

</html>
