<?php
//DB details
$dbHost = 'localhost';
$dbUsername = 'id15523937_veraydens';
$dbPassword = 'pape1Pimpollo*';
$dbName = 'id15523937_papeleria';

//Create connection and select DB
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("No hay Conexion con la base de datos: " . $db->connect_error);
} 
?>