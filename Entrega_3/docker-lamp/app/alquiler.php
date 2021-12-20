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
        <link rel="stylesheet" href="css/styles_alquiler.css">  
        <script type="text/javascript" src="javascript/alquiler.js"></script>
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
    <body background="images/satelite.jpg">
        <nav id="navegacion">
            <ul>
                <li>
                    <a class="link" href="index.php">HOME</a> 
                </li>

                <li>
                    <a class="link" href="mostrarTabla.php">MIS VIAJES</a>
                </li>

                <li>
                    <a class="link" href="registro.php">ÚNETE</a> 
                </li>

                <li>
                    <a class="link1" href="alquiler.php">ALQUILER</a>
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
            <h1 class="titulo">RESERVA TU VIAJE ESPACIAL</h1>
        </header>
        
        <form name="alq">
            <div>
                <p class="fecha">FECHA IDA :</p>
                <input type="date" name="fecha_origen"  placeholder="Fecha de ida" value="Fecha ida" required>
                <p class="fecha">FECHA VUELTA :</p>
                <input type="date" name="fecha_fin" placeholder="Fecha de vuelta" > <!-- Puede ser un viaje de solo ida-->
            </div>
            <div>
                <input type="text" name="origen"  placeholder="Introduzca el pais de origen" required>
                <select class = "planetas" id="desplegable" name="destino">
                    <option selected value="0"> Elige una opción </option>
                    <optgroup label="Vía Lactea">
                        <option value="1">Luna</option>
                        <option value="2">Sol</option>
                        <option value="3">Marte</option>
                        <option value="4">Jupiter</option>
                        <option value="5">Pluton</option>
                        <option value="6">Venus</option>
                        <option value="7">Tierra</option>
                        <option value="8">Neptuno</option>
                        <option value="9">Saturno</option>
                        <option value="10">Mercurio</option>
                        <option value="11">Urano</option>
                    </optgroup>
                </select>
            </div>
            <div>
                <input type="button" class ="alqui" value="Reservar" onclick="alquilar()">
            </div>
        </form>
    
        <footer id="pie">
        Derechos reservados 2021-2022
        </footer>  
    </body>
</html>