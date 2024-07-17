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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <script src="js/js3.js"></script>
    </head>
   
    <body style="background-color:rgb(119, 118, 179)">
        <header>
        <?php include('log/header.php')?>
        </header>
        <main>
        <h1 style="text-align:center;color:white">MODULOS</h1>



        <div class="container" style="border: 2px solid black; background-color:white">
    <br>
    <table class="table-responsive">
    <table class="table table-secondary">

            <thead>
            <tr>
            <th scope="col"style="text-aligt:center">Modulos</th>
            <th scope="col">Horas modulos</th>
            <th scope="col">Nota final</th>
            </tr>
            </thead>

            <tbody>
            <tr class="table table-primary">
            <td scope="row">Confeccion de pagina web</td>
            <td>210 Horas</td>
            <td id="demo1"></td>
            </tr>

            <tr class="table table-warning">
            <td scope="row">Software de pagina web</td>
            <td>180 Horas</td>
            <td id="demo2"></td>
            </tr>

            <tr class="table table-success">
            <td scope="row">Publicacion de pagina web</td>
            <td>90 Horas</td>
            <td id="demo3"></td>
            </tr>

            </tbody>
    </table>
    </table>


    <h5>Nora parcial:<h3 id="demo4"></h3></h5>

<button type="button" style="float:right;margin-top: -40px;" onclick="nota()" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
    <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001"/>
    </svg>Calcular</button>
<br><br>
 </div>


</div>

<!---------------------------------------------parte2------------------------>

<br>
<form action="bd/notas1.php" method="post">

<div class="container" style="border: 2px solid black; background-color:white">
<div class="row justify-content-evenly">
    <div class="col-4">
    <label for="" class="form-label">Nombre</label>
        <input
            type="text"
            class="form-control"
            name="nombre"
            id=""
            aria-describedby="helpId"
            placeholder="Nombre del Parcipiante"/>
    </div>
    <div class="col-4">
    <label for="" class="form-label">Identificación</label>
        <input
            type="text"
            class="form-control"
            name="identificacion"
            id=""
            aria-describedby="helpId"
            placeholder="Identificación"/>
    </div>
    <div class="col-4">
    <label for="" class="form-label">calificación</label>
        <input
            type="text"
            class="form-control"
            name="calificacion"
            id=""
            aria-describedby="helpId"
            placeholder="Calificación" />
    </div>
  </div>

 <br>

<!-----------button---------->
  <button type="reset" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
  <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
  </svg>Borrar</button>


  <button type="submit" style="float:right" class="btn btn-success" onclick="aviso()"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-download-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 0a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 4.095 0 5.555 0 7.318 0 9.366 1.708 11 3.781 11H7.5V5.5a.5.5 0 0 1 1 0V11h4.188C14.502 11 16 9.57 16 7.773c0-1.636-1.242-2.969-2.834-3.194C12.923 1.999 10.69 0 8 0m-.354 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V11h-1v3.293l-2.146-2.147a.5.5 0 0 0-.708.708z"/>
  </svg>Guardar</button>
    
  <br><br>
</form>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Launch static backdrop modal
</button>



<form action="consultas.php" method="post">
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
   
      <div class="mb-3">
        <label for="" class="form-label">CODIGO DEL ESTUDIANTE</label>
        <input
            type="text"
            class="form-control"
            name="identificacion"
            id=""
            aria-describedby="helpId"
            placeholder=""
        />
        <small id="helpId" class="form-text text-muted">Help text</small>
      </div>
      





      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">consultar</button>
        </form>
      </div>
    </div>
  </div>
</div>















        </main>
        <footer>
            <!-- place footer here -->
        </footer>

        <script src="js/js2.js"></script>
    </body>
</html>
