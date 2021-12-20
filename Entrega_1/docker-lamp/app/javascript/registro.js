function comprobarNombreApellidos(nombre, apellidos){
   var n = /^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/; 
   if (nombre.match(n) && apellidos.match(n)){
       return true; 
   }
   else {
       alert("Has introducido caracteres no validos en el nombre o apellidos"); 
       return false; 
   }
}

//Extraido de https://donnierock.com/2011/11/05/validar-un-dni-con-javascript/
//Autor: DONNIE ROCK

function comprobarDni(dni){
    /*Falta comprobar que no haya un DNI igual en la BD*/
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
        else{ return true;}
    }
    else{return false;}
}

function comprobarTelf(telf){
    /*Falta comprobar que no haya un telefono igual en la BD*/
    var num = /^[0-9]$/; 
    if (telf.length == 9){
        return true;     
    }
    else {
        alert("El numero de telefono no es valido!!");
        return false;  
    }
}

function comprobarMail(mail){
    /* Falta comprobar que no exista un email igual en la BD*/
    var re = /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/;
    if (mail.match(re)){
        return true;
    }
    else {
        alert("mail invalido");
        return false;
    }
}

function comprobarContraseña(pass1, pass2){ 
    if (pass1.length >=6){
        if (pass1 != pass2){
            alert("Las contraseñas no coinciden :(");
            return false; 
        }
        else {return true;}
    }
    else {
        alert("La contraseña debe tener minimo de 6 caracteres");
        return false; 
    }
}

function registrar(){
    var nombre = document.forms["register"]["nombre"].value;
    var apellidos = document.forms["register"]["apellidos"].value; 
    var pass1 = document.forms["register"]["contrasena1"].value;
    var pass2 = document.forms["register"]["contrasena2"].value;
    var mail = document.forms["register"]["mail"].value; 
    var telf = document.forms["register"]["telefono"].value;
    var dni = document.forms["register"]["dni"].value;
    var fecha = document.forms["register"]["fecha"].value;
    var direccion = document.forms["register"]["direccion"].value;
    if (comprobarNombreApellidos(nombre,apellidos) == true && comprobarMail(mail) == true 
    && comprobarTelf(telf) == true && comprobarDni(dni) == true && comprobarContraseña(pass1, pass2) == true){
        window.location = "unete.php?nombre=" + nombre + "&apellidos=" + apellidos + "&dni=" + dni + "&telf=" + telf + "&fecha=" 
        + fecha + "&direccion=" + direccion + "&mail=" + mail + "&pass1=" + pass1;
        //Se introducen a la base de datos los datos correspondientes 
    }
    else {
        alert("Revise los datos introducidos"); 
    }
}
