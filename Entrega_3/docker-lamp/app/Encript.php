<?php
// Extraido de : https://www.youtube.com/watch?v=pJhwIm3YL0o
// Autor : Carlos Alfaro 
    define('METHOD','AES-256-CBC');
    define('SECRET_KEY','$UNAIMARCOS@2021sv');
    define('SECRET_IV', '101710');

    class Encript{
        public static function encriptar($q){
            $output = FALSE;
            $key = hash('sha256', SECRET_KEY);
            $iv = substr(hash('sha256', SECRET_IV), 0, 16);
            $output = openssl_encrypt($q, METHOD, $key, 0, $iv);
            $output = base64_encode($output);
            return $output;
     
        }
        
        public static function desencriptar($q){
            $key = hash('sha256', SECRET_KEY);
            $iv = substr(hash('sha256', SECRET_IV), 0, 16);
            $output = openssl_decrypt(base64_decode($q), METHOD, $key, 0, $iv);
            return $output;
        }
    }
?>
