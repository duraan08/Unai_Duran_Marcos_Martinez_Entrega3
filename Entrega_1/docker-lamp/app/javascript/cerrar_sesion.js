//Debemos crear dos funciones puesto que las direcciones son diferentes dependiendo desde donde lo redirijas
function cerrarSesion(){
    if(confirm("¿Desea Cerrar Sesion?")){
        location.href="cerrar_sesion.php";
    }
}
