function comprobarMail(usuario){
//Se comprueba que ha escrito un formato "example@mail.com"
    var n = /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/u; 
    if (usuario.match(n)){
        return true; 
    }
    else {
        alert("formato de usuario invalido. El formato debe ser -->  'example@mail.com'"); 
        return false; 
    }
}

function comprobarPassword(pass){
    if (pass.length >=6){
        return true; 
    }
    else {
        alert("La contraseña debe tener minimo de 6 caracteres");
        return false; 
    }
}

function iniciarSesion(){
    var usuario = document.forms["datos"]["usuario"].value;  
    var pass = document.forms["datos"]["pass"].value; 
    if (comprobarMail(usuario) == true && comprobarPassword(pass) == true){
        window.location = "inicioSesion.php?usuario=" + usuario + "&pass=" + pass;
    }
}