<?php
    require_once("conexion.php");
        //Se crea sesión para posteriormente hacer búsquedas en BD
        session_start();

        $email_sesion = $_SESSION['email'];
        
        if (!isset($_SESSION['email'])) {
            header("Location: login.php");
        }

        $result = $conexion->query(" select * from usuarios where email='$email_sesion' ");
        $obj = $result->fetch_object();
        $confirmar_datos_usuario = $obj->confirmar_datos;
        $id_usuario = $obj->id;

        //Información General de Cliente
        $resultado = $conexion->query(" select * from clientes where id_usuario='$id_usuario' ");
        $obj_cliente = $resultado->fetch_object();
        $nombres_obj_cliente = $obj_cliente->nombres;
        $apellidos_obj_cliente = $obj_cliente->apellidos;
        $nombre_completo = $nombres_obj_cliente . " " . $apellidos_obj_cliente;

        $calle_obj_cliente = $obj_cliente->calle;
        $numero_ext_obj_cliente = $obj_cliente->numero_exterior;
        $numero_int_obj_cliente = $obj_cliente->numero_interior;
        $entre_calles_obj_cliente = $obj_cliente->entre_calles;
        $colonia_obj_cliente = $obj_cliente->colonia;
        $codigo_postal_obj_cliente = $obj_cliente->codigo_postal;
        $estado_obj_cliente = $obj_cliente->estado;
        $ciudad_obj_cliente = $obj_cliente->ciudad;
        $referencias_obj_cliente = $obj_cliente->referencias;
        $numero_telefono_obj_cliente = $obj_cliente->telefono;
        $numero_aux_obj_cliente = $obj_cliente->telefono_auxiliar;
        echo $confirmar_datos_usuario;
/*         echo 
        '<!DOCTYPE html>
        <html lang="en">
            <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>Login</title>
                        <!-- CSS only -->

                        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
                            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

                        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
                            crossorigin="anonymous"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
                            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
                            crossorigin="anonymous"></script>
                        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
                            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
                            crossorigin="anonymous"></script>

                        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
                            integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

                    <link rel="stylesheet" href="../css/style.css">
                    </head>
                    <body>

                        <!-- Navigation-->
                        <div>
                            <nav class="navbar navbar-expand-lg bg-light text-uppercase fixed-top" id="mainNav">
                                <div class="container">
                                    <a class="navbar-brand js-scroll-trigger" href="https://www.controldecompras.com.mx/compras/php/home.php"> <img class="logo-navbar"
                                            src="../assets/imagenes/logo/logo.png" alt="" srcset=""> </a>
                                    <button
                                        class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-success text-white rounded"
                                        type="button" data-toggle="collapse" data-target="#navbarResponsive"
                                        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                                        Menú
                                        <i class="fas fa-bars"></i>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarResponsive">
                                        <ul class="navbar-nav ml-auto text-white">

                                            <li class="nav-item mx-0 mx-lg-1 color_enlace">
                                                <a href="logout.php">
                                                    <i class="fas fa-power-off"></i>  Cerrar Sesión
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
        ';

 */
/*         if($confirmar_datos_usuario > 0)
        {
            echo '';
            //Si la columna de Confirmar Datos Generales de Usuario es 1

            echo "Aún no se coloca la info del cliente";
            echo $confirmar_datos_usuario;


            echo '
            
            <br><br><br>
                    <!-- Masthead-->

                    <div class="container">
                    <div class="small-container3 center-block">
            ';
            echo '
                    
                    
            <div class="card text-dark bg-light mb-3 ">
            <div class="card-header text-center"> <b><i>Datos del Generales de: </i></b> '. $email_sesion .' | <b><i>Núm. Casillero:</i></b> CDC'.$id_usuario.'</div>
    
            <div class="row">
                <div class="col">
                    <div class="card-body">
                    <form action="../editar_datos_generales.php" method="post">
                        <h5 class="card-title"> Nombre Completo: '. $nombre_completo .' </h5>
                        <p class="card-text"> <b> Calle </b>: '. $calle_obj_cliente .' | <b> Núm. Exterior </b>: '. $numero_ext_obj_cliente .' | 
                        <b> Núm. Interior </b>: '. $numero_int_obj_cliente .'
                        </p>
                        <p class="card-text"> <b> Entre Calles </b>: '. $entre_calles_obj_cliente .' </p>
                        <p class="card-text"> <b> Colonia </b>: '. $colonia_obj_cliente .' | <b> Código Postal </b>: '. $codigo_postal_obj_cliente .' </p>
                        <p class="card-text"> <b> Estado </b>: '. $estado_obj_cliente .' | <b> Ciudad </b>: '. $ciudad_obj_cliente .' </p>
                        <p class="card-text"> <b> Teléfono </b>: '. $numero_telefono_obj_cliente .'  | <b> Teléfono Aux </b>: ' . $numero_aux_obj_cliente .'
                        </p>
                        <p class="card-text"> <b> Referencia(s) </b>: '. $referencias_obj_cliente  .' </p>
                        
                        <input type="hidden" class="form-control" id="txtIdUsuarioHidden" name="txtIdUsuarioHidden"
                        placeholder="" value="'.$id_usuario.'" required>
                        
                        <br> <br>
                        
                        
                        <p class="card-text"> <b><i>Dirección de tu Casillero Virtual:</i></b>  1119 Santa Isabel Ave, Laredo, TX 78040, EE. UU. </p>
              
                            <button type="submit" class="btn btn-success">Editar Información General</button>
      
                    </form>
    
                    </div>
                </div>
                <div class="col">
                    <br> <br><br>
                    <div class="container-fluid h-100">
                        <div class="col-12 text-center"> 
    
                            <form action="../pre_alerta.php" method="post">
                                <input type="hidden" class="form-control" id="txtIdUsuarioHidden" name="txtIdUsuarioHidden"
                                placeholder="" value="'.$id_usuario.'" required>
    
                                <button type="submit" class="btn btn-dark btn-lg">Pre-Alerta <br> tu Pedido</button>
                            </form>
    
                                
    
                            </div> <br>
    
                            <div class="col-12 text-center"> 
    
                            <form action="../historial_prealerta.php" method="post">
                                <input type="hidden" class="form-control" id="txtIdUsuarioHidden" name="txtIdUsuarioHidden"
                                placeholder="" value="'.$id_usuario.'" required>
    
                                <button type="submit" class="btn btn-info btn-lg">Historial <br>de Pedidos</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>';          
        }
        else
        {
            //Si la columna de Confirmar Datos Generales de Usuario es 0
                    echo '


                    <br><br><br><br><br><br>
                    <!-- Masthead-->

                    <div class="container">
                    <div class="small-container3 center-block">


                        <div class="card text-dark bg-light mb-3">
                            <div class="card-header">Datos Generales de (
                    ';

                    echo $_SESSION['email']; //Impresión de Correo Electrónico
                    

                    echo '
                            )
                            </div>
                            
                            <div class="card-body">
                                <h5 class="card-title">Llena tus Datos Generales!</h5>
                                <p class="card-text">Para poder hacer tus pre-alertas debes llenar primero tus datos generales. Haz clic en
                                    el siguiente botón para llenarlos.</p>
                                <div>
                                    <a href="../datos_generales.php">
                                        <button type="submit" class="btn btn-success">Llena tus Datos Generales</button>
                                    </a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                    ';
        } */
?>