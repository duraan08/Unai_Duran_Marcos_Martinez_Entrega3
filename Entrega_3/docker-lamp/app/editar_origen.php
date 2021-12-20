<?php
    require 'conexion.php'; //Llamamos al archivo php que establece la conexion con la BD
    require 'inicioSesion.php'; //Llamamos al archivo php para poder utilizar la variable de sesion
    
    //Recogemos las variables que se nos envian desde el js
    $id_viaje = $_REQUEST['id']; 
    $origen = $_REQUEST['origen'];
    //Recogemos la variable de sesion
    $valor_sesion = $_SESSION['user']; 

    $q = "UPDATE viaje SET ORIGEN='$origen' WHERE ID_VIAJE = '$id_viaje'"; //Actualizamos el valor de la BD por uno nuevo
    $consulta = mysqli_query($conexion,$q);
    header("location: mostrarTabla.php");
?>