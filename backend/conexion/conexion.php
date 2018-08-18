<?php
$datosConexion= parse_ini_file(DOCUMENT_ROOT . "/clase9/backend/config/bdconfig.ini");


$conn = new PDO("mysql:host=" . $datosConexion['server'] . ";
    dbname=" . $datosConexion['base'].";charset=utf8mb4",
        $datosConexion['user'],$datosConexion['clave']);
