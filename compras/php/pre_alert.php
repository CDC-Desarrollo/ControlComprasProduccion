<?php

require_once("conexion.php");

if(isset($_POST['txtPeso']) && isset($_POST['txtvalor']) && isset($_POST['txtAlto']) &&
       isset($_POST['txtAncho']) && isset($_POST['txtLargo']) && isset($_POST['txtContenido']) && isset($_POST['txtOrigen']) 
       && isset($_POST['txtTracking']) && isset($_POST['selDomicilio'])
   )
   {
       $peso = $_POST['txtPeso'];
       $valor = $_POST['txtvalor'];
       $alto = $_POST['txtAlto'];
       $ancho = $_POST['txtAncho'];
       $largo = $_POST['txtLargo'];
       $contenido = $_POST['txtContenido'];
       $origen = $_POST['txtOrigen'];
       $tracking = $_POST['txtTracking'];
       $seguro = $_POST['txtPorcentajeSeguro'];
       $idUsuario = $_POST['txtIdUsuarioPrealerta'];
       $ObjectName = new DateTime();
       $domicilio = $_POST['selDomicilio'];

       $resultado_cliente_prealerta = $conexion->query("select id from clientes where id_usuario ='$idUsuario'");
       $obj_cliente = $resultado_cliente_prealerta->fetch_object();
       $id_cliente = $obj_cliente->id;   
        
       if($seguro != 0)
       {
           $resultado_seguro = ($valor * 5) / 100;
           $seguro = 1;
           
           $conexion->query("insert into prealertas (peso, alto, ancho, largo, valor, contenido,
           origen_pagina_web, seguro, porcentaje_del_seguro, status, id_cliente, tracking, num_domicilio)
           values('$peso', '$alto', '$ancho', '$largo', '$valor', '$contenido', '$origen', '$seguro', '$resultado_seguro' , 0, '$id_cliente', '$tracking', '$domicilio')  ")or die($conexion->error);

           header('location: home.php');
       }
       else
       {

        $resultado_seguro = 0;
        $seguro = 0;


        $conexion->query("insert into prealertas (peso, alto, ancho, largo, valor, contenido,
        origen_pagina_web, seguro, porcentaje_del_seguro, status, id_cliente, tracking, num_domicilio)
        values('$peso', '$alto', '$ancho', '$largo', '$valor', '$contenido', '$origen', '$seguro', '$resultado_seguro' , 0, '$id_cliente', '$tracking', '$domicilio') ")or die($conexion->error);

       header('location: home.php');
       }

       header('location: ../home.php');
    
   }
?>