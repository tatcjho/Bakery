<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/sucursales.css">
</head>

<body>

    <?php
    include("cabecera.php")
    ?>

    <div class="contenido">

        <div class="sub">
            <div class="tit">
                <h4>Cuenca</h4>
            </div>
            <div class="hiper">
                <a href="sucuCuenca.php">Cuenca</a>
                <a href="sucuQuito.php">Quito</a>
                <a href="sucuGuayaquil.php">Guayaquil</a>

            </div>

        </div>

        <section class="columna">

            <div class="imagen">
                <img src="../images/panederias/cuenca.jpg" alt="">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo totam, eligendi placeat labore,
                    neque voluptate expedita dicta aliquam quia voluptatem impedit illo sit fugit ea! Ratione eaque
                    fugiat voluptatibus dolorum dignissimos? Labore temporibus obcaecati iusto vero, harum tempore
                    corporis, quas nostrum aperiam inventore ut maxime odio debitis illum dignissimos ad.
                </p>
            </div>

        </section>

        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d996.1567008253714!2d-79.0664620707918!3d-2.9231783605070754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91cd2300736ff9fb%3A0x9a095d93e3366648!2zQmHDsW9z!5e0!3m2!1ses-419!2sec!4v1557204722135!5m2!1ses-419!2sec" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>


        <?php
        include("piepagina.php");
        ?>


    </div>



</body>

</html>