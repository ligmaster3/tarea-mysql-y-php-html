<?php

$conexion = mysqli_connect("localhost" , "root","","empresavirtual");

if (!$enlace) {
    echo "se ha logrado conectar a MySQL y a la base de datos.";
}else{
    echo "Error: No se ha logrado conectar a MySQL y a la base de datos.";
}
    exit;


?>