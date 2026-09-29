<?php
//archivo de conexion bd
//Creamos unas constanstes, datos de nuestra conexion
//las constantes se crean con define "DB_HOST" es el nombre de la constante y "localhost" es el valor
define("DB_HOST" , "localhost");
define("DB_USUARIO", "root");
define("DB_PASSWORD", "");
define("DB_NOMBRE", "vehiculos");

//Usamos try para ejecuatar el codigo Digamos que es como una concicional pero sin la condicion
try {
    //DSN data source name indica donde esta la bd,nombre y tipo
    $datosConexion = "mysql:host=" . DB_HOST . ";dbname=" . DB_NOMBRE;
    //Creamos las conexion
    $conexion = new PDO($datosConexion, DB_USUARIO, DB_PASSWORD);

}
//Para capturar el error
//PDOexecption es como una funcion de pdo que la metemos en la variable error
catch (PDOException $error) {
    //Si falla
    echo "No se ha podido conectar";
    return;

}
?>