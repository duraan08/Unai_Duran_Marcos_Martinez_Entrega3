<?php 
    require 'conexion.php'; //Llamamos al archivo php que establece la conexion con la BD
    require 'inicioSesion.php'; //Llamamos al archivo php para poder utilizar la variable de sesion 
    include_once('EncriptarPass.php'); //Llamamos al archivo php para poder encriptar las contraseñas

    //Recogemos las variables que se nos envian desde el js
    $pass = $_REQUEST['pass'];
    //Recogemos la variable de sesion 
    $valor_sesion = $_SESSION['user'];

    $salt = generateRandomString();
    $consulta = mysqli_query($conexion,$salt);
    $encriptado = EncriptarPass::encriptar($pass ,$salt);
    $q = "UPDATE usuario SET PASS='$encriptado' WHERE MAIL ='$valor_sesion'"; //Actualizamos el valor de la BD por uno nuevo
    $consulta = mysqli_query($conexion,$q);
    $q2 = "UPDATE usuario SET SALT='$salt' WHERE MAIL = '$valor_sesion'"; 
    $consulta2 = mysqli_query($conexion,$q2);
    header("location: inicio_sesion.php");
?>

<?php
//Extraido de : https://ejemplocodigo.com/ejemplo-php-generar-cadena-aleatoria-o-random-string/ 
//Autor : Javier Crego

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
} 
?>