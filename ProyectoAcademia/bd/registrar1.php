<?php
require_once "conexion1.php";

mysqli_query($conexion, "INSERT INTO userdatos(nombre, apellido, dni, calificacion)VALUES('$_REQUEST[nombre]', '$_REQUEST[apellido]', '$_REQUEST[dni]', '$_REQUEST[calificacion]')") or die ("Poblema en el select" . mysqli_error($conexion1));
echo "Se han registrado tus datos";
?>