<?php
    session_start(); //Iniciamos la sesion
    //error_reporting(0); //Evitamos que nos imprima los warning
    require 'conexion.php'; //Utilizamos conexion.php para estar conectados a la BD
    include 'EncriptarPass.php'; //Utilizamos el php para poder descifrar la contraseña cifrada
    //Recogemos los datos enviados desde js
    $usuario = $_REQUEST['usuario'];
    $clave = $_REQUEST['pass'];

    
    if(isset($usuario)){ //Si el usuario existe
        $salt = "SELECT SALT FROM usuario WHERE MAIL = '$usuario'";
        $consulta1 = mysqli_query($conexion,$salt);
        $resultado1 = mysqli_fetch_array($consulta1);

        $pass = "SELECT PASS FROM usuario WHERE MAIL = '$usuario'";
        $consulta2 = mysqli_query($conexion,$pass);
        $resultado2 = mysqli_fetch_array($consulta2);

        $desencrypt = EncriptarPass::desencriptar($resultado2['PASS'], $resultado1['SALT']);
        if($clave == $desencrypt){ //Si la clave introducida es igual a la desencriptada
            $q = "SELECT * FROM usuario where MAIL = '$usuario'"; //Si se encuentra en la BD contara +1 
            $consulta = mysqli_query($conexion,$q);
            $array = mysqli_fetch_array($consulta); //Guardamos el resultado en una variable
        }
        else{$array = [];}
        
 
        if($array){ 
            $_SESSION['user'] = $usuario; //Introducimos el dato obtenido como variable de sesioN
            $sql = "INSERT INTO conexiones VALUES('".$usuario."', NOW() ,'T')";
            $result = mysqli_query($conexion,$sql) or die("Error en el query");
            header("location: alquiler.php");
        }else{
            //Si no existe en la base de datos se emitira un mensaje y se le redirigira a un enlace un otro dependiendo de la respuesta
            $sql = "INSERT INTO conexiones VALUES('".$usuario."', NOW() ,'F')";
            $result = mysqli_query($conexion,$sql) or die("Error en el query");
    
            echo "<script type='text/javascript'>"; 
            echo "if (confirm('El Usuario o Constraseña no existen, ¿Deseea registrarse?')){ location.href='registro.php';} 
                else{location.href='inicio_sesion.php';}";
            echo "</script>";
        }
    }
    
?>