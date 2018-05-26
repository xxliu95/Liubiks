<!DOCTYPE html>
<html lang="en">

    <?php include "template/templatehead.php" ?>

<body id="page-top">

    <?php include "template/templatenavbar.php" ?>


<!-- Header -->
<header class="masthead">
    <div class="container">
        <div class="intro-text">
            <div class="intro-heading text-uppercase">¿CÓMO EMPEZAR?</div>
        </div>
    </div>
</header>

<!-- Tutorial -->
<section id="tutorial">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-left">
                <h2 class="section-heading text-uppercase">Método de principiantes</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-left">
                <p>
                    Hay muchas maneras de resolver el cubo de rubik, aquí os vamos a enseñar
                    el método más sencillo.
                </p>
                <h4>Pasos:</h4>
                <ol>
                    <li><a href="tutoriales.php#paso1">Cruz blanca</a></li>
                    <li><a href="tutoriales.php#paso2">Esquinas blancas</a></li>
                    <li><a href="tutoriales.php#paso3">Segunda capa</a></li>
                    <li><a href="">Cruz amarilla</a></li>
                    <li><a href="">Laterales amarillas</a></li>
                    <li><a href="">Orientación de las esquinas amarillas</a></li>
                </ol>
                <p>
                    Primero tengo que introducir la nomenclatura que vamos a usar en el tutorial:
                </p>
            </div>
            <div class="col-md-8 text-left">
                <ul>
                    <li>F: front</li>
                    <li>R: right</li>
                    <li>L: left</li>
                    <li>U: up</li>
                    <li>D: down</li>
                </ul>
                <p>
                    Si no pone nada es un giro de 90º en el sentido del reloj.
                </p>
                <p>
                    Si la letra lleva un apóstrofe (') es 90º en sentido contrario al reloj.
                </p>
            </div>
            <div class="col-md-4 col-sm-12 text-center">
                <img src="img/tutorial/moves.png" alt="" style="width: 130px">
            </div>
        </div>
    </div>
</section>

<!-- Paso 1 -->
<section id="paso1" class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-left">
                <h4>1. Cruz blanca</h4>
                <p>
                    Este es el paso más sencillo, no hay ninguna fórmula. Intenta crear una cruz
                    blanca con los colores que coincida con los del centro.
                    Aquí teneís un ejemplo de cómo debe quedar:
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 text-center">
                <img src="img/tutorial/1.svg" alt="">
                <p class="text-muted">Así debe quedar</p>
            </div>
            <div class="col-md-6 text-center">
                <img src="img/tutorial/2.svg" alt="">
                <p class="text-muted">Así está mal</p>
            </div>
        </div>
    </div>
</section>

<!-- Paso 2 -->
<section id="paso2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-left">
                <h4>2. Esquinas blanca</h4>
                <p>
                    El objetivo de este paso es conseguir la primera capa, con la cara de
                    color blanco.
                    A continuación teneís los diferentes casos:
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 text-center">
                <img src="img/tutorial/3.png" alt="" width="150px">
                <p class="text-muted">R' D' R</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="img/tutorial/4.png" alt="" width="150px">
                <p class="text-muted">F D F'</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="img/tutorial/5.png" alt="" width="150px">
                <p class="text-muted">R' D2 R D R' D' R</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p>Este es el resultado de este paso:</p>
            </div>
            <div class="col-lg-12 text-center">
                <img src="img/tutorial/6.svg" alt="">
            </div>
        </div>
    </div>
</section>

<!-- Paso 3 -->
<section id="paso3" class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-left">
                <h4>En construcción</h4>
            </div>
        </div>
    </div>
</section>

    <?php include "template/templatefooter.php" ?>

    <?php include "template/templatescripts.php" ?>

<!-- jQuery script-->
<script>
    $(document).ready(function(){
        $("img").hover(function(){
            $(this).animate({height: '+=20px',width: '+=20px'}, 300);
        }, function () {
            $(this).animate({height: '-=20px',width: '-=20px'}, 300);
        });
    });
</script>

</body>

</html>
