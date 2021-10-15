<?php

    header('Content-Type: text/html; charset=UTF-8');

    if(isset($_POST["enviado"]))
    {

        $tracking = $_POST["form_tracking"];  

        try{
            $client = new SoapClient(null, array(
                'location' => "https://controldecarga.ecusmart.net/webservice/webservice.php",
                'uri'      => "http://test-uri/",
                'encoding' => "ISO-8859-1"));
        
            // Se invoca el método del web service, se envían las credenciales de validación. Y se guarda en "$result" el arreglo dimensional con el seguimiento del tracking:
            $result = $client-> __call("getStatus",array(
                'username'=> 'ctrldcarga_usr',
                'password'=> 'ws_ctrldcarga_*.',
                'guia' => $tracking
                )
            );

            //Impresión de Tracking:
            $table = '<table class="table table-bordered"> <tr> <th scope="col">  FECHA  </th><th scope="col" >STATUS</th><th scope="col" >COMENTARIO</th> </tr>';
            
            foreach($result as $results)
            {
                $row = json_decode(json_encode($results), true);

                //$table .= '<tr> <td> <p>' . date('m/d/Y H:i', strtotime( $row["fecha"])) . '</p> </td><td> <p>' . $row["comentario"] . '</p> </td><td> <p>' . $row["comentario2"] . '</p></td></tr>';
                
                $time_line .= ' <div class="momento"> <h3>' . date('m/d/Y H:i', strtotime( $row["fecha"])) . ' (' . $row["comentario"] . ') </h3> <div class="descripcion">' . $row["comentario2"] . ' </div> </div>';
            }
            

            //Impresión de tabla con seguimiento: 
            //print $table;
        } 
        catch (Exception $e)
        {
            echo $e -> getMessage();            
        }
    }
?>


<!DOCTYPE html>
<html lang="es">
 
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    
    <title>Control de Compras</title>
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Tinos:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap"
        rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />



    
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-light text-uppercase fixed-top border-1" id="mainNav"> 
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="https://controldecompras.com.mx/"> <img src="logo.png" width="200px" height="60px" alt="" srcset=""> </a>
        </div>
    </nav>

    <!-- Masthead-->
    <div class="masthead">
        <div class="masthead-content text-white">
            <div class="container-fluid px-4 px-lg-0">
                <h1 class="fst-italic lh-1 mb-4">Rastreo (BRASCO)</h1>
                <p class="mb-5">Ingresa el Tracking y mira el Rastreo de tu Envío.</p>
                <form action="" method="post" name="datos" id="datos">

                    <div class="input-group input-group-newsletter">

                        <input class="form-control" type="input" name="form_tracking" id="form_tracking" placeholder="Ingresa tu Tracking..." aria-describedby="submit-button" />

                    
                        <button class="btn btn-primary" type="submit" name="enviado" id="enviado"> Rastrear Envío </button>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
    

    <!-- Social Icons-->
    <div class="social-icons">
        <div class="d-flex flex-row flex-lg-column justify-content-center align-items-center h-100 mt-3 mt-lg-0">
            <!--
                <a class="btn btn-dark m-3" href="https://www.facebook.com/ControlDeCargaPaqueteria/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-dark m-3" href="https://www.instagram.com/controldecarga/", target="_blank"><i class="fab fa-instagram"></i></a>
            -->
            <br> <br> <br>
            
            <div class="card border-0 " id="time-line-tracking">
                <div class="card-body">
                    <div class="div-centrado">
                        <div class="card border-0 text-center">
                            <div class="card-header border-0">
                                <?php if(isset($tracking)){ print $tracking; }  ?>
                            </div>
                            <div class="card-body">
                                <div class="linea-tiempo">
                                    <?php if(isset($tracking)){ print $time_line; }   ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <!-- Bootstrap core JS-->




    <!-- Core theme JS-->
 
    
</body>
    <script>
         
    </script>
    
</html>