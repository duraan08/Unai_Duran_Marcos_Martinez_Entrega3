<?php 
    require 'conexion.php'; //Llamamos al archivo php que establece la conexion con la BD
    require 'inicioSesion.php'; //Llamamos al archivo php para poder utilizar la variable de sesion 

    //Recogemos las variables que se nos envian desde el js
    $dni = $_REQUEST['dni'];
    $valor_sesion = $_SESSION['user']; 

    $q = "UPDATE usuario SET DNI='$dni' WHERE MAIL ='$valor_sesion'"; //Actualizamos el valor de la BD por uno nuevo
    $consulta = mysqli_query($conexion,$q);
    header("location: mi_espacio.php");
?>