
<?php
$conexion=mysqli_connect("localhost","root","","academia1") or die ("problema con la coneccion");

$registros=mysqli_query($conexion,"SELECT * From notas WHERE identificacion='$_REQUEST[identificacion]'") or die ("problema en el select". mysqli_error($conexion));

if($reg=mysqli_fetch_array($registros)){
    

?>

  
<form action="modificar2.php" method="post">

<label for="">Ingrese nota a modificar:</label>
<input type="text" name="nota_nueva" value="<?php echo $reg['identificacion']?>">
<br>
<input type="hidden" name="nota" value="<?php echo $reg['identificacion']?>">

<input type="submit"  value="modificar">

</form>
<?php
}else{
    echo "no existe el registro";
}


?>
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>








