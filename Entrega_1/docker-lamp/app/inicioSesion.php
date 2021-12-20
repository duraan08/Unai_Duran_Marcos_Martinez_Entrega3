<?php
    session_start(); //Iniciamos la sesion
    //error_reporting(0); //Evitamos que nos imprima los warning
    require 'conexion.php'; //Utilizamos conexion.php para estar conectados a la BD
    //Recogemos los datos enviados desde js
    $usuario = $_REQUEST['usuario'];
    $clave = $_REQUEST['pass'];
    
    
    if(isset($usuario)){ //Si el usuario existe

        $q = "SELECT * FROM usuario where MAIL = '$usuario' and PASS = '$clave'"; //Si se encuentra en la BD contara +1 
        $consulta = mysqli_query($conexion,$q);
        $array = mysqli_fetch_array($consulta); //Guardamos el resultado en una variable

        if($array){ 
            $_SESSION['user'] = $usuario; //Introducimos el dato obtenido como variable de sesion
            header("location: alquiler.html");
        }else{
            //Si no existe en la base de datos se emitira un mensaje y se le redirigira a un enlace un otro dependiendo de la respuesta
            echo "<script type='text/javascript'>"; 
            echo "if (confirm('El Usuario o Constraseña no existen, ¿Deseea registrarse?')){ location.href='registro.html';} 
                else{location.href='inicio_sesion.html';}";
            echo "</script>";
        }
    }
    
?>