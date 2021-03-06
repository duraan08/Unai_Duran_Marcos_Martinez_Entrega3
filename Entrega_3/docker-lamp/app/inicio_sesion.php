<?php
    session_start();
    require 'inicioSesion.php'; 
    require 'conexion.php'; 
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Unai Durán">
        <meta name="author" content="Marcos Martínez">
        <link rel="stylesheet" href="css/styles_inicio_sesion.css">  
        <script type="text/javascript" src="javascript/inicio_sesion.js"></script>  
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

    <body background="images/nave.jpg">
        <nav id="navegacion">
            <ul>
                <li>
                    <a class="link" href="index.html">HOME</a> 
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
        <div class="sub">
            <ul>
                <li>                
                    <input type="button" class="CS" value="CERRAR SESION" onclick="cerrarSesion()" style="float: right;">
                </li>
            </ul>
        </div>

        <header id="cabecera">
            <h1 class="titulo">INICIA TU SESIÓN</h1>
        </header>
        
        <form name = "datos">
            <input type="email" name="usuario" size="40" placeholder="Introduzca su e-mail: example@example.com" required>
            <input type="password" name="pass" size="40" placeholder="Introduzca su contraseña" required>
            <input type="button" class="inic" value="Enviar" onclick="iniciarSesion()">
        </form>

        <footer id="pie">
        Derechos reservados 2021-2022
        </footer>  
    </body>
</html>
