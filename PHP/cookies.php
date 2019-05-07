<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scaleble=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cake</title>
    <link rel="stylesheet" href="../CSS/producto.css">
</head>

<body>
    <?php
    include("cabecera.php");
    ?>

    <div class="contenido">


        <div class="sub">
            <div class="tit">
                <h4>Galletas</h4>
            </div>
            <div class="hiper">
                <a href="pan.php">Panes</a>
                <a href="cake.php">Tortas & Cupcakes</a>
                <a href="cookies.php">Galletas</a>
                <a href="#Favoritos">Favoritos</a>
            </div>

        </div>

        <section class="wap">

            <section class="contenedor-columnas">

                <div class="columnasx4">
                    <img src="../images/galletas/chocolate-chip-cookies.jpg" alt="">
                    <a href="#COMPRA PANES">Chocolate Chips &nbsp; $15.95</a>
                </div>


                <div class="columnasx4">
                    <img src="../images/galletas/cookie-tray.jpg" alt="">
                    <a href="#COMPRA TORTAS">Galletas de Mantequilla &nbsp; $9.95</a>
                </div>


                <div class="columnasx4">
                    <img src="../images/galletas/cookies.jpg" alt="">
                    <a href="#COMPRA GALLETAS">Galletas Jengibre &nbsp; $10.95</a>
                </div>


                <div class="columnasx4">
                    <img src="../images/galletas/Galletas María.jpg" alt="">
                    <a href="#COMPRA PANES">Galletas María &nbsp; $25.95</a>
                </div>
            </section>





            <section class="contenedor-columnas-1">
                <div class="columnasx4">
                    <img src="../images/galletas/rainbow-cookie.jpg" alt="">
                    <a href="#COMPRA TORTAS">Galletas Arcoiris &nbsp; $19.95</a>
                </div>


                <div class="columnasx4">
                    <img src="../images/galletas/raspberry-almond-cookie.jpg" alt="">
                    <a href="#COMPRA GALLETAS">Galletas de Almendras &nbsp; $14.95</a>

                </div>


                <div class="columnasx4">
                    <img src="../images/galletas/salted-pistachio-cookie.jpg" alt="">
                    <a href="#COMPRA PANES">Galletas de Pistacho&nbsp; $12.95</a>

                </div>

                <div class="columnasx4">
                    <img src="../images/galletas/Galletas de menta y chocolate.jpg" alt="">
                    <a href="#COMPRA PANES">Menta y chocolate &nbsp; $49.95</a>

                </div>

            </section>

        </section>


        



        <!-- pie de pagina -->
        <?php
        include("piepagina.php");
        ?>
    </div>
</body>

</html>