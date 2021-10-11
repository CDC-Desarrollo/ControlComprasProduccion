<?php 
    $conexion = new mysqli('localhost','root','','control_compras');
    
    //$conexion = new mysqli('localhost','contrpd3_desarrollo','DeveloperAndT1*','contrpd3_control_compras');               //PRODUCCIÓN

    if($conexion-> connect_error){
        die('No se pudo conectar al servidor');
    }

?>