<?php
    $base="192.168.1.72"
    $usuario="conexion";
    $contrasena="conexion1"
    $base="micasita"

    $mysqli = new mysqli($base, $usuario, $contrasena, $base);
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    echo $mysqli->host_info . "\n";
    
?>