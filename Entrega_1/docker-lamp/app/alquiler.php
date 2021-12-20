<?php 
    require 'conexion.php'; //Llamamos al archivo php que establece la conexion con la BD
    require 'inicioSesion.php'; //Llamamos al archivo php para poder utilizar la variable de sesion 
    //Recogemos las variables que se nos envian desde el js
    $fechaO = $_REQUEST['fechaO']; 
    $fechaF = $_REQUEST['fechaF'];
    $origen = $_REQUEST['origen'];
    $destino = $_REQUEST['destino'];
    //Recogemos la variable de sesion
    $valor_sesion = $_SESSION['user'];   

    //Creamos la consulta Mysql y la enviamos al servidor de la BD
    $q = "INSERT INTO viaje(USUARIO,ORIGEN,DESTINO,FECHA_INICIO,FECHA_FIN) VALUES ('".$valor_sesion."','".$origen."',
    '".$destino."','".$fechaO."','".$fechaF."')"; 
    $consulta = mysqli_query($conexion,$q);
    header("location: ../mostrarTabla.php"); //Redirigimos a la pagina mostrarTabla.php que se encuentra en la carpeta php
?>