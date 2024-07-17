<?php
require_once "conexion1.php";

mysqli_query($conexion, "INSERT INTO notas(nombre, identificacion, calificacion)VALUES('$_REQUEST[nombre]', '$_REQUEST[identificacion]', '$_REQUEST[calificacion]')") 

or die ("Poblema en el select" . mysqli_error($conexion));


header('location: http://localhost/proyectoacademia/registro_notas1.php');
?>