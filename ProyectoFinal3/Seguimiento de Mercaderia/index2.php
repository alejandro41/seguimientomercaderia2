<!DOCTYPE html>

	<?php
	session_start();
	if (@!$_SESSION['user']) {
		header("Location:index.php");
	}elseif ($_SESSION['rol']==1) {
		header("Location:admin.php");
	}
	?>
<?php

$conexion=mysqli_connect('localhost','root','','seguimiento');
?>


<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Seguimiento Mercaderia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Luis Gatica">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>


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
<?php

include("include/menu.php");

?>
<!-- ======================================================================================================================== -->

<div id="myCarousel" class="carousel slide homCar">
		<div class="carousel-inner" style="border-top:18px solid #222; border-bottom:1px solid #222; border-radius:4px;">
		  <div class="item active">
			<img src="images/seguimiento.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>No pierdas de vista tus productos</h4>
				  <p>
                      Tenemos el mejor seguimiento de mercaderia del país siempre podrás ver donde estan tus productos.
				  </p>
			</div>
		  </div>
		  <div class="item">
			<img src="images/rapides.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Rapidez</h4>
				  <p>
                      La pagina mas rapida del internet no podras encontrar nada parecido.
				  </p>
			</div>
		  </div>
		  <div class="item">
			<img src="images/mapa.png" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>En donde este lo encontramos </h4>
				  <p>
				  No olvide que la clave del éxito es nuestra calidad de servicios.
				  </p>
			</div>
		  </div>
		</div>
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
</div>
<h3>ESTADO DE TUS PRODUCTOS</h3>
    <table border="1" >
        <tr>
            <td>Id Producto    </td>
            <td>Producto       </td>
            <td>Estado Producto     </td>

            <td>Lugar Destino     </td>

        </tr>

        <?php
        $sql="SELECT * from producto";
        $result=mysqli_query($conexion,$sql);

        while($mostrar=mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?php echo $mostrar['idproducto'] ?></td>
                <td><?php echo $mostrar['producto'] ?></td>
                <td><?php echo $mostrar['estado_producto'] ?></td>
                <td><?php echo $mostrar['lugar_destino'] ?></td>

            </tr>
            <?php
        }
        ?>
    </table>

<h3>NUESTROS SERVICIOS MAS SOBRESALIENTES</h3>
<div class="row">

	<div class="span4">
	<div class="thumbnail">
	<h3 style="text-align:center">Rapidez</h3>
	<img src="images/rapido.png" alt="#"/>
	<div class="caption">
	<h5>Descripción </h5>
	<p align="justify">
	Somos una empresa emprendedora la mas rapida del país tus productos llegaran antes de lo que crees.
	</p>

	<br/>
	</div>
	</div>
	</div>

	<div class="span4">
	<div class="thumbnail">
	<h3 style="text-align:center">Seguridad</h3>
	<img src="images/seguridad.jpg" />
	<div class="caption">
	<h5> Descripción</h5>
	<p align="justify">
    Tus productos vendran seguros sin la minima posibilad que se dañen o se pierdan.
	</p>

	<br/>
	</div>
	</div>
	</div>

	<div class="span4">
	<div class="thumbnail">
	<h3 style="text-align:center">Seguimiento</h3>
	<img src="images/static_qr_code_without_logo.jpg"/>
	<div class="caption">
	<h5>Descripción </h5>
	<p align="justify">
	Scanea tu codigo QR, para verificar tu recepción de producto de forma satisfactoria.
	</p>

	<br/>
	</div>
	</div>
	</div>
    <a href="#" class="button">Volver Arriba</a>

</div>
<hr/>

<!-- Footer
      ================================================== -->
<hr class="soften"/>
<footer class="footer">

<hr class="soften"/>

<p>&copy; CREADO POR: Luis Gatica y Luis Lillo, Coyhaique, 2018.- <br/><br/></p>

 </footer>
</div><!-- /container -->

    
	</style>
  </body>
</html>