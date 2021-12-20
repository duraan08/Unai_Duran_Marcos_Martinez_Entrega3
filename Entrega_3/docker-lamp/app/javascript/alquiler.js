function comprobarOrigenDestino(origen,destiny){
    var n = /^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/;
    if (origen.match(n) && destiny.match(n)){
        return true;
    }
    else {
        alert("origen o destino incorrectos");
        return false;
    }

}

function alquilar(){
    var fechaO = document.forms["alq"]["fecha_origen"].value;
    var fechaF= document.forms["alq"]["fecha_fin"].value; 
    var origen= document.forms["alq"]["origen"].value;
    var destino= document.getElementById("desplegable");
    if (destino.value == 0){
        alert("¡Seleccione una opción!"); 
    }
    else{
        var destiny= destino.options[destino.selectedIndex].text;
    }
    if (comprobarOrigenDestino(origen, destiny) == true){
        alert("Reserva completada"); 
        window.location = "alquilar.php?fechaO=" + fechaO + "&fechaF=" + fechaF + "&origen=" + origen + "&destino=" + destiny;

    }
    else{alert("Reserva no completada");}
}

function editar(){
    location.href="mis_viajes_editar.php";
}