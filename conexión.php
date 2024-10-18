<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tablaperiodica";

$con = new mysqli($servername, $username, $password, $dbname);

if($con->connect_error){
    die("conexión fallida" . $con->connect_error);
}