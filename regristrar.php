<?php

include("conexion.php"); 

$nombretempl = $_POST["nombre"];
$apellidotempl = $_POST["apellido"];
$cedulatmpl = $_POST["cedula"];
$emailtempl = $_POST["email"];
$generotempl = $_POST["genero"];

//Sentencia SQL: Guardar Registros.

$query = "INSERT INTO empleados (nombre,apellido,cedula,email,genero) 
VALUES ('$nombretempl,$apellidotempl,$cedulatmpl,$emailtempl,$generotempl')";

$result = mysqli_query($enlace,$query);

if ($result) {

echo '
    <script>
        alert("Información guardada");
        window.location = "../index.html";
        <script>

  ';
}else {
    echo '
    <script>
      alert("fallo en la almacenamientos de datos");
      window.location = "../index.html";
      <script>
  ';
}

?>

