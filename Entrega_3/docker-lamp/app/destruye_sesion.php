<?php
    require 'inicioSesion.php'; 
    session_start();

    if (isset($_SESSION['user'])){
        //Terminamos con la sesion que esta iniciada 
        session_destroy();
        //Redirigimos a la pestaña inicio_sesion.html
        echo "<script type='text/javascript'> 
            alert('Se ha cerrado sesión por inactividad'); 
            location.href='index.php';
        </script>";
    }
?>