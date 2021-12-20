<?php
    require 'conexion.php'; //Utilizamos el conexion.php para mantenernos conectados a la BD
    include 'Encript.php'; //Llamamos al archivo php para poder encriptar el numero de cueta bancaria 
    include 'EncriptarPass.php'; //Llamamos al archivo php para poder encriptar las contraseñas 


    //Recogemos las variables enviadas por el js
    $nombre = $_REQUEST['nombre'];
    $apellidos = $_REQUEST['apellidos'];
    $dni = $_REQUEST['dni'];
    $telf = $_REQUEST['telf'];
    $fecha = $_REQUEST['fecha'];
    $direccion = $_REQUEST['direccion'];
    $mail = $_REQUEST['mail'];
    $pass = $_REQUEST['pass1'];
    $banco = $_REQUEST['banco']; 


    $dni_igual = "SELECT COUNT(*) as CONTADOR FROM usuario WHERE DNI='$dni' OR MAIL='$mail'"; //Comprobamos si el dni ya se encuentra en la BD, puesto que es unico
    $resultado = mysqli_query($conexion,$dni_igual);
    $array = mysqli_fetch_array($resultado);

    if ($array['CONTADOR'] > 0){ //Si esta se emitira un mensaje de error
        echo "<script type='text/javascript'> 
        alert('¡El DNI o E-Mail introducido ya existe!'); 
        location.href='registro.php';
        </script>"; 
    }
    else{
        $salt = generateRandomString();
        $encriptado = Encript::encriptar($banco);      
        $pssCifrada = EncriptarPass::encriptar($pass ,$salt);
        $sql = "INSERT INTO usuario VALUES('".$nombre."','".$apellidos."','".$dni."','".$telf."', '".$fecha."','".$direccion."','".$mail."','".$pssCifrada."','".$encriptado."','".$salt."')";
        $result = mysqli_query($conexion,$sql) or die('Error en el query database');
        header("location: inicio_sesion.php");
    }

?>

<?php
//Extraido de : https://ejemplocodigo.com/ejemplo-php-generar-cadena-aleatoria-o-random-string/ 
//Autor : Javier Crego

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
} 
?>

