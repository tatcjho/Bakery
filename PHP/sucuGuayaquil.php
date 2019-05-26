<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/sucursales.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" />
    <script src="../js/sucursales.js"></script>
</head>

<body>

    <?php
    include("cabecera.php")
    ?>

    <div class="contenido">

        <div class="sub">
            <div class="tit">
                <h4>Guayaquil</h4>
            </div>
            <?php
            include("../archivosSecu/subcabecera.php");
            ?>

        </div>

        <section class="columna">

            <div class="imagen">
                <img src="../images/panederias/Guayaquil.jpg" alt="">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo totam, eligendi placeat labore,
                    neque voluptate expedita dicta aliquam quia voluptatem impedit illo sit fugit ea! Ratione eaque
                    fugiat voluptatibus dolorum dignissimos? Labore temporibus obcaecati iusto vero, harum tempore
                    corporis, quas nostrum aperiam inventore ut maxime odio debitis illum dignissimos ad.
                </p>
            </div>

        </section>

        

        <div class="conte">
            <h1>Acerca de nostros</h1>


            <div class="contenedor">


                <div class="acercaTienda">

                    <div class="horario">
                        <h2>Horario de Antencion</h2>
                        <br>
                        <p> Lunes a Viernes de 7:00 am a 6:00 pm </p>
                        <p> Sabado y Domingo de 9:00 am a 5:00 pm</p>
                    </div>

                    <div class="datos">
                        <h2>Contactos</h2>
                        <br>
                        <p><i class="fas fa-phone"></i> <a href="tel:0969415550">0969415550</a></p>
                        <p><i class="fas fa-phone-volume"></i> <a href="tel:+074092675">(07)+4092675</a></p>
                        <p><i class="fas fa-envelope-open-text"></i> <a href="mailtoo:cocolate@outlok.com">cocolate@outlok.com</a></p>
                        <p><i class="fas fa-map-marked-alt"></i> Av. Francisco de Orellana</p>
                    </div>

                </div>


                <div id="map" class="map"> </div>
                <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"></script>

                <link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css" />
                <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
                <script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js"></script>
                <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>

                <script>
                    var divMapa = document.getElementById('map');

                    navigator.geolocation.getCurrentPosition(fn_ok, fn_mal);

                    function fn_mal() {}

                    function fn_ok(rta) {
                        var lat = rta.coords.latitude;
                        var lon = rta.coords.longitude;
                        var tienlat = '-2.154465'
                        var tienlon = '-79.895118'
                        console.log(lat, lon);
                        sucursales(lat, lon, tienlat, tienlon);
                    }
                </script>


            </div>
            <br>



        <?php
        include("piepagina.php");
        ?>


    </div>



</body>

</html>