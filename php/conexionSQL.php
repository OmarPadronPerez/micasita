<?php
    function conexion(){
        $direccion="192.168.1.72";
        $usuario="conexion";
        $contrasena="conexion1";
        $base="micasita";

        $mysqli = new mysqli($direccion, $usuario, $contrasena, $base);
        if ($mysqli->connect_errno) {
            echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
            return null;
        }
        //echo $mysqli->host_info . "\n";
        return $mysqli;
    }
    
    
?>