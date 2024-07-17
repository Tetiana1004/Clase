function nota(){
var nota1=0;
var nota2=0;
var nota3=0;
var resultado=0;

nota1=prompt("Coloque las notas acumulados")
document.getElementById("demo1").innerHTML=nota1;

nota2=prompt("Coloque las notas acumulados")
document.getElementById("demo2").innerHTML=nota2;

nota3=prompt("Coloque las notas acumulados")
document.getElementById("demo3").innerHTML=nota3;

resultado=(Number(nota1)+Number(nota2)+Number(nota3))/3;
document.getElementById("demo4").innerHTML = resultado.toFixed(2);



    if(resultado<10){
        alert("suspendido");
        return true
    }else{
        alert("Es apto");
        return true
    }

}
















