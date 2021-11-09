<?php

require_once("conexion.php");

if(isset($_POST['txtIdPrealertaHidden'])){
    $id = $_POST['txtIdPrealertaHidden'];
    //echo $id;

    $result = $conexion->query(" select * from prealertas where id='$id' ");
    $obj = $result->fetch_object();

    $idPrealerta = $obj -> id;
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

    $status = $obj -> status;
}

?>