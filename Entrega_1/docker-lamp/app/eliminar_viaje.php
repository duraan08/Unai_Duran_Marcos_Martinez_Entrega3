<?php
    require 'conexion.php'; //Llamamos al archivo php que establece la conexion con la BD
    require 'inicioSesion.php'; //Llamamos al archivo php para poder utilizar la variable de sesion 

    //Recogemos las variables que se nos envian desde el js
    $id_viaje = $_REQUEST['id']; 
    //Recogemos la variable de sesion
    $valor_sesion = $_SESSION['user']; 

    $q = "DELETE FROM viaje WHERE ID_VIAJE = '$id_viaje'"; //Eliminamos la fila que corresponda con el id introducido
    $consulta = mysqli_query($conexion,$q);
    header("location: mostrarTabla.php");
?>