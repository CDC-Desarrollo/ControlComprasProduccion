<?php

require_once("conexion.php");

if(isset($_POST['txtIdPrealertaHidden'])){
    $id = $_POST['txtIdPrealertaHidden'];
    //echo $id;

    $result = $conexion->query(" select * from prealertas where id='$id' ");
    $obj = $result->fetch_object();

    $idPrealerta = $obj -> id;
    $id_cliente = $obj -> id_cliente;
    $peso = $obj -> peso;
    $alto = $obj -> alto;
    $largo = $obj -> largo;
    $ancho = $obj -> ancho;

    $valor = $obj -> valor;
    $contenido = $obj -> contenido;
    $origen = $obj -> peso;
    $seguro = $obj -> alto;
    $porcentaje_seguro = $obj -> largo;
    $tracking = $obj -> tracking;
    $fechahora = $obj -> fecha_hora;
    $timeStamp = date( "d/m/Y h:i A", strtotime($fechahora));

    $num_domicilio = $obj -> num_domicilio;

    $domicilio;

    switch ($num_domicilio) {
        case 0:
            $result_domicilio_cliente = $conexion->query(" select * from clientes where id='$id_cliente' ");
            $objClienteDom = $result_domicilio_cliente->fetch_object();
            $calle = $objClienteDom -> calle;
            $num = $objClienteDom -> numero_exterior;
            $colonia = $objClienteDom -> colonia;
            $estado = $objClienteDom -> estado;
            $ciudad = $objClienteDom -> ciudad;
            $cp = $objClienteDom -> codigo_postal;

            $domicilio = $calle . " #" . $num . ", " . $colonia . ". " . $ciudad . ", " . $estado . ". C.P (" . $cp . ").";
        break;
    
        case 1:
            $buscador = $num_domicilio + 1;

            $result_domicilio_cliente = $conexion->query(" select * from domicilios where num_domicilio='$buscador' and  id_cliente='$id_cliente'");

            $objClienteDom = $result_domicilio_cliente->fetch_object();
            $calle = $objClienteDom -> calle;
            $num = $objClienteDom -> numero_exterior;
            $colonia = $objClienteDom -> colonia;
            $estado = $objClienteDom -> estado;
            $ciudad = $objClienteDom -> ciudad;
            $cp = $objClienteDom -> codigo_postal;

            $domicilio = $calle . " #" . $num . ", " . $colonia . ". " . $ciudad . ", " . $estado . ". C.P (" . $cp . ").";

        break;

        case 2:
            $buscador = $num_domicilio + 1;

            $result_domicilio_cliente = $conexion->query(" select * from domicilios where num_domicilio='$buscador' and  id_cliente='$id_cliente'");

            $objClienteDom = $result_domicilio_cliente->fetch_object();
            $calle = $objClienteDom -> calle;
            $num = $objClienteDom -> numero_exterior;
            $colonia = $objClienteDom -> colonia;
            $estado = $objClienteDom -> estado;
            $ciudad = $objClienteDom -> ciudad;
            $cp = $objClienteDom -> codigo_postal;

            $domicilio = $calle . " #" . $num . ", " . $colonia . ". " . $ciudad . ", " . $estado . ". C.P (" . $cp . ").";
            
        break;
    }

    if($tracking == "")
    {
        $tracking = "No tiene.";
    }
    

    $status = $obj -> status;

    $result_comprobantes = $conexion->query(" select * from comprobantes where idPrealerta='$id' ");
    $comprobante = $result_comprobantes->fetch_object();

    if(mysqli_num_rows($result_comprobantes) > 0)
    {
        $ruta = "php/";
    $comprobantetmp = $comprobante -> ruta;
    $ruta = $ruta . $comprobantetmp;
    }

    

}

?>