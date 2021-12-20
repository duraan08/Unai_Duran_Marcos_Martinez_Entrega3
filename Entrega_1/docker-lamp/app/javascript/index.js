function comenzar(){
    if (confirm("¿Dispone de una cuenta?")){
        location.href="inicio_sesion.html";
    }
    else{
        location.href="registro.html";
    }
}