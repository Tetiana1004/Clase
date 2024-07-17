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

        <style>
            .form {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                gap: 1rem;

                label {
                    font-weight: bold;
                    font-size: 13.33px;
                }

                input {
                    padding: .5rem;
                    border: 2px solid blueviolet;
                }
            }
        </style>
    </head>

    <body style="background-color:#B1AFFF">
        <header>
        <?php include 'header.php'?>
        </header>
        <main>
<div class="container">
    <div class="d-flex aling-items-center p-3 my-3 text-white bg-primary rounded shadow-sm">
    <h1>Coordinacionde horario</h1>
    </div>
<!----------------------botton------------------------------------------------------>
    <div class="my-3 p-3 bg-body rounded shadow-sm">
    <h6 class="border-botton pd-2 mb-0">
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#form_modal">Agregar horario</button>
     
</h6>   
<!----------------------tabla---------------------------------------------------------------->
    <div class="d-flex text-muted pt-3">
    <table class="table table-bordered">
    <thead class="btn-primary">
        <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Horario</th>
        <th>Programa</th>
        </tr>
    </thead>
<!----------------------php----------------------------------------------------->
<tbody style="background-color:#D4BDAC">
    <?php 
    require_once 'config.php';
    $query = $db -> prepare("SELECT * FROM personal");
    $query->execute();
    if($query -> rowCount() == 0){
     echo '<tr>
            <td colspan="5"></td>
            </tr>';

    }else{
        $n=0;
        $data=$query->fetchAll();
    foreach($data as $value) {
        $n++;
        echo'<tr>
            <td>'.$n.'</td>
            <td>'.$value["nombres"].'</td>
            <td>'.$value["apellidos"].'</td>
            <td>'.$value["pais"].'</td>
            <td>'.$value["programas"].'</td>
            </tr>';
    }

}
$db=null;
    
    ?>


                </tbody>


   
            </table>
        </div>
    </div>  
</div>
       </main> 
<!---------------------dentro-tabla----------------------------------------------------->
<div class="modal fade" id="form_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">   
        <div class="modal-content">
            <div class="modal-header btn-primary">
                <h5 class="modal-title" id="exampleModalLabel"> Horarios Programasion</h5>
                <button type="button" class="btn-close" data-ds-dismiss="modal" aria-label="Close"></button>


            </div>
    <form action="./insertar.php" method="post" class="form">
        <label for="">Nombre</label>
        <input type="text" name="nombres">

        <label for="">Apellido</label>
        <input type="text" name="apellidos">

        <label for="">Horario</label>
        <input type="text" name="pais">

        <h4 for="">Programas</h4>

        <label for="">PHP</label>
        <input type="checkbox" name="programas[]" id="" value="PHP">

        <label for="">JS</label>
        <input type="checkbox" name="programas[]" id="" value="JS">

        <label for="">JSP</label>
        <input type="checkbox" name="programas[]" id="" value="JSP">

        <label for="">HTML</label>
        <input type="checkbox" name="programas[]" id="" value="HTML">

        <label for="">CSS</label>
        <input type="checkbox" name="programas[]" id="" value="CSS">
        <div class="modal-footer">
            <button type="button" class="btn btn-danger"data-bs-dismiss="modal">cerrar</button>
            <button type="submit" class="btn btn-primary" name="guardar">registrar</button>
        </div>
    </form>

        </div>
    </div>
</div>

            <footer>
                <?php  include 'foter.php'?>
            </footer>

        </body>
    </html>
