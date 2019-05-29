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


    <!--CSS TIPO-->
    <link rel="stylesheet" href="../CSS/producto.css">

    <!--FONT TYPE-->
    <link href="https://fonts.googleapis.com/css?family=Heebo" rel="stylesheet">

    <title>Cake</title>
</head>

<body>

    <?php
    include("cabecera.php");
    ?>
    <br>
    <br>
    <br>
    <br>

    <div class="container">


        <div class="sub">
            <div class="tit">
                <h4>Tortas & Cupcakes</h4>
            </div>
            <div class="hiper">
                <a href="panes.php">Panes</a>
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
                title="Torta de Caramelo"
                class="card-img-top" 
                src="../images/tortas/caramel-cake.jpg" alt="">
                <div class="card-body">
                    <h5 class="card-title">$35.00</h5>
                    <p class="card-text">Descripcion</p>
                    <button class="btn btn-primary" name="btnAccion"  value="Agregar" type="submit" >Agregar al Carrito</button>
                </div>
            </div>
        </div>

        <div class="col-3">
            <div class="card">
                <img 
                title="Torta de Zanahoria"
                class="card-img-top" 
                src="../images/tortas/carrot-cake.16624e888a61bd952d67b8980e2a6bdf.jpg" alt="">
                <div class="card-body">
                    <h5 class="card-title">$45.25</h5>
                    <p class="card-text">Descripcion</p>
                    <button class="btn btn-primary" name="btnAccion"  value="Agregar" type="submit" >Agregar al Carrito</button>
                </div>
            </div>
        </div>

        <div class="col-3">
            <div class="card">
                <img 
                title="Torta de Chocolate"
                class="card-img-top" 
                src="../images/tortas/chocolate-fudge-cake.jpg" alt="">
                <div class="card-body">
                    <h5 class="card-title">$50.75</h5>
                    <p class="card-text">Descripcion</p>
                    <button class="btn btn-primary" name="btnAccion"  value="Agregar" type="submit" >Agregar al Carrito</button>
                </div>
            </div>
        </div>

        <div class="col-3">
            <div class="card">
                <img 
                title="Torta Oreo"
                class="card-img-top" 
                src="../images/tortas/cookies-and-cream-cake.jpg" alt="">
                <div class="card-body">
                    <h5 class="card-title">$60.75</h5>
                    <p class="card-text">Descripcion</p>
                    <button class="btn btn-primary" name="btnAccion"  value="Agregar" type="submit" >Agregar al Carrito</button>
                </div>
            </div>
        </div>

        <div class="col-3">
            <div class="card">
                <img 
                title="Torta Arcoiris"
                class="card-img-top" 
                src="../images/tortas/rainbow-cake.jpg" alt="">
                <div class="card-body">
                    <h5 class="card-title">$60.25</h5>
                    <p class="card-text">Descripcion</p>
                    <button class="btn btn-primary" name="btnAccion"  value="Agregar" type="submit" >Agregar al Carrito</button>
                </div>
            </div>
        </div>

        <div class="col-3">
            <div class="card">
                <img 
                title="Torta Red Velvet"
                class="card-img-top" 
                src="../images/tortas/red-velvet-cake.jpg" alt="">
                <div class="card-body">
                    <h5 class="card-title">$70.00</h5>
                    <p class="card-text">Descripcion</p>
                    <button class="btn btn-primary" name="btnAccion"  value="Agregar" type="submit" >Agregar al Carrito</button>
                </div>
            </div>
        </div>

        <div class="col-3">
            <div class="card">
                <img 
                title="Torta de Vainilla"
                class="card-img-top" 
                src="../images/tortas/vanilla-fudge-cake.jpg" alt="">
                <div class="card-body">
                    <h5 class="card-title">$50.45</h5>
                    <p class="card-text">Descripcion</p>
                    <button class="btn btn-primary" name="btnAccion"  value="Agregar" type="submit" >Agregar al Carrito</button>
                </div>
            </div>
        </div>

    </div>

</div>


        <!---
        <section class="wap">

            <section class="contenedor-columnas">

                <div class="columnasx4">
                    <img src="../images/tortas/caramel-cake.jpg" alt="">
                    <div class="prueba">
                        <a href="#COMPRA PANES">Torta de Caramelo &nbsp; $30.95</a>
                    </div>
                </div>


                <div class="columnasx4">
                    <img src="../images/tortas/carrot-cake.16624e888a61bd952d67b8980e2a6bdf.jpg" alt="">
                    <div class="prueba">
                        <a href="#COMPRA TORTAS">Torta de Zanahoria &nbsp; $35.95</a>
                    </div>
                </div>


                <div class="columnasx4">
                    <img src="../images/tortas/chocolate-fudge-cake.jpg" alt="">
                    <div class="prueba">
                        <a href="#COMPRA GALLETAS">Torta de Chocolate &nbsp; $39.95</a>
                    </div>
                </div>


                <div class="columnasx4">
                    <img src="../images/tortas/cookies-and-cream-cake.jpg" alt="">
                    <div class="prueba">
                        <a href="#COMPRA PANES">Torta Oreo &nbsp; $29.95</a>
                    </div>
                </div>
            </section>





            <section class="contenedor-columnas-1">
                <div class="columnasx4">
                    <img src="../images/tortas/rainbow-cake.jpg" alt="">
                    <div class="prueba">
                        <a href="#COMPRA TORTAS">Torta Arco Iris &nbsp; $60.95</a>
                    </div>
                </div>


                <div class="columnasx4">
                    <img src="../images/tortas/red-velvet-cake.jpg" alt="">
                    <div class="prueba">
                        <a href="#COMPRA GALLETAS">Torta Red Velvet &nbsp; $50.95</a>
                    </div>

                </div>


                <div class="columnasx4">
                    <img src="../images/tortas/vanilla-fudge-cake.jpg" alt="">
                    <div class="prueba">
                        <a href="#COMPRA PANES">Torta de Vainilla &nbsp; $44.95</a>
                    </div>

                </div>

                <div class="columnasx4">
                    <img src="../images/tortas/torta selva negra.jpg" alt="">
                    <div class="prueba">
                        <a href="#COMPRA PANES">Torta Selva Negra &nbsp; $49.95</a>
                    </div>

                </div>

            </section>






        </section>

-->




<div class="pie">
            <?php
            include("piepagina.php");
            ?>
        </div>


    <!--</div> -->

</body>

</html>