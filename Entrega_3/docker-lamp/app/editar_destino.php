<?php
    require 'conexion.php'; //Llamamos al archivo php que establece la conexion con la BD
    require 'inicioSesion.php'; //Llamamos al archivo php para poder utilizar la variable de sesion 
    
    //Recogemos las variables que se nos envian desde el js
    $id_viaje = $_REQUEST['id']; 
    $destino = $_REQUEST['destino'];
    $valor_sesion = $_SESSION['user']; 

    $q = "UPDATE viaje SET DESTINO='$destino' WHERE ID_VIAJE = '$id_viaje'"; //Actualizamos el dato por otro nuevo
    $consulta = mysqli_query($conexion,$q);
    header("location: mostrarTabla.php");
?>