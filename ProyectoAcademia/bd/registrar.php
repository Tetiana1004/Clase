<?php
require_once "conexion1.php";

mysqli_query($conexion, "INSERT INTO userdatos(Nombre_de_estudiante,Identificacion, Direccion, Telefono, Emeil,Python,Horario)VALUES('$_REQUEST[Nombre_de_estudiante]', '$_REQUEST[Identificacion]', '$_REQUEST[Direccion]', 
'$_REQUEST[Telefono]', '$_REQUEST[Emeil]', '$_REQUEST[Python]', '$_REQUEST[Horario]')") 

or die ("Poblema en el select" . mysqli_error($conexion));
echo "Se han registrado tus datos";
?>