//Extraido de : https://www.lawebdelprogramador.com/foros/PHP/1362548-Cierre-de-sesion-por-inactividad-en-PHP.html
//Autor : Alexis Ochoa 


//60000 --> 60s 
//Cierre de sesión si estas más de 1 minuto de inactividad en la mísma página (más de un minuto en una página)
function killerSession(){
    setTimeout("window.open('destruye_sesion.php','_top');",60000);
}
