function cargarContenido(url){
    fetch(url)
    .then(response => response.text())
    .then(data => document.getElementById("contenido").innerHTML=data);

}
function enviarMensajeImagen()
{
    datos=new FormData();
    datos.append("nombre",nombre);
    datos.append("email",email);
    datos.append("mensaje",mensaje);
    datos.append("archivo",document.getElementById("archivo").files[0]);
    url="registrar.php";
    fetch(url,datos)
    .then(response => response.text())
    .then(data => document.getElementById("contenido").innerHTML=data);

    
    
    
}
