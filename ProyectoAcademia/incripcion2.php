<!doctype html>
<html lang="en">
    <head>
      
    <?php include('log/header.php')?>
    </head>

    <body style="background-color:rgb(119, 118, 179)">
        <header>
        
        </header>
        <main>

        <div class="container mt-3" style="border:2px solid black ; background-color:whint">
        <!-----img------>
        <svg xmlns="http://www.w3.org/2000/svg" width="76" height="76" fill="currentColor" class="bi bi-person-fill-gear" viewBox="0 0 16 16">
        <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4m9.886-3.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382zM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0"/>
        </svg>

        <h1 style="text-align:center;color:white">Inscripciones nuevas</h1>
 <!---linia1-----2----------------------->


<from action="redistrar.php"method="post">
        <div class="mb-3">
        <div class="row justify-content-evenly">
    <div class="col-4">
    <label for=""class="form-label">Nombre de estudiante</label>
    <input
        type="text"
        class="form-control"
        name=""
        id=""
        aria-describedby="helpId"
        placeholder="" 
        style="widht:200px;"/>
    </div>
     <div class="col-4">
    <label for=""class="form-label">Identificacion</label>
     <input
        type="text"
        class="form-control"
        name=""
        id=""
        aria-describedby="helpId"
        placeholder="" 
        style="widht:200px;float:right"/>
    </div>
  </div>
  </div>
<!-----linia2--1------------------->

<div class="mb-3">
    <label for="" class="form-label">Direccion</label>
    <input
        type="text"
        class="form-control"
        name=""
        id=""
        aria-describedby="helpId"
        placeholder="" 
        style="widht:200px;"/>
   

</div>

<!---------------linia3-1--------------------->


<div class="mb-3">
        <div class="row justify-content-evenly">
    <div class="col-4">
        <label for=""class="form-label">Telefono</label>
    <input
        type="text"
        class="form-control"
        name=""
        id=""
        aria-describedby="helpId"
        placeholder="" 
        style="widht:200px;"/>
    </div>
    <div class="col-4">
    <label for=""class="form-label">Emeil</label>
     <input
        type="text"
        class="form-control"
        name=""
        id=""
        aria-describedby="helpId"
        placeholder="" 
        style="widht:200px;float:right"/>
    </div>
  </div>
  </div>
  <br><br>
<!------------------select1-----combobox---->

  <select class="form-select" aria-label="Default select example">
  <option selected>Programacion Python</option>
  <option value="1">Desarollo</option>
  <option value="2">Programaciom Java</option>
  <option value="3">Diseño web</option>
  </select>
  <br><br>
<!------------------Horario--------->
<h3 style="color:white"><label><b>Horario de estudio</b></label></h3>

<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">Mañana</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2">Tarde</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
  <label class="form-check-label" for="inlineRadio3">Noche</label>
</div>
<!-------------butones---------->

  <br><br>

  <button type="reset" class="btn btn-primary">Borrar</button>
  <button type="submit" style="float:right" class="btn btn-success">Registrar</button>
    
  <br><br>


</div>
</div>
</div>



 </form>    
</main>
    
        

    </body>
</html>
