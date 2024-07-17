function estado(){
   
    var fecha;
    var und;
    var concepto;
    var costo;
    var importe;
    var gasto;

    

    fecha=prompt("fecha lunes");
    concepto=prompt("concepto ");
    und=prompt("calidad ");
    costo=prompt("costo curso ");
    gasto=prompt("gasto del dia ");

    
    
    importe=und*costo;
    saldo=importe-gasto;

    document.getElementById("demo").innerHTML=fecha;
    document.getElementById("demo1").innerHTML=concepto;
    document.getElementById("demo2").innerHTML=und;
    document.getElementById("demo3").innerHTML=costo;
    document.getElementById("demo4").innerHTML=gasto;
    document.getElementById("demo5").innerHTML=importe;
    document.getElementById("demo6").innerHTML=saldo;
   
  
    
}

function martes(){
var fecha2;
    var und2;
    var concepto2;
    var costo2;
    var importe2;
    var gasto2;

    fecha2=prompt("fecha martes");
    concepto2=prompt("concepto 2");
    und2=prompt("calidad 2");
    costo2=prompt("costo curso 2");
    gasto2=prompt("gasto del dia 2");

    importe2=und2*costo2;
    saldo2=importe2-gasto2;

    document.getElementById("demo7").innerHTML=fecha2;
    document.getElementById("demo8").innerHTML=concepto2;
    document.getElementById("demo9").innerHTML=und2;
    document.getElementById("demo10").innerHTML=costo2;
    document.getElementById("demo11").innerHTML=gasto2;
    document.getElementById("demo12").innerHTML=importe2;
    document.getElementById("demo13").innerHTML=saldo2;

}

function miercules(){
    var fecha3;
    var und3;
    var concepto3;
    var costo3;
    var importe3;
    var gasto3;
    
    fecha3=prompt("fecha miercules");
    concepto3=prompt("concepto 3");
    und3=prompt("calidad 3");
    costo3=prompt("costo curso 3");
    gasto3=prompt("gasto del dia 3");
    
        importe3=und3*costo3;
        saldo3=importe3-gasto3;
    
        document.getElementById("demo14").innerHTML=fecha3;
        document.getElementById("demo15").innerHTML=concepto3;
        document.getElementById("demo16").innerHTML=und3;
        document.getElementById("demo17").innerHTML=costo3;
        document.getElementById("demo18").innerHTML=gasto3;
        document.getElementById("demo19").innerHTML=importe3;
        document.getElementById("demo20").innerHTML=saldo3;
    
    
    }

    function jueves(){
        var fecha4;
        var und4;
        var concepto4;
        var costo4;
        var importe4;
        var gasto4;
        
        fecha4=prompt("fecha jueves");
        concepto4=prompt("concepto 4");
        und4=prompt("calidad 4");
        costo4=prompt("costo curso 4");
        gasto4=prompt("gasto del dia 4");

        
            importe4=und4*costo4;
            saldo4=importe4-gasto4;
        
            document.getElementById("demo21").innerHTML=fecha4;
            document.getElementById("demo22").innerHTML=concepto4;
            document.getElementById("demo23").innerHTML=und4;
            document.getElementById("demo24").innerHTML=costo4;
            document.getElementById("demo25").innerHTML=gasto4;
            document.getElementById("demo26").innerHTML=importe4;
            document.getElementById("demo27").innerHTML=saldo4;
        
        
        }


        function miercules(){
            var fecha5;
            var und5;
            var concepto5;
            var costo5;
            var importe5;
            var gasto5;

            
            fecha5=prompt("fecha viernes");
            concepto5=prompt("concepto 5");
            und5=prompt("calidad 5");
            costo5=prompt("costo curso 5");
            gasto5=prompt("gasto del dia 5");
        
            
                importe5=und5*costo5;
                saldo5=importe5-gasto5;
            
             document.getElementById("demo28").innerHTML=fecha5;
            document.getElementById("demo29").innerHTML=concepto5;
            document.getElementById("demo30").innerHTML=und5;
            document.getElementById("demo31").innerHTML=costo5;
            document.getElementById("demo32").innerHTML=gasto5;
            document.getElementById("demo33").innerHTML=importe5;
            document.getElementById("demo34").innerHTML=saldo5;
            
            
            }