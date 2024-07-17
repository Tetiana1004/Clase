<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        
    </head>

    <body>
        <header>
        <?php include('log/header.php')?>
        </header>

        <main>
            <!--------------tabla-----------w3--------->
            <br><br>
        <div class="container mt-3">
  <h2 style="text-aling:center">Estado de cuenra</h2>

        <form action="">
     <table class="table">
     <thead class="table-dark">
      <tr>
        <th>Fecha</th>
        <th>Concepto</th>
        <th>Und</th>
        <th>Cocto</th>
        <th>Gasto</th>
        <th>Importe</th>
        <th>Saldo</th>
        <th>Registrar</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td id="demo"></td>
        <td id="demo1"></td>
        <td id="demo2"></td>
        <td id="demo3"></td>
        <td id="demo4"></td>
        <td id="demo5"></td>
        <td id="demo6"></td>
        <td><button type="button" onclick="estado()" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-link-45deg" viewBox="0 0 16 16">
        <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1 1 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4 4 0 0 1-.128-1.287z"/>
         <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243z"/>
         </svg></button></td>
      </tr>

      <tr>
      <td id="demo7"></td>
        <td id="demo8"></td>
        <td id="demo9"></td> 
        <td id="demo10"></td>
        <td id="demo11"></td>
        <td id="demo12"></td>
        <td id="demo13"></td>
        <td><button type="button" onclick="martes()" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-link-45deg" viewBox="0 0 16 16">
        <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1 1 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4 4 0 0 1-.128-1.287z"/>
         <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243z"/>
         </svg></button></td>
      </tr>      

      <tr>
        <td id="demo14"></td>
        <td id="demo15"></td>
        <td id="demo16"></td>
        <td id="demo17"></td>
        <td id="demo18"></td>
        <td id="demo19"></td>
        <td id="demo20"></td>
        <td><button type="button" onclick="miercules()" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-link-45deg" viewBox="0 0 16 16">
        <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1 1 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4 4 0 0 1-.128-1.287z"/>
         <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243z"/>
         </svg></button></td>
      </tr>

      <tr>
      <td id="demo21"></td>
        <td id="demo22"></td>
        <td id="demo23"></td>
        <td id="demo24"></td>
        <td id="demo25"></td>
        <td id="demo26"></td>
        <td id="demo27"></td>
        <td><button type="button" onclick="jueves()" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-link-45deg" viewBox="0 0 16 16">
        <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1 1 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4 4 0 0 1-.128-1.287z"/>
         <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243z"/>
         </svg></button></td>
      </tr>

      <tr>
      <td id="demo28"></td>
        <td id="demo29"></td>
        <td id="demo30"></td>
        <td id="demo31"></td>
        <td id="demo32"></td>
        <td id="demo33"></td>
        <td id="demo34"></td>
        <td><button type="button" onclick="viernes()" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-link-45deg" viewBox="0 0 16 16">
        <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1 1 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4 4 0 0 1-.128-1.287z"/>
         <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243z"/>
         </svg></button></td>
      </tr>
     
    </tbody>
  </table>

  <button type="button" onclick="estado()" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-link-45deg" viewBox="0 0 16 16">
  <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1 1 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4 4 0 0 1-.128-1.287z"/>
  <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243z"/>
    </svg>Registrar</button>

  <button type="button" onclick="table_CSV()"class="btn btn-info"style="float:right"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-filetype-csv" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5zM3.517 14.841a1.13 1.13 0 0 0 .401.823q.195.162.478.252.284.091.665.091.507 0 .859-.158.354-.158.539-.44.187-.284.187-.656 0-.336-.134-.56a1 1 0 0 0-.375-.357 2 2 0 0 0-.566-.21l-.621-.144a1 1 0 0 1-.404-.176.37.37 0 0 1-.144-.299q0-.234.185-.384.188-.152.512-.152.214 0 .37.068a.6.6 0 0 1 .246.181.56.56 0 0 1 .12.258h.75a1.1 1.1 0 0 0-.2-.566 1.2 1.2 0 0 0-.5-.41 1.8 1.8 0 0 0-.78-.152q-.439 0-.776.15-.337.149-.527.421-.19.273-.19.639 0 .302.122.524.124.223.352.367.228.143.539.213l.618.144q.31.073.463.193a.39.39 0 0 1 .152.326.5.5 0 0 1-.085.29.56.56 0 0 1-.255.193q-.167.07-.413.07-.175 0-.32-.04a.8.8 0 0 1-.248-.115.58.58 0 0 1-.255-.384zM.806 13.693q0-.373.102-.633a.87.87 0 0 1 .302-.399.8.8 0 0 1 .475-.137q.225 0 .398.097a.7.7 0 0 1 .272.26.85.85 0 0 1 .12.381h.765v-.072a1.33 1.33 0 0 0-.466-.964 1.4 1.4 0 0 0-.489-.272 1.8 1.8 0 0 0-.606-.097q-.534 0-.911.223-.375.222-.572.632-.195.41-.196.979v.498q0 .568.193.976.197.407.572.626.375.217.914.217.439 0 .785-.164t.55-.454a1.27 1.27 0 0 0 .226-.674v-.076h-.764a.8.8 0 0 1-.118.363.7.7 0 0 1-.272.25.9.9 0 0 1-.401.087.85.85 0 0 1-.478-.132.83.83 0 0 1-.299-.392 1.7 1.7 0 0 1-.102-.627zm8.239 2.238h-.953l-1.338-3.999h.917l.896 3.138h.038l.888-3.138h.879z"/>
    </svg>DescargarCSV</button>

  </form> 
</div>


<!----------------------------------------------------------------------------------------->
  
  
  <script>
    function table_CSV(){
        var CSV_data = [];
        var rows = document.getElementsByTagName('tr');
        for (var i=0;i<rows.length;i++){
            var cols = rows[i].querySelectorAll('td,th');
            
            var csvrow=[];
            for(var j=0;j<cols.length;j++){
                csvrow.push(cols[j].innerHTML);
            }  
            
            CSV_data.push(csvrow.join(","));
        }
        CSV_data = CSV_data.join('\n');
        descargaCSV(CSV_data);
    }
  
    function descargaCSV(CSV_data){
        CSVFile = new Blob([CSV_data], {
            type:"text/csv"
        });
        var temp_link = document.createElement('a');
        temp_link.download = "baulphp.csv";
        var url = window.URL.createObjectURL(CSVFile);
        temp_link.href = url;

        temp_link.style.display= "none";
        document.body.appendChild(temp_link);

        temp_link.click();
        document.body.removeChild(temp_link);

    }

    </script>

        </main>
        <footer>
        <?php  require_once "log/foter.php"?>
        </footer>
        <script src="js/estado.js"></script>
    </body>
</html>
