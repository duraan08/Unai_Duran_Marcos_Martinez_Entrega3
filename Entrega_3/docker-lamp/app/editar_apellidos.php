<?php 
    require 'conexion.php'; //Llamamos al archivo php que establece la conexion con la BD
    require 'inicioSesion.php'; //Llamamos al archivo php para poder utilizar la variable de sesion 
    
    //Recogemos las variables que se nos envian desde el js
    $apellidos = $_REQUEST['apellidos'];
    $valor_sesion = $_SESSION['user'];  

    $q = "UPDATE usuario SET APELLIDOS='$apellidos' WHERE MAIL ='$valor_sesion'";
    $consulta = mysqli_query($conexion,$q);
    header("location: mi_espacio.php");
?>