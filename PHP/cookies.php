<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scaleble=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!--JS-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <!--CSS-->
    <link rel="stylesheet" href="../CSS/producto.css">


    <title>Cake</title>

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

        <br>
        <br>

        <div class="container">

        <div class="row">
        <div class="col-3">
            <div class="card">
                <img 
                title="Choco Chips"
                class="card-img-top" 
                src="../images/galletas/chocolate-chip-cookies.jpg" alt="">
                <div class="card-body">
                    <h5 class="card-title">$0.90</h5>
                    <p class="card-text">Descripcion</p>
                    <button class="btn btn-primary" name="btnAccion"  value="Agregar" type="submit" >Agregar al Carrito</button>
                </div>
            </div>
        </div>

        
        <div class="container">

        <div class="row">
        <div class="col-3">
            <div class="card">
                <img 
                title="Galletas de Azucar"
                class="card-img-top" 
                src="../images/galletas/cookies.jpg" alt="">
                <div class="card-body">
                    <h5 class="card-title">$1.00</h5>
                    <p class="card-text">Descripcion</p>
                    <button class="btn btn-primary" name="btnAccion"  value="Agregar" type="submit" >Agregar al Carrito</button>
                </div>
            </div>
        </div>

        
        <div class="container">

        <div class="row">
        <div class="col-3">
            <div class="card">
                <img 
                title="Galletas Rellenas"
                class="card-img-top" 
                src="../images/galletas/cookie-tray.jpg" alt="">
                <div class="card-body">
                    <h5 class="card-title">$1.50</h5>
                    <p class="card-text">Descripcion</p>
                    <button class="btn btn-primary" name="btnAccion"  value="Agregar" type="submit" >Agregar al Carrito</button>
                </div>
            </div>
        </div>

        
        <div class="container">

        <div class="row">
        <div class="col-3">
            <div class="card">
                <img 
                title="Galletas Arcoiris"
                class="card-img-top" 
                src="../images/galletas/rainbow-cookie.jpg" alt="">
                <div class="card-body">
                    <h5 class="card-title">$35.00</h5>
                    <p class="card-text">Descripcion</p>
                    <button class="btn btn-primary" name="btnAccion"  value="Agregar" type="submit" >Agregar al Carrito</button>
                </div>
            </div>
        </div>

        
        <div class="container">

        <div class="row">
        <div class="col-3">
            <div class="card">
                <img 
                title="Galleta de Almendras"
                class="card-img-top" 
                src="../images/galletas/raspberry-almond-cookie.jpg" alt="">
                <div class="card-body">
                    <h5 class="card-title">$35.00</h5>
                    <p class="card-text">Descripcion</p>
                    <button class="btn btn-primary" name="btnAccion"  value="Agregar" type="submit" >Agregar al Carrito</button>
                </div>
            </div>
        </div>

        
        <div class="container">

        <div class="row">
        <div class="col-3">
            <div class="card">
                <img 
                title="Galletas de Pistacho"
                class="card-img-top" 
                src="../images/galletas/salted-pistachio-cookie.jpg" alt="">
                <div class="card-body">
                    <h5 class="card-title">$5.00</h5>
                    <p class="card-text">Descripcion</p>
                    <button class="btn btn-primary" name="btnAccion"  value="Agregar" type="submit" >Agregar al Carrito</button>
                </div>
            </div>
        </div>
    </div>



        
        <!--
        
        <section class="wap">

            <section class="contenedor-columnas">

                <div class="columnasx4">
                    <img src="../images/galletas/chocolate-chip-cookies.jpg" alt="">
                    <div class="prueba" >
                        <a href="#COMPRA PANES">Chocolate Chips &nbsp; $15.95</a>
                    </div>
                </div>


                <div class="columnasx4">
                    <img src="../images/galletas/cookie-tray.jpg" alt="">
                    <div class="prueba" >
                        <a href="#COMPRA TORTAS">Galletas de Mantequilla &nbsp; $9.95</a>
                    </div>
                </div>


                <div class="columnasx4">
                    <img src="../images/galletas/cookies.jpg" alt="">
                    <div class="prueba" >
                        <a href="#COMPRA GALLETAS">Galletas Jengibre &nbsp; $10.95</a>
                    </div>
                </div>


                <div class="columnasx4">
                    <img src="../images/galletas/Galletas María.jpg" alt="">
                    <div class="prueba" >
                        <a href="#COMPRA PANES">Galletas María &nbsp; $25.95</a>
                    </div>
                </div>
            </section>





            <section class="contenedor-columnas-1">
                <div class="columnasx4">
                    <img src="../images/galletas/rainbow-cookie.jpg" alt="">
                    <div class="prueba" >
                        <a href="#COMPRA TORTAS">Galletas Arcoiris &nbsp; $19.95</a>
                    </div>
                </div>


                <div class="columnasx4">
                    <img src="../images/galletas/raspberry-almond-cookie.jpg" alt="">
                    <div class="prueba" >
                        <a href="#COMPRA GALLETAS">Galletas Almendras &nbsp; $14.95</a>
                    </div>

                </div>


                <div class="columnasx4">
                    <img src="../images/galletas/salted-pistachio-cookie.jpg" alt="">
                    <div class="prueba" >
                         <a href="#COMPRA PANES">Galletas de Pistacho&nbsp; $12.95</a>
                    </div>

                </div>

                <div class="columnasx4">
                    <img src="../images/galletas/Galletas de menta y chocolate.jpg" alt="">
                    <div class="prueba" >
                         <a href="#COMPRA PANES">Menta y chocolate &nbsp; $49.95</a>
                    </div>

                </div>

            </section>

        </section>


        


-->

        <!-- pie de pagina -->
        <?php
        include("piepagina.php");
        ?>
   
</body>

</html>