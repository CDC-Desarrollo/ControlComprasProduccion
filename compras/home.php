<?php
require_once 'php/home.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="../images/LOGOCOMPRAS.png">
    <link rel="stylesheet" href="assets/bootstrap4/css/bootstrap.min.css">
    <title>Home - Control de Compras</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div>
        <nav class="navbar navbar-expand-lg bg-light text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger"
                    href="home.php"> <img class="logo-navbar"
                        src="assets/imagenes/logo/logo.png" alt="" srcset=""> </a>
                <button
                    class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-success text-white rounded"
                    type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menú <i class="fas fa-bars"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto text-white">

                        <li class="nav-item mx-0 mx-lg-1 color_enlace">
                            <a href="php/logout.php">
                                <i class="fas fa-power-off"></i> Cerrar Sesión
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <?php if($confirmar_datos_usuario > 0): ?>
    <br><br><br>
    <div class="container">
        <div class="small-container3 center-block">
            <div class="card text-dark bg-light mb-3 ">
                <div class="card-header text-center"> 
                    <b><i>Datos del Generales de: </i></b> <?php echo $email_sesion ?>
                    <b><i>Núm. Casillero:</i></b> CDC<?php echo $id_usuario ?></div>
                    <div class="row">
                        <div class="col">
                            <!-- Datos del usuario logeado -->
                            <div class="card-body">
                            <form action="editar_datos_generales.php" method="post">
                                <h5 class="card-title"> Nombre Completo: <?php echo $nombre_completo ?>. </h5>
                                <p class="card-text"> 
                                    <b> Calle </b>: <?php echo $calle_obj_cliente ?> | 
                                    <b> Núm. Exterior </b>: <?php echo $numero_ext_obj_cliente ?> |
                                    <b> Núm. Interior </b>: <?php echo $numero_int_obj_cliente ?> 
                                </p>
                                <p class="card-text"> 
                                    <b> Entre Calles </b>: <?php echo $entre_calles_obj_cliente ?> 
                                </p>
                                <p class="card-text"> 
                                    <b> Colonia </b>: <?php echo $colonia_obj_cliente ?> | 
                                    <b> Código Postal </b>: <?php echo $codigo_postal_obj_cliente ?> 
                                </p>
                                <p class="card-text"> 
                                    <b> Estado </b>: <?php echo $estado_obj_cliente ?> | 
                                    <b> Ciudad </b>: <?php echo $ciudad_obj_cliente  ?>
                                </p>
                                <p class="card-text">
                                    <b>Teléfono </b>: <?php echo $numero_telefono_obj_cliente ?> | 
                                    <b>Teléfono Aux </b>: <?php echo $numero_aux_obj_cliente  ?>
                                </p>
                                <p class="card-text"> 
                                    <b> Referencia(s) </b>: <?php echo $referencias_obj_cliente  ?>
                                </p>

                                <input type="hidden" class="form-control" id="txtIdUsuarioHidden"
                                    name="txtIdUsuarioHidden" placeholder="" value="<?php echo $id_usuario ?>" required>
                                <br> <br>
                                <p class="card-text"> <b><i>Dirección de tu Casillero Virtual:</i></b> 1119 Santa Isabel Ave, Laredo, TX 78040, EE. UU. </p>
                                <button type="submit" class="btn btn-success">Editar Información General</button>
                            </form>
                        </div>
                    </div>
                    <!-- Opciones de pre alerta -->
                    <div class="col">
                        <br> <br><br>
                        <div class="container-fluid h-100">
                            <!-- Boton para Pre-Alerta tu Pedido -->
                            <div class="col-12 text-center">
                                <form action="pre_alerta.php" method="post">
                                    <input type="hidden" class="form-control" id="txtIdUsuarioHidden" name="txtIdUsuarioHidden" placeholder="" value="<?php echo $id_usuario ?>" required>
                                    <button type="submit" class="btn btn-dark btn-lg">Pre-Alerta <br> tu Pedido</button>
                                </form>
                            </div><br>
                             <!-- Boton para ver el historial de pedidos -->
                            <div class="col-12 text-center">
                                <form action="historial_prealerta.php" method="post">
                                    <input type="hidden" class="form-control" id="txtIdUsuarioHidden"
                                        name="txtIdUsuarioHidden" placeholder="" value="<?php echo $id_usuario ?>" required>
                                    <button type="submit" class="btn btn-info btn-lg">Historial <br>de Pedidos</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <?php else: ?>
        <br><br><br><br><br><br>
        <div class="container">
            <div class="small-container3 center-block">
                <div class="card text-dark bg-light mb-3">
                    <div class="card-header">Datos Generales de <?php echo $email_sesion ?>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Llena tus Datos Generales!</h5>
                    <p class="card-text">Para poder hacer tus pre-alertas debes llenar primero tus datos generales. Haz clic en el siguiente botón para llenarlos.</p>
                    <div>
                        <a href="datos_generales.php"><button type="submit" class="btn btn-success">Llena tus Datos Generales</button></a> 
                    </div>
                </div>
            </div>
        </div>
        <div>
    
    <script src="assets/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/popper/popper.min.js"></script>
    <script src="assets/bootstrap4/js/bootstrap.min.js"></script>
    <script src="assets/codigo.js"></script>
    <?php endif ?>