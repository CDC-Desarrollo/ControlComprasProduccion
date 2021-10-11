<?php
    include "php/conexion.php";

    $id_usuario_prealerta = $_POST['txtIdUsuarioHidden'];
    //echo $id_usuario_prealerta;

    $result_cliente = $conexion->query("select * from clientes where id_usuario='$id_usuario_prealerta'");
    $obj_cliente = $result_cliente->fetch_object();
    $id_cliente = $obj_cliente->id;
    $nombre_cliente = $obj_cliente->nombres;
    $apellido_cliente = $obj_cliente->apellidos;
    $nombre_completo = $nombre_cliente . " " . $apellido_cliente;
    //echo $id_cliente;

    $result_prealertas_cliente = $conexion->query("select * from prealertas where id_cliente ='$id_cliente'");
    


  
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="#" />
  <link rel="stylesheet" href="assets/bootstrap4/css/bootstrap.min.css">
  <title>Historial de Pre-Alertas</title>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <!-- Navigation-->

  <div>
    <nav class="navbar navbar-expand-lg bg-light text-uppercase fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="https://www.controldecompras.com.mx/compras/php/home.php"> <img class="logo-navbar"
            src="assets/imagenes/logo/logo.png" alt="" srcset=""> </a>
        <button
          class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-success text-white rounded"
          type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
          aria-expanded="false" aria-label="Toggle navigation">
          Menú
          <i class="fas fa-bars"></i>
        </button>
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

          <h5 class="card-header"> Pre-Alerta(s) de <?php echo $nombre_completo?></h5>


          <div class="card text-dark bg-light mb-3 ">
            <div class="row">
              <div class="col">
                <div class="card-body text-justify">

                  <table class="table table-bordered text-center">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Contenido</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php while($obj_prealerta = $result_prealertas_cliente->fetch_object()) {?>
                        
                        <?php if($obj_prealerta->status == 0) {?>
                          <tr class="table-danger">
                        <?php } ?>

                        <?php if($obj_prealerta->status == 1) {?>
                          <tr class="table-success">
                        <?php } ?>

                        <?php if($obj_prealerta->status == 2) {?>
                          <tr class="table-warning">
                        <?php } ?>
                        
                        
                          <th scope="row"> <?php echo $obj_prealerta->id ?> </th>
                          <td> <?php echo $obj_prealerta->fecha_hora ?> </td>
                          <td> <?php echo $obj_prealerta->contenido ?> </td>
                          
                          <?php if($obj_prealerta->status == 0) {?>
                            <td> Pendiente </td>
                          <?php } ?>

                          <?php if($obj_prealerta->status == 1) {?>
                            <td> Entregado </td>
                          <?php } ?>

                          <?php if($obj_prealerta->status == 2) {?>
                            <td> Retenido </td>
                          <?php } ?>
                        </tr>
                      
                      <?php } ?>

                     

                    </tbody>
                  </table>


                </div>
              </div>
            </div>
          </div>

          <input type="hidden" id="txtIdUsuarioPrealerta" name="txtIdUsuarioPrealerta"
            value="<?php echo $id_usuario_prealerta ?>">

          <a href="php/redireccion.php">
            <button type="button" class="btn btn-outline-dark">Volver</button>
          </a>



        </div>
      </div>
    </div>
  </div>

</body>

</html>