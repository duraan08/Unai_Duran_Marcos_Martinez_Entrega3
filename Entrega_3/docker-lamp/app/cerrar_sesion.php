<?php
    require 'inicioSesion.php'; 
    //Terminamos con la sesion que esta iniciada
    session_destroy();  
    session_commit(); 
    //Redirigimos a la pestaña inicio_sesion.html
    header("location: inicio_sesion.php");
    exit();
?>