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
        <link rel="stylesheet" href="css/styles_tabla.css">  
        <script type="text/javascript" src="javascript/alquiler.js"></script>
        <script type="text/javascript" src="javascript/edit_viajes.js"></script>
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

    <body background="images/tabla.jpg">
        <nav id="navegacion">
            <ul>
                <li>
                    <a class="link" href="index.php">HOME</a> 
                </li>

                <li>
                    <a class="link1" href="mostrarTabla.php">MIS VIAJES</a>
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
        <header>
            <h1 class="titulo">DATOS DE TUS VIAJES</h1>
        </header>
        <br class="tabla">
            <table border="6" class="t">
                <tr>
                    <td class="tTabla" > USUARIO </td>
                    <td class="tTabla" > ORIGEN </td>
                    <td class="tTabla" > DESTINO </td>
                    <td class="tTabla" > FECHA INICIO </td>
                    <td class="tTabla" > FECHA FIN </td>
                    <td class="tTabla" > ID VIAJE </td>
                </tr>
                <?php
                    $valor_sesion = $_SESSION['user']; 
                    $sql = "SELECT * FROM viaje WHERE USUARIO = '$valor_sesion'";
                    $result=mysqli_query($conexion,$sql);
                    if ($result){  
                    while($mostrar=mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td class="iTabla" ><?php echo $mostrar['USUARIO']; ?></td>
                    <td class="iTabla" ><?php echo $mostrar['ORIGEN']; ?></td>
                    <td class="iTabla" ><?php echo $mostrar['DESTINO']; ?></td>
                    <td class="iTabla" ><?php echo $mostrar['FECHA_INICIO']; ?></td>
                    <td class="iTabla" ><?php echo $mostrar['FECHA_FIN']; ?></td>
                    <td class="iTabla" ><input type="button" id = "identificador" class="id" value = "<?php echo $mostrar['ID_VIAJE'];?>" 
                    onclick="obtenerID(<?php echo $mostrar['ID_VIAJE'];?>)"></td>
                </tr>

                <?php
                        }
                    }
                    else {
                        echo mysqli_error($conexion); 
                    }
                ?>
            </table>
        </br>
        <footer id="pie">
            Derechos reservados 2021-2022
        </footer>  
    </body>
</html>