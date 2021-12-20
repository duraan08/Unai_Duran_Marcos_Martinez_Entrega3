<?php
    session_start();
    require 'conexion.php';
    require 'inicioSesion.php';
?>
<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Unai Durán">
        <meta name="author" content="Marcos Martínez">
        <link rel="stylesheet" href="css/styles_mi_espacio.css">  
        <script type="text/javascript" src="javascript/mi_espacio.js"></script>   
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

    <body background="images/misp.jpg">
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
                    <a class="link" href="alquiler.php">ALQUILER</a>
                </li>

                <li>
                    <a class="link1" href="mi_espacio.php">MI ESPACIO</a>
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

        <header id = "cabecera">
            <h1 class="titulo">TUS DATOS</h1>
        </header>
        <?php
            $valor_sesion = $_SESSION['user']; 
            $q = "SELECT * FROM usuario WHERE MAIL = '$valor_sesion'";
            $result=mysqli_query($conexion,$q);
            if ($result){  
                //Utilizamos un while para que este en constante revision, por si hay cambios
                while($mostrar=mysqli_fetch_assoc($result)){
        ?>    
            <p class="info">NOMBRE : <?php echo $mostrar['NOMBRE']; ?></p>
            <p class="info">APELLIDOS : <?php echo $mostrar['APELLIDOS'];?></p>
            <p class="info">DNI : <?php echo $mostrar['DNI'];?></p>
            <p class="info">TELEFONO : <?php echo $mostrar['TELEFONO'];?></p>
            <p class="info">FECHA NACIMIENTO : <?php echo $mostrar['FECHA_NACIMIENTO'];?></p>
            <p class="info">DIRECCION : <?php echo $mostrar['DIRECCION'];?></p>
            <p class="info">MAIL : <?php echo $mostrar['MAIL'];?></p>
            <?php
                include 'Encript.php'; //Llamamos al archivo php para poder desencriptar las claves 
                $desencriptado = Encript::desencriptar($mostrar['BANCO']);
            ?>
            <p class="info">BANCO : <?php echo $desencriptado;?></p>
        <?php
                }
            }
            else{
                echo "Fallo"; 
            }
        ?>
        
        <header id="cabecera">
            <h1 class="titulo">EDITA TUS DATOS</h1>
        </header>

        <form name="edit">
            <div>
                <input type="text" name="nombre" size="40" placeholder="Introduzca su nombre">
                <input type="button" class="MP" value="Editar Nombre" onclick="editarNombre()">

                <input type="text" name="apellidos" size="40" placeholder="Introduzca ambos apellidos">
                <input type="button" class="MP" value="Editar Apellidos" onclick="editarApellidos()">
            </div>

            <div>
                <input type="text" name="dni" size="40" placeholder="Introduzca su DNI: 12345678Z">
                <input type="button" class="MP" value="Editar Dni" onclick="editarDNI()">

                <input type="text" name="telefono" size="40" placeholder="Introduzca su número de teléfono: 666888999">
                <input type="button" class="MP" value="Editar Teléfono" onclick="editarTelefono()">
            </div>

            <div>
                <p class="fecha">Introduzca su fecha de nacimiento : </p>
                <input type="date" name="fecha" size="40" placeholder="Introduzca su fecha de nacimiento">
                <input type="button" class="MP" value="Editar Fecha" onclick="editarFecha()">

                <input type="text" name="direccion" size="40" placeholder="Introduzca su dirección">
                <input type="button" class="MP" value="Editar Dirección" onclick="editarDireccion()">
            </div>

            <div>
                <input type="email" name="mail" size="40" placeholder="Introduzca su e-mail : example@example.com">
                <input type="button" class="MP" value="Editar E-mail" onclick="editarMail()">
            </div>

            <div>
                <input type="text" name="banco" size="40" placeholder="Introduzca su cuenta bancaria">
                <input type="button" class="MP" value="Editar cuenta bancaria" onclick="editarBanco()">
            </div>

            <div>
                <input type="password" name="contrasena1" size="40" placeholder="Introduza una contraseña: Min 8 caracteres">
                <input type="password" name="contrasena2" size="40" placeholder="Repita la contraseña">
                <input type="button" class="MP" value="Editar Contraseña" onclick="editarPass()">
            </div>
        </form>

        <footer id="pie">
        Derechos reservados 2021-2022
        </footer>  
    </body>
</html>
