<?php
$db = new mysqli("localhost", "$db_user", "$db_pass", "$db_name");

//* comprobar la conexión */

if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    echo 'Error, no se pudo conectar al servidor, porfavor intentelo nuevamente';
    exit();
}
