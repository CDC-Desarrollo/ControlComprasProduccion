<?php
  session_start();
  if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    //header("Location: ../index.php");
  }
  
  $id_usuario_prealerta = $_POST['txtIdUsuarioHidden'];
  echo $id_usuario_prealerta;
?>


<!Doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="../images/LOGOCOMPRAS.png">
    <link rel="stylesheet" href="assets/bootstrap4/css/bootstrap.min.css">
    <title>Historial de Pre-Alertas</title>
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
    <header style="height: 70px">
    </header>
    <div style="height: 30px;"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card border-success p-3 mb-5 bg-white ">
                    <h5 class="card-header"> Creación de Pre-Alerta </h5>
                    <div class="card-body">
                        <form id="form1" action="php/pre_alert.php" method="post" class="needs-validation" novalidate>
                            <div class=" text-success">
                                <p class="card-text">Los Campos que tienen un (*) son obligatorios</p>
                            </div>
                            <br>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="txtPeso"> Peso en Libras (lb) *</label>
                                    <input type="text" class="form-control" id="txtPeso" name="txtPeso"
                                        placeholder="8.20" value="" pattern="[0-9]{1,3}"
                                        title="Solo puede ingresar números" required>
                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">No deje el campo "Peso(s)" vacío.</div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="txtvalor">Valor en Dólares del Producto (dlls) *</label>
                                    <input type="text" class="form-control" id="txtvalor" name="txtvalor"
                                        placeholder="730" value="" oninput="calcularPorcentajeSeguro()"
                                        pattern="[0-9]{1,5}" title="Solo puede ingresar números" required>
                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">No deje el campo "Valor del Producto" vacío.</div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="txtAlto">Alto en Pulgadas (in) *</label>
                                    <input type="text" class="form-control" id="txtAlto" name="txtAlto"
                                        placeholder="19.685" value="" pattern="[0-9]{1,2}"
                                        title="Solo puede ingresar números" required>
                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">No deje el campo "Alto" vacío.</div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="txtAncho">Ancho en Pulgadas (in) *</label>
                                    <input type="text" class="form-control" id="txtAncho" name="txtAncho"
                                        placeholder="27.5591" value="" pattern="[0-9]{1,2}"
                                        title="Solo puede ingresar números" required>
                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">No deje el campo "Ancho" vacío.</div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="txtLargo">Largo en Pulgadas (in) *</label>
                                    <input type="text" class="form-control" id="txtLargo" name="txtLargo"
                                        placeholder="39.3701" value="" pattern="[0-9]{1,2}"
                                        title="Solo puede ingresar números" required>
                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">No deje el campo "Largo" vacío.</div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label for="txtContenido">Contenido *</label>
                                    <input type="text" class="form-control" id="txtContenido" name="txtContenido"
                                        placeholder="Laptop DELL, Play Station 5, iPhone 12 Pro Max, Surface, etc"
                                        value="" required>
                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">No deje el campo "Contenido" vacío.</div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label for="txtOrigen">Origen de Página Web </label>
                                    <input type="text" class="form-control" id="txtOrigen" name="txtOrigen"
                                        placeholder="Amazon, eBay, Target, etc" value="">
                                    <div class="valid-feedback">¡Ok válido!</div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label for="txtOrigen">Tracking </label>
                                    <a href="#" class="fa fa-question-circle"
                                    data-original-title="Si usted ya cuenta con el (Tracking / Guía / Núm. de Seguimiento que le proporciona su paquetería, favor de ingresarlo." 
                                    data-placement="left" data-toggle="tooltip"></a>
                                    <input type="text" class="form-control" id="txtTracking" name="txtTracking"
                                        placeholder="Ingrese el tracking" value="">
                                    <div class="valid-feedback">¡Ok válido!</div>
                                </div>
                            </div>
                            <!--// cool stuff here -->
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <div class="form-check">
                                        <br>
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1"
                                            name="exampleCheck1" onchange="calcularPorcentajeSeguro()">
                                        <label class="form-check-label" for="exampleCheck1">¿Desea incluir
                                            Seguro?</label>
                                        <div class="valid-feedback">¡Ok válido!</div>
                                        <div class="invalid-feedback">No deje el campo "Nombre(s)" vacío.</div>
                                    </div>
                                </div>
                                <div class="col-md-8 mb-3">
                                    <label for="txtPorcentajeSeguro" id="porcentajeLabel" style="display:none;">10 % del
                                        Valor del Producto </label>
                                    <input type="text" class="form-control" id="txtPorcentajeSeguro"
                                        name="txtPorcentajeSeguro"
                                        placeholder="El mínimo valor para asegurar tu producto es de 100 dlls" value=""
                                        style="display:none;" required>
                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">No se puedes asegurar su producto si no tiene un valor
                                        mínimo de 100 dlls.</div>
                                    <p class="text-danger" style="display:none;" id="labelSeguro">El mínimo valor para
                                        asegurar es de 100 DLLS.</p>
                                    <h6 id="labelCotizacion" style="display:none;"> <b> </b></h6>
                                </div>
                            </div>
                            <input type="hidden" id="txtIdUsuarioPrealerta" name="txtIdUsuarioPrealerta"
                                value="<?php echo $id_usuario_prealerta ?>">
                            <a href="home.php">
                                <button type="button" class="btn btn-outline-dark">Cancelar Pre-Alerta</button>
                            </a>
                            <button type="submit" class="btn btn-success">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/popper/popper.min.js"></script>
    <script src="assets/bootstrap4/js/bootstrap.min.js"></script>
    <script src="assets/codigo.js"></script>
    <script>
         $("a[data-toggle='tooltip']").tooltip();
    </script>
</body>

</html>