function editarNombre(){
    var nombre = document.forms["edit"]["nombre"].value;
    var re = /^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/; 
    if(nombre.match(re)){
        alert("Nombre editado a : " + nombre); 
        window.location = "../editar_nombre.php?nombre=" + nombre; 
    }
    else{
        alert("Error!! Has introducido caracteres no validos");

    }

}

function editarApellidos(){
    var apellidos = document.forms["edit"]["apellidos"].value; 
    var re = /^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/; 
    if (apellidos.match(re)){
        alert("Apellidos editado a : " + apellidos)
        window.location = "../editar_apellidos.php?apellidos=" + apellidos; 
    }
    else{
        alert("Error!! Has introducido caracteres no validos");
    }

}

function editarTelefono(){
    /*Aqui se deberían intercambiar los datos introducidos por los de la BD en caso de que sean diferentes*/
    var telf = document.forms["edit"]["telefono"].value;
    var re = /^[0-9]{9,9}$/; 
    if (telf.match(re)){
        alert("El numero de telefono se ha editado a : " + telf); 
        window.location = "../editar_telefono.php?telf=" + telf; 
    }
    else {
        alert("El numero de telefono no es valido!!"); 
    }
}

function editarDNI(){
    /* Se debe comprobar que la letra corresponde al dni */
    var dni = document.forms["edit"]["dni"].value;
    var resp = comprobarDNI(dni); 
    if (resp == true){
        alert("DNI correcto y editado a :" + dni); 
        window.location = "../editar_dni.php?dni=" + dni;  
    }
    else{alert("DNI incorrecto");}
}

function editarBanco(){
    /* Se debe comprobar que introlduce 20 numeros */
    var re = /^[0-9]{20,20}$/;
    var cuenta = document.forms["edit"]["banco"].value;
    if (cuenta.match(re)){
        alert("Cuenta bancaria correcta y editada a :" + cuenta); 
        window.location = "../editar_banco.php?banco=" + cuenta;  
    }
    else{alert("Cuenta bancaria incorrecta");}
}

//Extraido de https://donnierock.com/2011/11/05/validar-un-dni-con-javascript/
//Autor: DONNIE ROCK

function comprobarDNI(dni){
    var numero
    var letr
    var letra
    var expresion_regular_dni
       
    expresion_regular_dni = /^\d{8}[a-zA-Z]$/;
       
    if(expresion_regular_dni.test (dni) == true){
        numero = dni.substr(0,dni.length-1);
        letr = dni.substr(dni.length-1,1);
        numero = numero % 23;
        letra='TRWAGMYFPDXBNJZSQVHLCKET';
        letra=letra.substring(numero,numero+1);

        if (letra!=letr.toUpperCase()) {
            alert('Dni erroneo, la letra del NIF no se corresponde');
        }
        else{ 
            return true;
        }
    }
    else{return false;}
}

function editarDireccion(){
    var dir = document.forms["edit"]["direccion"].value;
    var regexp =/^[A-Za-z0-9 ,.'-]+$/; 
    if(dir.match(regexp)){
        alert("Direccion editada a : " + dir);
        window.location = "../editar_direccion.php?dir=" + dir;
    }else{
        alert("Caracteres no validos");
    }
     

}

function editarFecha(){
    var fecha = document.forms["edit"]["fecha"].value;
    alert("Fecha editada a : " + fecha);
    window.location = "../editar_fecha.php?fecha=" + fecha; 
}

function editarMail(){
    /* Se debe comprobar que el email sigue el formato 'user'@'gmail.com' */
    var mail = document.forms["edit"]["mail"].value; 
    var re = /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/;
    if (mail.match(re)){
        alert("mail valido y editado a : " + mail + "\n" + "¡Reinicie su sesion con su nuevo usuario!");
        window.location = "../editar_mail.php?mail=" + mail; 
    }
    else {alert("mail invalido");}
}

function editarPass(){
    /* Se comprueba que ambas contraseñas introducidas coinciden */
    var pass1 = document.forms["edit"]["contrasena1"].value;
    var pass2 = document.forms["edit"]["contrasena2"].value;
    var re = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[^\w\s]).{8,}$/;    
    if (pass1.match(re)){
        if (pass1 == pass2){
            alert("Contraseña editada, Reinicie la sesion con la nueva contraseña!!");
            window.location = "../editar_pass.php?pass=" + pass1; 
        }
        else {
            alert("Las contraseñas no coinciden :(");
        }
    }
    else {alert("La contraseña debe tener minimo de 8 caracteres, de los cuales debe haber minusculas, mayusculas, numeros y caracteres no alfanumericos.");}
}
