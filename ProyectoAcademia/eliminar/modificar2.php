<?php
$conexion=mysqli_connect("localhost","root","","academia1") or die ("problema con la coneccion");

mysqli_query($conexion,"UPDATE notas SET identificacion='$_REQUEST[nota_nueva]' WHERE identificacion='$_REQUEST[nota]'") or die ("problema en el select" . mysqli_error($conexion));
echo "La nota fue modificar";


?>