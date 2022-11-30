
        function calcular(){
            var a=parseInt(document.getElementById("a").value);
            var b=parseInt(document.getElementById("b").value);
            var c=parseInt(document.getElementById("c").value);
            var resultado=a+b+c;
            document.getElementById("resultado").innerHTML=resultado;
        }
        var boton=document.getElementById("boton");
            boton.addEventListener("click",calcular);
      //      boton.onclick=calcular;