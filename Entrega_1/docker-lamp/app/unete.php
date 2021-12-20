<?php
    require 'conexion.php'; //Utilizamos el conexion.php para mantenernos conectados a la BD
    //Recogemos las variables enviadas por el js
    $nombre = $_REQUEST['nombre'];
    $apellidos = $_REQUEST['apellidos'];
    $dni = $_REQUEST['dni'];
    $telf = $_REQUEST['telf'];
    $fecha = $_REQUEST['fecha'];
    $direccion = $_REQUEST['direccion'];
    $mail = $_REQUEST['mail'];
    $pass = $_REQUEST['pass1'];

    $dni_igual = "SELECT COUNT(*) as CONTADOR FROM usuario WHERE DNI='$dni' OR MAIL='$mail'"; //Comprobamos si el dni ya se encuentra en la BD, puesto que es unico
    $resultado = mysqli_query($conexion,$dni_igual);
    $array = mysqli_fetch_array($resultado);

    if ($array['CONTADOR'] > 0){ //Si esta se emitira un mensaje de error
        echo "<script type='text/javascript'> 
        alert('¡El DNI o E-Mail introducido ya existe!'); 
        location.href='registro.html';
        </script>"; 
    }
    else{
        $sql = "INSERT INTO usuario VALUES('".$nombre."','".$apellidos."','".$dni."','".$telf."', '".$fecha."','".$direccion."','".$mail."','".$pass."')";
        $result = mysqli_query($conexion,$sql) or die('Error en el query database');
        header("location: inicio_sesion.html");
    }

?>

