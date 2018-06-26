<?php


extract($_POST);	//extraer todos los valores del metodo post del formulario de actualizar
require("connect_db.php");
$sentencia="UPDATE producto set  idproducto='$id', producto='$producto', estado_producto='$estado_producto', lugar_destino='$destino_producto' where idproducto='$id'";
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
$resent=mysqli_query($mysqli,$sentencia);
if ($resent==null) {
    echo "Error de procesamieno no se han actualizado los datos";
    echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
    header("location: admin.php");

    echo "<script>location.href='admin.php'</script>";
}else {
    echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';

    echo "<script>location.href='admin.php'</script>";


}
?>