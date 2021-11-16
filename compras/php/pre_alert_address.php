<?php

require_once("conexion.php");

if(isset($_POST['txtIdUsuarioHidden'])){
    $id_usuario = $_POST['txtIdUsuarioHidden'];
    //echo $id;
    //$id_usuario = 93;
    
    $result = $conexion->query(" select id,calle, numero_exterior,colonia, estado, ciudad, codigo_postal from clientes where id_usuario='$id_usuario' ");
    $obj = $result->fetch_object();

    $idCliente = $obj -> id;
    echo $idCliente . "<br>";
    $calle = $obj -> calle;
    $num = $obj -> numero_exterior;
    $colonia = $obj -> colonia;
    $estado = $obj -> estado;
    $ciudad = $obj -> ciudad;
    $cp = $obj -> codigo_postal;

    $dir1 = $calle . " #" . $num . ", " . $colonia . ". " . $ciudad . ", " . $estado . ". C.P (" . $cp . ").";
    //echo $dir1 . "<br>";
 
    $resultDomicilios = $conexion->query("select * from domicilios where id_cliente='$idCliente' ");
    /* 
    $objDir = $resultDomicilios->fetch_object();
    print_r($objDir);
    */
    $calle2;
    $num2;
    $colonia2;
    $estado2;
    $ciudad2;
    $cp2;

    $calle3;
    $num3;
    $colonia3;
    $estado3;
    $ciudad3;
    $cp3;

    while($fila = $resultDomicilios->fetch_object())
    {
        if($fila->num_domicilio == 2)
        {
            $calle2 = $fila->calle ;
            $num2 = $fila->numero_exterior;
            $colonia2 = $fila -> colonia;
            $estado2 = $fila -> estado;
            $ciudad2 = $fila -> ciudad;
            $cp2 = $fila -> codigo_postal;
        }
        else
        {
            $calle3 = $fila->calle ;
            $num3 = $fila->numero_exterior;
            $colonia3 = $fila -> colonia;
            $estado3 = $fila -> estado;
            $ciudad3 = $fila -> ciudad;
            $cp3 = $fila -> codigo_postal;
        }
    }

    $dir2 = $calle2 . " #" . $num2 . ", " . $colonia2 . ". " . $ciudad2 . ", " . $estado2 . ". C.P (" . $cp2 . ").";
    
    //Valida que los domicilios no estén en blanco
    $blnDomicilio2 = true;
    $blnDomicilio3 = true;
    

    if($calle2 == "" || $colonia2 == "" || $estado2 == "" || $ciudad2 == "")
    {
        $blnDomicilio2 = false;
    }
    //echo $dir2 . "<br>";

    $dir3 = $calle3 . " #" . $num3 . ", " . $colonia3 . ". " . $ciudad3 . ", " . $estado3 . ". C.P (" . $cp3 . ").";

    if($calle3 == "" || $colonia3 == "" || $estado3 == "" || $ciudad3 == "")
    {
        $blnDomicilio3 = false;
    }
    //echo $dir3 . "<br>";
}

?>