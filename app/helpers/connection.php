<?php

$host = "localhost";
$bdName = "triangulejobs";
$user = "root";
$passwordBD = "";

$mysqli = new mysqli($host, $user, $passwordBD, $bdName);
if($mysqli->connect_errno){
    echo "Falha na conexão: (". $mysqli->connect_errno . ")" . $mysqli->connect_error;
}

?>