<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scaleble=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    <link rel="stylesheet" href="../CSS/index1.css">



</head>

<body>
    <div class="cabecera">
        <?php
        include("cabecera.php");
        ?>

    </div>

    <div class="contenedor">

    <!-- hola -->

        <div class="ancholetras">
            <div class="texto">
                <h2>Bakery Lovers</h2>
                <p>EL PLACER DE COMER AHORA MÁS CERCA DE TI, VISITA NUESTRAS SUCURSALES</p>
                <br>
                <div class="click">
                    <a href="sucuCuenca.php">click AQUÍ</a>
                </div>
            </div>
        </div>
        <div id="fondo1"></div>

        <div class="salto"></div>

        <section class="bienv">

            <div class="imagenbienv">
                <img src="../images/69.jpg" alt="" id="img">
            </div>


            <div id="int">
                <h4>Acerca de Nosotros</h4>
                <p>
                    CocoLate Bakery es un equipo comprometido de personas talentosas que ofrecen panadería,
                    pastelería de calidad superior elaborados con la mejor materia prima del mercado. Nuestro
                    objetivo es proporcionar a todos nuestros clientes un producto y una experiencia sin igual.
                </p>
                <p>
                    Brindamos constantemente un excelente servicio al cliente y creemos que la satisfacción del
                    cliente es nuestro objetivo final, además estamos aquí para ayudarlo a celebrar los momentos
                    de la vida, grandes y pequeños.
                </p>
            </div>



        </section>


        <div class="line">
            <div class="linea"></div>
            <section class="wap">

                <section class="columna">
                    <h3>PIDA COCOLATE BAKERY A DOMICILIO</h3>

                    <div class="columnasx3">
                        <img src="../images/panes/lobster-tail-pastry.jpg" alt="">
                        <a href="pan.php">COMPRAR PANES</a>
                    </div>


                    <div class="columnasx3">
                        <img src="../images/tortas/rainbow-cake2.jpg" alt="">
                        <a href="cake.php">COMPRAR TORTAS & CUPCAKES </a>

                    </div>
                    <div class="columnasx3">
                        <img src="../images/galletas/chocolate-chip-cookies.jpg" alt="">
                        <a href="cookies.php">COMPRAR GALLETAS</a>
                    </div>

                </section>
            </section>
        </div>


    </div>
    
    <?php
    include("piepagina.php");
    ?>

</body>

</html>