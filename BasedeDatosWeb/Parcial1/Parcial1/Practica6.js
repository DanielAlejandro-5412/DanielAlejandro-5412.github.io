var ocultar = false;

function muestra_texto(){
    if(!ocultar){
        document.getElementById("texto").innerHTML = "Let's play a game, you chosing favorite thing... this cliche never die... I will take you to my world and leave you speechless, run and hide again and again, the boyfriend is nothing to me you are the one I look for behind the screen, play the notes it's so fun"
        ocultar=true;
        document.getElementById("mostrar").innerHTML ="mstrar menos"
    }else{
        document.getElementById("texto").innerHTML = ""
        ocultar=false;
        document.getElementById("mostrar").innerHTML ="mstrar mas"

    }
  }

  function lanzar_dado(){
 
    var num= Math.floor(Math.random() * 6) +1;

    document.getElementById("dado").innerHTML = "<img src= dado1"+num+".png width = '100px'>";

}