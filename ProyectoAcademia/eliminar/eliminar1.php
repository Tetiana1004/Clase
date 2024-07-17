<?php
$conexion=mysqli_connect("localhost","root","","academia1") or die ("problema con la coneccion");

$registros=mysqli_query($conexion,"SELECT nombre,calificacion FROM notas WHERE identificacion='$_REQUEST[identificacion]'") or die ("problema en el select". mysqli_error($conexion));

if($reg=mysqli_fetch_array($registros)){
    mysqli_query($conexion,"DELETE FROM notas WHERE identificacion='$_REQUEST[identificacion]'") or
    die ("problema en el select" . mysqli_error($conexion));
    echo "se efectuo el borrado adecuadamente";
}else{
    echo "no existe";
}
mysqli_close($conexion);

?>