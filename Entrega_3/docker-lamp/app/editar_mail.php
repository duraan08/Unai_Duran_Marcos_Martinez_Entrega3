<?php 
    require 'conexion.php'; //Llamamos al archivo php que establece la conexion con la BD
    require 'inicioSesion.php'; //Llamamos al archivo php para poder utilizar la variable de sesion
    
    //Recogemos las variables que se nos envian desde el js
    $mail = $_REQUEST['mail'];
    //Recogemos la variable de sesion
    $valor_sesion = $_SESSION['user']; 

    $q = "UPDATE usuario SET MAIL='$mail' WHERE MAIL ='$valor_sesion'"; //Actualizamos el valor de la BD por uno nuevo
    $consulta = mysqli_query($conexion,$q);
    header("location: inicio_sesion.php");
?>