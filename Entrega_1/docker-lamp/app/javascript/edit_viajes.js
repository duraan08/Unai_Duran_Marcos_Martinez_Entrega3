function obtenerID(identificador){ 
    if (confirm("¿Desea editar el elemento con id : " + identificador + "?")){
        window.location = "../mis_viajes_editar.php?identificador=" + identificador;
    } 
}

function eliminarViaje(){
    var id= document.getElementById("desplegable2");
    if (id.value == 0){
        alert("¡Seleccione una opción!"); 
    }
    else{
        var identify= id.options[id.selectedIndex].text;
        if (confirm("Desea eliminar el viaje con el id : " + identify + "?")){
            alert("viaje con id " + identify + " a sido eliminado"); 
            window.location = "../eliminar_viaje.php?id=" + identify; 
        }
    }
}

function editarOrigen(){
    var origen = document.forms["edit"]["origen"].value;
    var id= document.getElementById("desplegable");
    var n = /^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/;
    if (id.value == 0){
        alert("¡Seleccione una opción!"); 
    }
    else{
        if (origen.match(n)){
            var identify= id.options[id.selectedIndex].text;
            alert("Origen modificado correctamente a : " + origen);
            window.location = "../editar_origen.php?id=" + identify + "&origen=" + origen; 
    
        }
        else {
            alert("formato del origen incorrecto");
        }
    }
}

function editarDestino(){
    var destino = document.getElementById("planet");    
    var id= document.getElementById("desplegable");
    if (id.value == 0 || destino.value == 0){
        alert("¡Seleccione una opción!"); 
    }
    else {
        var identify = id.options[id.selectedIndex].text;
        var destiny = destino.options[destino.selectedIndex].text
        alert("Destino modificado correctamente a : " + destiny);
        window.location = "../editar_destino.php?id=" + identify + "&destino=" + destiny; 
    }
   
}

function editarFechaO(){
    var fechaO = document.forms["edit"]["fechaO"].value;
    var id= document.getElementById("desplegable");
    if (id.value == 0){
        alert("¡Seleccione una opción!"); 
    }
    else{
        var identify= id.options[id.selectedIndex].text;
        alert("Fecha de origen modificada a : " + fechaO); 
        window.location = "../editar_fecha_origen.php?id=" + identify + "&fechaO=" + fechaO; 
    }

    

}

function editarFechaF(){
    var fechaF=document.forms["edit"]["fechaF"].value;
    
    var id= document.getElementById("desplegable");
    if (id.value == 0){
        alert("¡Seleccione una opción!"); 
    }
    else {
        var identify= id.options[id.selectedIndex].text;
        alert("Fecha de fin modificada a " + fechaF)
        window.location = "../editar_fecha_fin.php?id=" + identify + "&fechaF=" + fechaF; 
    }
}
