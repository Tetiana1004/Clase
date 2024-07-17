<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
        <?php include('header.php')?>
        </header>
        <main>
        <div class="container">
            <div class="d-flex aling-items-center p-3 my-3 text-white bg-primary rounded shadow-sm">
                <h1>Coordinacion de horario</h1>
            </div>
            <div class="my-3 p-3 bg-body rounded shadow-sm">
                <h6 class="border-bottom pb-2 mb-0">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#form_modal">Agregar horario</button>
                </h6>
                <div class="d-flex text-muted pt-3">
<table class="table table-bordered">
    <thead class="btn-primary">
    <tr>
<th>#</th>
<th>Nombre</th>
<th>Apellido</th>
<th>Horario</th>
<th>Programas</th>

    </tr>
    </thead>

<tbody style="background-color: green;">

<?php 
require 'config.php';

$query=$db->prepare("SELECT * FROM personal");

$query->execute();

if ($query ->rowCount() == 0)  {
    echo '<tr>
            <td colspan="4"></td>
            <tr>';
}else {
    $n=0;
    $data = $query->fetchAll();
    foreach ($data as $value):

        $n++;
        echo '<tr>
        <td>'.$n.'</td>
        <td>'.$value["nombre"].'</td>
        <td>'.$value["apellido"].'</td>
        <td>'.$value["pais"].'</td>
        <td>'.$value["programas"].'</td>
        </tr>';
    endforeach;
    
   
}
$db = null;
?> -->

</tbody>
        <div>
        </div>
        </div>
        </table>
        </main>
    <div class="modal fade" id="form_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header btn-primary">
                    <h5 class="modal-title" id="exampleModalLabel"><b>Horario Programacion</b>¡</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
<!---------------Division--------------->
                </div>
            <form action="insert.php" method="">
            <div class="modal-body">
            <div class="col-md-12">
    <div class="mb-3">
        <label>Nombre</label>
        <input
            type="text"
            name="nombre"
            id=""
            class="form-control"
            placeholder=""
            required="required"
        />
    </div>
    </div>

    <!---------------Division--------------->
    </div>
            
            <div class="modal-body">
            <div class="col-md-12">
    <div class="mb-3">
        <label>Apellido</label>
        <input
            type="text"
            name="apellido"
            id=""
            class="form-control"
            placeholder=""
            required="required"
        />
    </div>
    </div>
    
    <!---------------Division--------------->
    </div>
            
            <div class="modal-body">
            <div class="col-md-12">
    <div class="mb-3">
        <label>Pais</label>
        <input
            type="text"
            name="pais"
            id=""
            class="form-control"
            placeholder=""
            required="required"
        />
    </div>
    </div>
    
    <!---------------Division--------------->
    </div>
            
            <div class="modal-body">
            <div class="col-md-12">
    <div class="mb-3">
        <label><b>Programas: </b></label>
        
    </div>

<div class="card bg-light" style="width: 100%;">
    <div class="card-body">
    <div class="row">
        <!---------------Division--------------->
        <div class="col-md-6">
        <div class="custom-control custom-checkbox mr-sm-2">
            <label><input type="checkbox" name="programas[]" value="java">Java</label>
        </div>
        </div>
        <!---------------Division--------------->
        <div class="col-md-6">
        <div class="custom-control custom-checkbox mr-sm-2">
            <label><input type="checkbox" name="programas[]" value="php">PHP</label>
        </div>
        </div>
        <!---------------Division--------------->
        <div class="col-md-6">
        <div class="custom-control custom-checkbox mr-sm-2">
            <label><input type="checkbox" name="programas[]" value="Python">Python</label>
        </div>
        </div>
        <!---------------Division--------------->
        <div class="col-md-6">
        <div class="custom-control custom-checkbox mr-sm-2">
            <label><input type="checkbox" name="programas[]" value="javascript">JavaScript</label>
        </div>
        </div>
        <!---------------Division--------------->
        <div class="col-md-6">
        <div class="custom-control custom-checkbox mr-sm-2">
            <label><input type="checkbox" name="programas[]" value="c#">C#</label>
        </div>
        </div>
        <!---------------Division--------------->
        <div class="col-md-6">
        <div class="custom-control custom-checkbox mr-sm-2">
            <label><input type="checkbox" name="programas[]" value="rusts">Rust</label>
        </div>
        </div>

    </div>
    </div>
</div>

    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger"
                data-bs-dismiss="modal">Cerrar</button>

                <button name="guardar" type="submit" class="btn btn-primary"
                data-bs-dismiss="modal">Registrar</button>
            </div>
            </div>

            </form>
            </div>
        </div>
    </div>


        <footer margin-top: 800px>
        <?php include('footer.php')?>
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
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
