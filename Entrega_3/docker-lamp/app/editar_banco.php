<?php 
    require 'conexion.php'; //Llamamos al archivo php que establece la conexion con la BD
    require 'inicioSesion.php'; //Llamamos al archivo php para poder utilizar la variable de sesion 
    include 'Encript.php'; //Llamamos al archivo php para poder encriptar las claves 

    //Recogemos las variables que se nos envian desde el js
    $banco = $_REQUEST['banco'];
    //Recogemos la variable de sesion
    $valor_sesion = $_SESSION['user']; 

    $encriptado = Encript::encriptar($banco);
    $q = "UPDATE usuario SET BANCO='$encriptado' WHERE MAIL ='$valor_sesion'"; //Actualizamos el valor de la BD por uno nuevo
    $consulta = mysqli_query($conexion,$q);
    header("location: mi_espacio.php");

?>
