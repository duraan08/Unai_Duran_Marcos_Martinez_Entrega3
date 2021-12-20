<?php
    $server = 'db'; 
    $username = 'admin';
    $password = 'test'; 
    $database = 'database'; 
    //Establecemos conexion con el servidor de la BD
    $conexion = mysqli_connect($server,$username,$password,$database) or die('Error en la conexión con el servidor');
?>
