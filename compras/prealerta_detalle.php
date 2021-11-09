<?php
require_once 'php/prealert_details.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div>
    <nav class="navbar navbar-expand-lg bg-light text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="home.php"> <img class="logo-navbar" src="assets/imagenes/logo/logo.png" alt="" srcset=""> </a>
            <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-success text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menú
            <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto text-white">
                <li class="nav-item mx-0 mx-lg-1 color_enlace">
                <a href="php/logout.php"><i class="fas fa-power-off"></i> Cerrar Sesión</a>
                </li>
            </ul>
            </div>
        </div>
        </nav>
    </div>
    <br> <br> <br> <br>
                    
    <div class="container">



        <div class="card text-dark bg-light mb-3 ">
            <div class="card-header text-center"> <b><i>Detalle de la Pre-Alerta: </i></b> # <?php echo $idPrealerta ?> </div>
    
            <div class="row">
                <div class="col">
                    <div class="card-body">

                        <h5 class="card-title"> Dimensiones del Paquete:  </h5>
                        <ul> 
                            <li> Alto: <?php echo $alto ?> lbs. </li> 
                            <li> Largo: <?php echo $largo ?> lbs. </li> 
                            <li> Ancho: <?php echo $ancho ?> lbs. </li> 
                        </ul>
                        <p class="card-text"> <b> Valor del Producto </b>: $<?php echo $valor ?> dlls. <b>  </b> 

                        </p>

                        <p class="card-text"> <b> Contenido del Paquete </b>: <?php echo $contenido ?> . </p>
                        
                        <input type="hidden" class="form-control" id="txtIdUsuarioHidden" name="txtIdUsuarioHidden"
                        placeholder="" value="'.$id_usuario.'" required>
                        
                        
                        
                        <p class="card-text"> <b><i>Tracking del Paquete:</i></b> <?php echo $tracking ?> </p>
              
                        <form action="php/upload.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Comprobante de Pago</label>
                                    <input type="file" class="form-control-file" name="exampleFormControlFile1" id="exampleFormControlFile1">
                                    <input type="text" id="prealertaId" name="prealertaId" value="<?php echo $idPrealerta ?>" hidden>
                                </div>
                                <button type="submit" class="btn btn-success" name="upload">Subir Imágen</button>
                            </form>
    
                    </div>
                </div>

            </div>
        </div>



    <div>


</body>

</html>




















                    
                    
