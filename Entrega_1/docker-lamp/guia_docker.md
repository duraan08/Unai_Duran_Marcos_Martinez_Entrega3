----------------------------------------------------------------------------------GUÍA PARA MONTAR EL DOCKER----------------------------------------------------------------------------------------------
--------------------------------------------------UNAI DURÁN ARCE---------------------------------------------------------MARCOS MARTÍNEZ GONZALO---------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
PASO NÚMERO 1
Crear una carpeta docker-lamp, para a continuación introducir los archivos que te indicamos en la siguiente linea.
Descargar la carpeta app y los archivos dockerfile, database.sql, docker-compose.yml

PASO NÚMERO 2
Teniendo en cuenta que docker y docker-compose están instalados en su computadora, abrimos la terminal (si no descargarlos).
Nos introducimos en la carpeta del donde se encuentre el proyecto. (Ejem: cd /home/usuario/nombre_de_la_carpeta_con_proyecto)
Ejecutamos los siguientes comandos:
	2.1 $sudo docker build -t="web" . 
	2.2 $docker-compose up 
		2.2.1 Si aparece algún error, probar con $sudo docker-compose up

PASO NÚMERO 3
Sin cerrar la terminal introducimos en el navegador la dirección "localhost:81" --> Así arrancaremos la web

PASO NÚMERO 4
Para enlazar la base de datos introducimos en el navegador la dirección "localhost:8890", utilizamos como usuario: "admin" y como contraseña: "test"

PASO NÚMERO 5
Clickamos en la base de datos llamada "database" e importamos la base de datos descargada en el PASO 1 "database.sql".

PASO NÚMERO 6
Finalmente volvemos a "localhost:81" y podemos comenzar a utilizar la pagina web

PASO NÚMERO 7
Para la desconexión, entramos en la terminal que está en ejecución y escribimos "^C (ctrl + C)", se dentendra la ejecución.
Escribimos en la terminal "docker-compose down", si da error utilizar "sudo docker-compose down".
