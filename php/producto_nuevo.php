<?php
    include 'conexionSQL.php';
    $conexionSQL=conexion();
    if($conexionSQL==null){
        die('falla sql');
    }
    $sql='SELECT * FROM usuarios';
    $resultado=$conexionSQL->query($sql);

    


    //echo $conexionSQL->host_info . "\n";

    
?>