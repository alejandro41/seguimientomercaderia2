<?php
require_once 'config.php'; // llamo al archivo de configuración base
require_once 'conexion.php';// Llamada a la conexión de Bases de Datos



$respuesta = $_POST;
$codigo = $respuesta['codigo'];
$nomcolegio    =  $respuesta['nombrecolegio'];
$nomdirector  = $respuesta['nombredirector'];
$direccion  =    $respuesta['direccion'];


$resultados='';


$sql="SELECT * from producto WHERE idproducto='$codigo'";
$result=$db ->query($sql);
if(mysqli_num_rows($result)>0)
{

    echo $resultados='El codigo del establecimiento ya existe intente nuevamente';

}else{

    $sql = "INSERT INTO producto (`idproducto`, `producto`, `estado_producto` , `lugar_destino`  ) VALUES ( '$codigo','$nomcolegio','$nomdirector','$direccion');";

    $insertar = $db->query($sql);

    echo '<script>alert("PRODUCTO AGREGADO")</script> ';
    echo "<script>location.href='admin.php'</script>";



}

?>
<!DOCTYPE html>
<html lang="en">
<head>




    <title>Establecimiento</title>


</head>




</body>
</html>