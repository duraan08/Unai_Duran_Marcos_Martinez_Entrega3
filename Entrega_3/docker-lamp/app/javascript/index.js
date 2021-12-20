function comenzar(){
    if (confirm("¿Dispone de una cuenta?")){
        location.href="inicio_sesion.php";
    }
    else{
        location.href="registro.php";
    }
}