<?php
    session_start();
    require 'inicioSesion.php'; 
    require 'conexion.php'; 
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Galácticos Web</title>
        <meta name="description" content="Esta es la página web de nuestro programa de alquileres de planetas">
        <meta name="author" conetent="Unai Durán">
        <meta name="author" content="Marcos Martínez">
        <meta name="keywords" content="planets, planetas, galácticos, alquiler, future">
        <link rel="stylesheet" href="css/styles_index.css">     
        <script type="text/javascript" src="javascript/index.js"></script>
        <script type="text/javascript" src="javascript/cerrar_sesion.js"></script>
        <script src="javascript/cerrar_sesion_automatico.js"></script>

        <script>
        <?php
            $us = $_SESSION['user']; 
            if(isset($us)){
        ?>
            window.onload = killerSession();

        <?php
            }

        ?>
        </script>
        
    </head>

    <body background="images/red.jpg">
        <nav id="navegacion">
            <ul>
                <li>
                    <a class="link1" href="index.php">HOME</a> 
                </li>

                <li>
                    <a class="link" href="mostrarTabla.php">MIS VIAJES</a>
                </li>

                <li>
                    <a class="link" href="registro.php">ÚNETE</a> 
                </li>

                <li>
                    <a class="link" href="alquiler.php">ALQUILER</a>
                </li>

                <li>
                    <a class="link" href="mi_espacio.php">MI ESPACIO</a>
                </li>

                <li>
                    <div class="is">
                        <a href="inicio_sesion.php">INICIO SESION</a>
                    </div>
                </li>
            </ul>
        </nav>
        <p>                
            <input type="button" class="CS" value="CERRAR SESION" onclick="cerrarSesion()" style="float: right;">
        </p>

        <header id="cabecera">
            <h1 class="titulo">VIAJES GALÁCTICOS</h1>
            <h2 class="subtitulo">¡BIENVENIDOS AL FUTURO!</h2>
        </header>
        <div>
            <input type = "button" class ="comenzar" value="¡Comenzar!" onclick="comenzar()">
        </div>
        <footer id="pie">
        Derechos reservados 2021-2022
        </footer>  
    </body>
</html>