<?php
    // Extraido de : https://www.youtube.com/watch?v=pJhwIm3YL0o
    // Autor : Carlos Alfaro    
    // Con cambios para que la clave secreta ip sea aleatoria para cada usuario 

    define('METHOD','AES-256-CBC');
    define('SECRET_IV', '101710');

    class EncriptarPass{
        public static function encriptar($q, $salt){
            $output = FALSE;
            $key = hash('sha256', $salt);
            $iv = substr(hash('sha256', SECRET_IV), 0, 16);
            $output = openssl_encrypt($q, METHOD, $key, 0, $iv);
            $output = base64_encode($output);
            return $output;
        }

        public static function desencriptar($q, $salt){
            $key = hash('sha256', $salt);
            $iv = substr(hash('sha256', SECRET_IV), 0, 16);
            $output = openssl_decrypt(base64_decode($q), METHOD, $key, 0, $iv);
            return $output;
        }
    }
?>
