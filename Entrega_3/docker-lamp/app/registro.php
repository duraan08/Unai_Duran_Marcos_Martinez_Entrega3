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
        <link rel="stylesheet" href="css/styles_registro.css"> 
        <script type="text/javascript" src="javascript/registro.js"></script>
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

    <body background="images/astronaut.jpg">
        <nav id="navegacion">
            <ul>
                <li>
                    <a class="link" href="index.php">HOME</a> 
                </li>

                <li>
                    <a class="link" href="mostrarTabla.php">MIS VIAJES</a>
                </li>

                <li>
                    <a class="link1" href="registro.php">ÚNETE</a> 
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
        <form action="php/cerrar_sesion.php" method="POST">                
            <input type="button" class="CS" value="CERRAR SESION" onclick="cerrarSesion()" style="float: right;">
        </form>

        <header id="cabecera">
            <h1 class="titulo">ÚNETE A NUESTRO CLUB</h1>
        </header>
        
        <form name="register">
            <div class=nombre_completo>
                <input type="text" name="nombre" size="40" placeholder="Introduzca su nombre" required>
                <input type="text" name="apellidos" size="40" placeholder="Introduzca ambos apellidos" required>
            </div>
            <div>
                <input type="text" name="dni" size="40" placeholder="Introduzca su DNI : 12345678Z" required>
                <input type="text" name="telefono" size="40" placeholder="Introduzca su número de telefono : 666888999" required>
            </div>
            
            <div>
                <p class="fecha">Introduzca su fecha de nacimiento : </p>
                <input type="date" name="fecha" size="40" placeholder="Introduzca su fecha de nacimiento" required>
            </div>
            <div>
                <input type="text" name="direccion" size="40" placeholder="Introduzca su dirección" required>
                <input type="text" name="banco" size="40" placeholder="Introduzca su cuenta bancaria" required>
            </div>
            <div>
                <input type="email" name="mail" size="40" placeholder="Introduzca su e-mail : example@example.com" required>
                <input type="password" name="contrasena1" size="40" placeholder="Introduza una contraseña : Min 8 caracteres" required>
                <input type="password" name="contrasena2" size="40" placeholder="Repita la contraseña" required>
            </div>
            <input type="button" class="regis" value="Registrarse" onclick="registrar()">
        </form>

        <footer id="pie">
        Derechos reservados 2021-2022
        </footer>  
    </body>
</html>
