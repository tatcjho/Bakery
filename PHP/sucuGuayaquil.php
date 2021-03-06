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
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin&display=swap" rel="stylesheet">
    <script src="../js/sucursales.js"></script>
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
    <div id="subcabecera">
        <div id="contSubcabecera">
            <?php
            include("../archivosSecu/subcabecera.php");
            ?>
        </div>
    </div>
    <!-- <div class="contenido">
        <br>
        <div class="ancholetras">
            <div class="texto">
                <p>COCOLATE GUAYAQUIL</p>
            </div>
        </div>
        <div class="fondo1"></div>
    </div> -->
    <div class="sli">
        <br>
        <ul class="slides">
            <input type="radio" name="radio-btn" id="img-1" checked />
            <li class="slide-container">
                <div class="slide">
                    <img src="../images/panederias/10.jpg" />
                </div>
                <div class="nav">
                    <label for="img-6" class="prev">&#x2039;</label>
                    <label for="img-2" class="next">&#x203a;</label>
                </div>
            </li>

            <input type="radio" name="radio-btn" id="img-2" />
            <li class="slide-container">
                <div class="slide">
                    <img src="../images/panederias/8.jpg" />
                </div>
                <div class="nav">
                    <label for="img-1" class="prev">&#x2039;</label>
                    <label for="img-3" class="next">&#x203a;</label>
                </div>
            </li>

            <input type="radio" name="radio-btn" id="img-3" />
            <li class="slide-container">
                <div class="slide">
                    <img src="../images/panederias/4.jpg" />
                </div>
                <div class="nav">
                    <label for="img-2" class="prev">&#x2039;</label>
                    <label for="img-4" class="next">&#x203a;</label>
                </div>
            </li>

            <input type="radio" name="radio-btn" id="img-4" />
            <li class="slide-container">
                <div class="slide">
                    <img src="../images/panederias/3.jpg" />
                </div>
                <div class="nav">
                    <label for="img-3" class="prev">&#x2039;</label>
                    <label for="img-5" class="next">&#x203a;</label>
                </div>
            </li>
            <input type="radio" name="radio-btn" id="img-5" />
            <li class="slide-container">
                <div class="slide">
                    <img src="../images/panederias/5.jpg" />
                </div>
                <div class="nav">
                    <label for="img-4" class="prev">&#x2039;</label>
                    <label for="img-6" class="next">&#x203a;</label>
                </div>
            </li>
            <li class="nav-dots">
                <label for="img-1" class="nav-dot" id="img-dot-1"></label>
                <label for="img-2" class="nav-dot" id="img-dot-2"></label>
                <label for="img-3" class="nav-dot" id="img-dot-3"></label>
                <label for="img-4" class="nav-dot" id="img-dot-4"></label>
                <label for="img-5" class="nav-dot" id="img-dot-5"></label>
            </li>
        </ul>
    </div>
    <div class="conte">
        <h1>Acerca de Nosotros</h1>
        <div>
            <p><b>Cocolate </b> cuenta con personal altamenta capacitado para que vivas una experiencia única de principio
                a fin, estamos comprometidos en brindarte el mejor servicio ademas de ofrecerle productos del dia y
                de la más alta calidad. Nuestros ingredientes frescos y listos para darte una experiencia de sabor unica
                cuentan con estandares de calidad que certifican la pureza y frescura de nuestros ingredientes asi
                como de nuestros productos.</p>

            <p>Ven y visitanos en nuestro nuevo y renovado local, estamos ubicados en la <b>Robles 104 y Chambers
                </b> a 100 mts de la <b>Universidad Politecnica Salesiana</b>, aqui podras encontrar
                una gran variedad de panes, galletas y nuestras exquisitas tortas. Ademas si eres amante de los bocadillos
                y cupcakes aqui los encontraras, tenemos disponibles más de cien deliciosas opciones para satisfacerte. Ven y vive
                la experiencia <b>Cocolate. </b> </p>
        </div>
        <br>
        <div class="contenedor">
            <div class="acercaTienda">

                <div class="horario">
                    <h2>Horario de Antencion</h2>
                    <br>
                    <p> Lunes a Viernes de 7:00 am a 18:00 pm </p>
                    <p> Sabado y Domingo de 9:00 am a 17:00 pm</p>
                </div>

                <div class="datos">
                    <h2>Contactos</h2>
                    <br>
                    <p><i class="fas fa-phone"></i> <a href="tel:0969415550">0969415550</a></p>
                    <p><i class="fas fa-phone-volume"></i> <a href="tel:+074092675">(07)+4092675</a></p>
                    <p><i class="fas fa-envelope-open-text"></i> <a href="mailtoo:cocolate@outlok.com">cocolate@outlook.com</a></p>
                    <p><i class="fas fa-map-marked-alt"></i> Robles 104 y Chambers</p>
                </div>
            </div>



            <div id="map" class="map"> </div>
            <script>
                // Initialize and add the map
                function initMap() {
                    var directionsService = new google.maps.DirectionsService;
                    var directionsDisplay = new google.maps.DirectionsRenderer;

                    navigator.geolocation.getCurrentPosition(fn_ok, fn_mal);

                    function fn_mal() {}

                    function fn_ok(rta) {
                        var lat = rta.coords.latitude;
                        var lon = rta.coords.longitude;

                        var start = {
                            lat: lat,
                            lng: lon
                        };

                        var waypts = [{
                            location: {
                                lat: -2.154465,
                                lng: -79.895118
                            },
                            stopover: true
                        }, {
                            location: {
                                lat: lat,
                                lng: lon
                            },
                            stopover: true
                        }];

                        console.log(lat, lon)


                        var map = new google.maps.Map(document.getElementById('map'), {
                            zoom: 6,
                            center: {
                                lat: waypts[0].location.lat,
                                lng: waypts[0].location.lng
                            }
                        });
                        directionsDisplay.setMap(map);
                        directionsService.route({
                            origin: {
                                lat: waypts[0].location.lat,
                                lng: waypts[0].location.lng
                            },
                            destination: {
                                lat: waypts[1].location.lat,
                                lng: waypts[1].location.lng
                            },
                            waypoints: waypts,
                            travelMode: google.maps.TravelMode.WALKING
                        }, function(response, status) {
                            if (status === 'OK') {
                                directionsDisplay.setDirections(response);
                            } else {
                                window.alert('Directions request failed due to ' + status);
                            }
                        });
                    }
                }
            </script>






            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD2wESqJq6cIkEb7WMUZswtEoGVtyL4rkM&callback=initMap" async defer></script>
        </div>
        <br>
        <br>
    </div>
    <?php
    include("piepagina.php");
    ?>
</body>

</html>