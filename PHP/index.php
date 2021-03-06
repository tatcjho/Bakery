<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scaleble=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    <link rel="stylesheet" href="../CSS/index1.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
</head>

<body>

  <?php
    include("../archivosSecu/loader.php")
  ?>

    <div class="cabecera">
        <?php
        include("cabecera.php");
        ?>
    </div>

    <div class="contenedor">
        <div class="ancholetras">
            <div class="texto">
                <h2>Bakery Lovers</h2>
                <p>EL PLACER DE COMER AHORA MÁS CERCA DE TI, VISITA NUESTRAS SUCURSALES</p>
                <br>
                <div class="click"><a href="sucuCuenca.php">CLICK AQUÍ</a></div>
            </div>
        </div>
        <div class="fondo1"></div>

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
                <br>
                <h5> Misión</h5>
                <p>
                    Somos una empresa cuya misión es ofrecer productos de panadería, repostería, cafetería y refrigerios en general de la más alta calidad con un excelente sabor y aun precio accesible.
                    Establecer un liderazgo con la colaboración y creatividad de nuestro talento humano, utilizando las mejores materias primas del mercado para satisfacer a nuestros clientes.
                </p>
                <br>
                <h5>Visión</h5>
                <p>
                    Ser una empresa líder en el negocio de panadería y repostería reconocida en la zona norte del país. Destacarnos por la calidad y sabor de nuestros productos, atención y servicio al cliente.
                    Utilizando los más altos estándares de calidad y tecnología de vanguardia en nuestros procesos productivos.

                </p>
            </div>
        </section>
        <br>
        <hr>

        <div class="line">
            <section class="wap">
                <section class="columna">
                    <h3>PIDA COCOLATE BAKERY A DOMICILIO</h3>
                    <div class="columnasx3">
                        <img src="../images/panes/lobster-tail-pastry.jpg" alt="">
                        <div class="prueba">
                            <a href="Carrito/Panes/index.php">COMPRAR PANES</a>
                        </div>
                    </div>


                    <div class="columnasx3">
                        <img src="../images/tortas/rainbow-cake2.jpg" alt="">
                        <div class="prueba">
                            <a href="Carrito/Tortas/index.php">COMPRAR TORTAS & CUPCAKES </a>
                        </div>
                    </div>
                    <div class="columnasx3">
                        <img src="../images/galletas/chocolate-chip-cookies.jpg" alt="">
                        <div class="prueba">
                            <a href="Carrito/Galletas/index.php">COMPRAR GALLETAS</a>
                        </div>

                    </div>

                </section>
            </section>
        </div>
    </div>
    <?php
    include("piepagina.php");
    ?>
    <!-- <script src="../js/loader.js"></script> -->
</body>

</html>