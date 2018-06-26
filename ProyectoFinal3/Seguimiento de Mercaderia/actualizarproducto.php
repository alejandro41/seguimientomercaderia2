<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
    header("Location:index.php");
}
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Administradr Producto</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Luis Gatica">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
</head>
<body data-offset="40" background="images/fondotot.jpg" style="background-attachment: fixed">
<div class="container">
    <header class="header">
        <div class="row">
            <?php
            include("include/cabecera.php");
            ?>
        </div>
    </header>

    <!-- Navbar
      ================================================== -->


    <div class="navbar">
        <div class="navbar-inner">
            <div class="container">
                <div class="nav-collapse">
                    <ul class="nav">
                        <li class=""><a href="admin.php">ADMINISTRADOR DEL PRODUCTO</a></li>


                    </ul>
                    <form action="#" class="navbar-search form-inline" style="margin-top:6px">

                    </form>
                    <ul class="nav pull-right">
                        <li><a href="">Bienvenido <strong><?php echo $_SESSION['user'];?></strong> </a></li>
                        <li><a href="desconectar.php"> Cerrar Cesión </a></li>
                    </ul>
                </div><!-- /.nav-collapse -->
            </div>
        </div><!-- /navbar-inner -->
    </div>

    <!-- ======================================================================================================================== -->
    <div class="row">



        <div class="span12">

            <div class="caption">

                <!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
                <h2> Administración de producto registrados</h2>
                <div class="well well-small">
                    <hr class="soft"/>
                    <h4>Edición de producto</h4>
                    <div class="row-fluid">

                        <?php
                        extract($_GET);
                        require("connect_db.php");

                        $sql="SELECT * FROM producto WHERE idproducto=$id";
                        //la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
                        $ressql=mysqli_query($mysqli,$sql);
                        while ($row=mysqli_fetch_row ($ressql)){
                            $id=$row[0];
                            $producto=$row[1];
                            $estado_producto=$row[2];
                            $destino_producto=$row[3];

                        }



                        ?>

                        <form action="ejecutaractualizar2.php" method="post">
                            Id<br><input type="text" name="id" value= "<?php echo $id ?>" readonly="readonly"><br>
                            Producto<br> <input type="text" name="producto" value="<?php echo $producto?>"><br>
                            Estado <br> <input type="text" name="estado_producto" value="<?php echo $estado_producto?>"><br>
                            Destino<br> <input type="text" name="destino_producto" value="<?php echo $destino_producto?>"><br>


                            <br>
                            <input type="submit" value="Guardar" class="btn btn-success btn-primary">
                        </form>




                        <div class="span8">

                        </div>
                    </div>
                    <br/>



                    <!--EMPIEZA DESLIZABLE-->

                    <!--TERMINA DESLIZABLE-->





                </div>






                <!--///////////////////////////////////////////////////Termina cuerpo del documento interno////////////////////////////////////////////-->
            </div>

        </div>
    </div>
    <!-- Footer
          ================================================== -->
    <hr class="soften"/>
    <footer class="footer">

        <hr class="soften"/>
        <p>&copy; CREADO POR LUIS LILLO Y LUIS GATICA <br/><br/></p>
    </footer>
</div><!-- /container -->

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="bootstrap/js/jquery-1.8.3.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</style>
</body>
</html>
