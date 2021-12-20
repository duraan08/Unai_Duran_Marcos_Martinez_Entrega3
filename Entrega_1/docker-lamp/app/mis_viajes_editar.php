<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Unai Durán">
        <meta name="author" content="Marcos Martínez">
        <link rel="stylesheet" href="css/styles_mis_viajes.css"> 
        <script type="text/javascript" src="javascript/edit_viajes.js"></script>    
        <script type="text/javascript" src="javascript/cerrar_sesion.js"></script>
   
    </head>

    <body background="images/planet.jpg">
        <nav id="navegacion">
            <ul>
                <li>
                    <a class="link" href="index.html">HOME</a> 
                </li>

                <li>
                    <a class="link" href="mostrarTabla.php">MIS VIAJES</a>
                </li>

                <li>
                    <a class="link" href="registro.html">ÚNETE</a> 
                </li>

                <li>
                    <a class="link" href="../alquiler.html">ALQUILER</a>
                </li>

                <li>
                    <a class="link" href="mi_espacio.php">MI ESPACIO</a>
                </li>

                <li>
                    <div class="is">
                        <a href="inicio_sesion.html">INICIO SESION</a>
                    </div>
                </li>
            </ul>
        </nav>
        <p>                
            <input type="button" class="CS" value="CERRAR SESION" onclick="cerrarSesion()" style="float: right;">
        </p>
        <header id="cabecera">
            <h1 class="titulo">EDITA TUS VIAJES</h1>
        </header>

        <div>
        <select class = "identificador" id="desplegable" name="id">
                    <option selected value = "0" > Elige el ID que deseas editar </option>
                    <?php
                        require 'conexion.php'; 
                        $identificador = $_REQUEST['identificador']; 
                        $q = "SELECT ID_VIAJE FROM viaje WHERE ID_VIAJE = $identificador ";
                        $consulta = mysqli_query($conexion,$q); 
                        while($array = mysqli_fetch_assoc($consulta)){
                            $id = $array['ID_VIAJE']; 
                            echo "<option value=$id> $id </option>";
                        }
                    ?>
                </select>
        </div>
        
        <form name="edit">
            <div>
                <input type="text"  class="datos1" name="origen" size="40" placeholder="Introduzca un origen">
                <input type="button" class="MV" value="Editar origen" onclick="editarOrigen()">

                <select class = "planetas" id="planet" name="destino">
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
                <input type="button" class="MV" value="Editar destino" onclick="editarDestino()">
            </div>

            <div>
                <p class="fecha">Introduzca la fecha de comienzo : </p>
                <input type="date"  class="datos1" name="fechaO" size="40" placeholder="Introduzca la fecha de comienzo">
                <input type="button" class="MV" value="Editar Fecha" onclick="editarFechaO()">

                <select class = "identificador" id="desplegable2" name="id">
                    <option selected value = "0" > Elige el ID que deseas eliminar </option>
                    <?php
                        require 'conexion.php'; 
                        $q = "SELECT ID_VIAJE FROM viaje";
                        $consulta = mysqli_query($conexion,$q); 
                        while($array = mysqli_fetch_assoc($consulta)){
                            $id = $array['ID_VIAJE']; 
                            echo "<option value=$id> $id </option>";
                        }
                    ?>
                </select>
                <input type="button" class="MV" value="Eliminar" onclick="eliminarViaje()">
            </div>

            <div>
                <p class="fecha">Introduzca la fecha de fin : </p>
                <input type="date"  class="datos1" name="fechaF" size="40" placeholder="Introduzca la fecha de fin">
                <input type="button" class="MV" value="Editar Fecha" onclick="editarFechaF()">
            </div>
        </form>
        <footer id="pie">
        Derechos reservados 2021-2022
        </footer>  
    </body>
</html>