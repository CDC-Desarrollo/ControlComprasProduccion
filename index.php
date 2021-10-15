<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <title>Control de Compras</title>

    <!-- Loading Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Template CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="css/pe-icon-7-stroke.css">
    <link href="css/style-magnific-popup.css" rel="stylesheet">


    <!-- Awsome Fonts -->
    <link rel="stylesheet" href="css/all.min.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600;700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">

    <!-- Font Favicon -->
    <link rel="shortcut icon" href="images/LOGOCOMPRAS.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

</head>

<body>

    <!--begin header -->
    <header class="header">

        <!--begin navbar-fixed-top -->
        <nav class="navbar navbar-expand-lg navbar-default navbar-fixed-top">

            <!--begin container -->
            <div class="container">

                <!--begin logo -->
                <a class="navbar-brand" href=""> <img class="logo-navbar"
                        src="images/logo.png" width="150"> </a>
                <!--end logo -->

                <!--begin navbar-toggler -->
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                    data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                </button>
                <!--end navbar-toggler -->

                <!--begin navbar-collapse -->
                <div class="navbar-collapse collapse" id="navbarCollapse" style="">

                    <!--begin navbar-nav -->
                    <ul class="navbar-nav ml-auto">

                        <li><a href="#home">Inicio</a></li>

                        <li><a href="#comoFunciona">¿Cómo funciona?</a></li>

                        <li><a href="#cotiza"> Cotiza </a></li>

                        <li><a href="#beneficios">Beneficios</a></li>

                        <li><a href="#faq"> F.A.Q </a></li>

                        <li><a href="#otroServicio">Otros Servicios</a></li>

                        <li><a href="#contact">Contáctanos</a></li>

                        <li class="discover-link"> <a href="" onclick="location.href='compras/login.php'" class="discover-btn">Ingresar</a></li>

                    </ul>
                    <!--end navbar-nav -->

                </div>
                <!--end navbar-collapse -->

            </div>
            <!--end container -->

        </nav>
        <!--end navbar-fixed-top -->

    </header>
    <!--end header -->

    <!--begin home section -->
    <section class="home-section" id="home">

        <div class="home-section-overlay"></div>

        <!--begin container -->
        <div class="container">

            <!--begin row -->
            <div class="row">

                <!--begin col-md-6-->
                <div class="col-md-6 padding-top-120">

                    <h1>Realiza tus compras en tus tiendas en Estados Unidos y te lo llevamos hasta tu domicilio en
                        México!</h1>


                    <!--begin popup-video-wrapper-->
                    <div class="popup-gallery-wrapper">

                        <!--begin popup-video-->
                        <div class="popup-gallery hero-gallery">

                            <a class="popup4 video-icon" href="https://www.youtube.com/watch?v=ziK9XZFXrZI">
                                <i class="fas fa-play"></i>
                            </a>

                        </div>
                        <!--end popup-video-->

                        <p class="popup-video-text">Ver Vídeo de Control de Compras</p>

                    </div>
                    <!--end popup-video-wrapper-->

                </div>
                <!--end col-md-6-->

                <!--begin col-md-5-->
                <div class="col-md-5 offset-md-1 margin-top-12">

                    <!--begin register-form-wrapper-->
                    <div class="register-form-wrapper wow bounceIn" data-wow-delay="0.5s"
                        style="visibility: visible; animation-delay: 0.5s; animation-name: bounceIn;">

                        <h3>Regístrate en Control de Compras</h3>

                        <p>Sólo necesitas un Correo Electrónico y listo!</p>

                        <!--begin form-->
                        <div>

                            <!--begin success message

                            <p class="register_success_box" style="display:none;">We received your message and you'll
                                hear from us soon. Thank You!</p>
                                 -->
                            <!--end success message -->

                            <!--begin register form-->

                            <form class="" method="POST" action="compras/php/registrar.php">
                                <div class="register-form register">
                                    <input type="text" class="register-input name-input" id="Nombre" name="nombre"
                                        placeholder="  Nombre(s) *" required>

                                    <input type="email" class="register-input name-email" id="exampleInputEmail1"
                                        name="email" placeholder="  Correo Electrónico *" required>

                                    <input type="password" class="register-input password-input"
                                        id="exampleInputPassword1" name="pass" id="pass" placeholder="  Contraseña *" required>

                                    <input type="password" class="register-input password-input"
                                        id="exampleInputPassword2" name="pass2" id="pass2" placeholder="  Confirmar Contraseña *" required>
                                </div>

                                <input id="registrar" value="Registrarme" class="register-submit" type="submit">
                            </form>
                            <!--end register form -->


                        </div>
                        <!--end form-->

                    </div>
                    <!--end register-form-wrapper-->

                </div>
                <!--end col-md-5-->

            </div>
            <!--end row -->

        </div>
        <!--end container -->

    </section>
    <!--end home section -->

    <!--begin partners-section-->
    <div class="partners-section">

        <!--begin container-->
        <div class="container">

            <!--begin row-->
            <div class="row">

                <!--begin col-sm-12-->
                <div class="col-md-10 mx-auto text-center partners">
                    <h5 class="partners-title">Aprovecha las Ofertas de ...</h5><br>
                    <a href="https://www.amazon.com/ref=footer_us"> <img src="images/amazon-brands.svg" class="partners"
                            alt="image"> </a>
                    <a href="https://www.apple.com/"> <img src="images/apple-brands.svg" class="partners" alt="image">
                    </a>
                    <a href="https://www.ebay.com/"> <img src="images/ebay-brands.svg" class="partners" alt="image">
                    </a>
                    <a href="https://www.microsoft.com/es-es/windows/computers"> <img src="images/windows-brands.svg"
                            class="partners" alt="image"> </a>

                </div>
                <!--end col-sm-12-->

            </div>
            <!--end row-->

        </div>
        <!--end container-->

    </div>
    <!--end partners-section-->

    <!--begin section-grey -->
    <section class="section-grey" id="comoFunciona">

        <!--begin container -->
        <div class="container">

            <!--begin row -->
            <div class="row">

                <!--begin col-md-12 -->
                <div class="col-md-12 text-center margin-bottom-10">

                    <h2 class="section-title">¿Cómo funciona Control de Compras?</h2>
                    <!---
                    <p class="section-subtitle"> Regístrate en Control de Compras, Ingresa tus Datos, Obten tu Casillero Virtual, Realiza tus Compras, Ingresa la Dirección que te otorgamos y te lo llevamos hasta tu Domicilio en México </p>
                    -->
                </div>
                <!--end col-md-12 -->

            </div>
            <!--end row -->

        </div>
        <!--end container -->

        <!--begin services-wrapper -->
        <div class="services-wrapper">

            <!--begin container -->
            <div class="container">

                <!--begin row -->
                <div class="row">

                    <!--begin col-md-4 -->
                    <div class="col-md-4">

                        <div class="main-services green-cdc">

                            <i class="fas fa-user"></i>

                            <h4>Regístrate en Control de Compras</h4>

                            <p>Ingresa tu Nombre de Usuario, Correo Electrónico y Contraseña.</p>

                        </div>

                    </div>
                    <!--end col-md-4 -->

                    <!--begin col-md-4 -->
                    <div class="col-md-4">

                        <div class="main-services green-cdc">

                            <i class="fas fa-edit"></i>

                            <h4>Ingresa tus Datos</h4>

                            <p>Puedes ingresar hasta 3 direcciones y tu eliges a cuál te enviaremos tu paquete.</p>

                        </div>

                    </div>
                    <!--end col-md-4 -->

                    <!--begin col-md-4 -->
                    <div class="col-md-4">

                        <div class="main-services green-cdc">

                            <i class="bi bi-mailbox"></i>

                            <h4>Obten tu Casillero Virtual</h4>

                            <p>Te daremos una dirección física la cuál usarás como referencia al momento de hacer tus
                                compras en línea.</p>

                        </div>

                    </div>
                    <!--end col-md-4 -->

                </div>
                <!--end row -->


                <!--begin row -->
                <div class="row">

                    <!--begin col-md-4 -->
                    <div class="col-md-4">

                        <div class="main-services green-cdc">

                            <i class="fas fa-shopping-cart"></i>

                            <h4>Realiza tus Compras</h4>

                            <p>Haz tus compras en las tiendas que quieras e ingresar la dirección que te otorgamos.</p>

                        </div>

                    </div>
                    <!--end col-md-4 -->

                    <!--begin col-md-4 -->
                    <div class="col-md-4">

                        <div class="main-services green-cdc">

                            <i class="fas fa-dollar-sign"></i>

                            <h4>Paga el Servicio</h4>

                            <p>Pre-Alerta tu compra y Recibiras un Recibo para realizar tu pago.</p>

                        </div>

                    </div>
                    <!--end col-md-4 -->

                    <!--begin col-md-4 -->
                    <div class="col-md-4">

                        <div class="main-services green-cdc">

                            <i class="fas fa-shipping-fast"></i>

                            <h4>Te lo Llevamos hasta tu Domicilio en México</h4>

                            <p>Selecciona la dirección a la que te enviaremos tu pedido.</p>

                        </div>

                    </div>
                    <!--end col-md-4 -->

                </div>
                <!--end row -->

            </div>
            <!--end container -->

        </div>
        <!--end services-wrapper -->

    </section>
    <!--end section-grey -->




    <!--begin section-bg-1 -->
    <section class="section-bg-1">

        <div class="section-bg-overlay"></div>

        <!--begin container-->
        <div class="container">

            <!--begin row-->
            <div class="row">

                <!--begin col md 7 -->
                <div class="col-md-7 mx-auto margin-bottom-20 text-center">

                    <h2 class="white-text">¡Nuestra Experiencia lo Demuestra! </h2>

                </div>
                <!--end col md 7-->

            </div>
            <!--end row-->

            <!--begin row-->
            <div class="row">

                <!--begin fun-facts-box -->
                <div class="col-md-3 offset-md-2 fun-facts-box text-center">


                    <i class="far fa-heart"></i>

                    <p class="fun-facts-title"><span class="facts-numbers">+ 500,000</span><br>Clientes satisfechos en
                        México y Estados Unidos.</p>

                </div>
                <!--end fun-facts-box -->

                <!--begin fun-facts-box -->
                <div class="col-md-2 fun-facts-box text-center">

                    <i class="fas fa-truck"></i>

                    <p class="fun-facts-title"><span class="facts-numbers">+ 15,000</span><br> Envíos mensuales de
                        manera exitosa.</p>

                </div>
                <!--end fun-facts-box -->

                <!--begin fun-facts-box -->
                <div class="col-md-2 fun-facts-box text-center">

                    <i class="fas fa-users"></i>

                    <p class="fun-facts-title"><span class="facts-numbers">+ 1,000</span><br>Agentes a su servicio en la
                        unión americana.</p>

                </div>
                <!--end fun-facts-box -->


            </div>
            <!--end row-->

        </div>
        <!--end container-->

    </section>
    <!--end section-bg-1 -->


    <!--begin testimonials section -->
    <section class="section-grey" id="cotiza">

        <!--begin container -->
        <div class="container">

            <!--begin row -->
            <div class="row align-items-center">

                <!--begin col-md-5 -->
                <div class="col-md-5 col-sm-12">

                    <h2>Cotiza tu Envío</h2>

                    <p>Ingresa los datos respectivos de tu paquete y así obten un aproximado de cuánto te costará el
                        envío.
                        <br>
                        <br>
                        Esta cotización hace referencia a que nosotros recibimos su paquete, importar su paquete a México y despacharlo en alguna de las transportadoras como (PaqueteExpress, Estafeta o FedEx).
                    </p>


                </div>
                <!--end col-md-5 -->

                <!--begin col-md-1 -->
                <div class="col-md-1"></div>
                <!--end col-md-1 -->


                <!--begin col-md-6-->
                <div class="col-md-6">

                    <!--begin accordion -->
                    <div class="accordion" id="accordionFAQ">

                        <!--begin card -->
                        <div class="card">

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="">
                                <div class="card-body">
                                    <h4 id="tituloCotizador">Calcula tu Envío</h4>

                                    <form class="register-form register" >
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <div class="input-group mb-2 mr-sm-2">
                                                    <input type="text" class="form-control"
                                                        id="txtPeso" placeholder="Ingresa el peso de tu producto">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">lb</div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group col-md-12">
                                                <div class="input-group mb-2 mr-sm-2">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                          <input type="checkbox" id="checkSeguro" aria-label="Checkbox for following text input">
                                                        </div>
                                                      </div>

                                                    <input type="text" class="form-control"
                                                        id="txtPrecio" placeholder="¿Desea incluir seguro?" readonly>

                                                    <div class="input-group-prepend" id="lblDlls" style="display: none;">
                                                        <div class="input-group-text">dll</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <p>El mínimo valor para asegurar es de $100 USD</p>

                                        <input value="Cotizar" class="register-submit" id="cotizador" type="button" onclick="cotizacion()">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="card-body" id="mostrarTotal" style="display: none;">
                            
                            <h4 id="total"> </h4>
                            <p>El costo de su paquete puede variar si el peso no coincide con los datos antes proporcionados.</p>

                        </div>
                        
                        <!--end card -->
                    </div>
                    <!--end accordion -->

                </div>
                <!--end col-md-6-->

            </div>
            <!--end row -->

        </div>
        <!--end container -->

    </section>
    <!--end testimonials section -->




    <!--begin section-bg-2 -->
    <section class="section-bg-2">

        <div class="section-bg-overlay"></div>

        <!--begin container-->
        <div class="container">

            <!--begin row-->
            <div class="row">

                <!--begin col md 7 -->
                <div class="col-md-7 mx-auto text-center">

                    <h2 class="white-text">Regístrate en Control de Compras, es gratis, ¡NO esperes más!</h2>

                    <p class="white-text">Compra el regalo perfecto para tus familiares, amigos, pareja, etc. en Estados Unidos, lo recibimos y te lo hacemos llegar a tu domicilio en México.</p>

                    <a href="#" class="btn-white small scrool">Haz Clic aquí y Regístrate</a>

                    <a href="#" class="btn-white-border small scrool">Ir al Inicio</a>

                </div>
                <!--end col md 7-->

            </div>
            <!--end row-->

        </div>
        <!--end container-->

    </section>
    <!--end section-bg-2 -->

    <!--begin features section -->
    <section class="section-white" id="beneficios">

        <!--begin container -->
        <div class="container">

            <!--begin row -->
            <div class="row">

                <!--begin col-md-12-->
                <div class="col-md-12 text-center padding-bottom-10">

                    <h2 class="section-title">Nuestros Beneficios</h2>

                </div>
                <!--end col-md-12 -->

            </div>
            <!--end row -->

            <!--begin row -->
            <div class="row">

                <!--begin col-md-4-->
                <div class="col-md-4">

                    <div class="feature-box light-green wow fadeIn" data-wow-delay="0.25s"
                        style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">

                        <i class="fas fa-route"></i>

                        <div class="feature-box-text">

                            <h4>Rastreo Web 24/7</h4>

                            <p> Rastrea tu envío medienta nuestras opciones de rastreo en nuestra página web. </p>

                        </div>

                    </div>

                </div>
                <!--end col-md-4 -->

                <!--begin col-md-4-->
                <div class="col-md-4">

                    <div class="feature-box gray wow fadeIn" data-wow-delay="0.5s"
                        style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">

                        <i class="fas fa-phone"></i>

                        <div class="feature-box-text">

                            <h4>Call Center</h4>

                            <p> Contamos con un Call center para todas tus dudas, consultas y rastreos. </p>

                        </div>

                    </div>

                </div>
                <!--end col-md-4 -->

                <!--begin col-md 4-->
                <div class="col-md-4">

                    <div class="feature-box light-green wow fadeIn" data-wow-delay="0.75s"
                        style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">

                        <i class="fas fa-boxes"></i>

                        <div class="feature-box-text">

                            <h4>Manejo de Paquetería y Mensajería</h4>

                            <p> Contamos con diferentes servicios para poder llevar todos tus paquetes y documentos que
                                desees envíar a México. </p>


                        </div>

                    </div>

                </div>
                <!--end col-md-4 -->

            </div>
            <!--end row -->

            <!--begin row -->
            <div class="row">

                <!--begin col-md-4-->
                <div class="col-md-4">

                    <div class="feature-box gray wow fadeIn" data-wow-delay="1s"
                        style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">

                        <i class="fas fa-user-check"></i>

                        <div class="feature-box-text">

                            <h4>Atención Personalizada</h4>

                            <p> Contarás con una gama de ejecutivos que te brindarán todo el apoyo que necesites. </p>

                        </div>

                    </div>

                </div>
                <!--end col-md-4 -->

                <!--begin col-md-4-->
                <div class="col-md-4">

                    <div class="feature-box light-green wow fadeIn" data-wow-delay="1.25s"
                        style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">

                        <i class="fas fa-parachute-box"></i>

                        <div class="feature-box-text">

                            <h4> Recepción de Mercancia </h4>

                            <p> Nosotros nos encargaremos de recibir y almacenar tus productos que pidas de Estados
                                Unidos. </p>

                        </div>

                    </div>

                </div>
                <!--end col-md-4 -->

                <!--begin col-md-4-->
                <div class="col-md-4">

                    <div class="feature-box gray wow fadeIn" data-wow-delay="1.5s"
                        style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">


                        <i class="fas fa-map-marked-alt"></i>


                        <div class="feature-box-text">

                            <h4>Dirección Física dentro de Estados Unidos</h4>

                            <p> Tendrás una dirección física con la que contarás en todo momento, cuando requiras
                                nuestro servicio. </p>

                        </div>

                    </div>

                </div>
                <!--end col-md-4 -->

            </div>
            <!--end row -->

        </div>
        <!--end container -->

    </section>
    <!--end features section -->



    <!--begin faq section -->
    <section class="section-white" id="faq">

        <!--begin container -->
        <div class="container">

            <!--begin row -->
            <div class="row">

                <!--begin col-md-12-->
                <div class="col-md-12 text-center padding-bottom-10">

                    <h2 class="section-title">Preguntas Frecuentes</h2>

                    <p class="section-subtitle">Control de Compras adjunta las preguntas que más frecuente realizan
                        nuestros clientes</p>

                </div>
                <!--end col-md-12 -->

            </div>
            <!--end row -->

            <!--begin row -->
            <div class="row">

                <!--begin col-md-6-->
                <div class="col-md-6">

                    <div class="faq-box">

                        <h5> ¿Se pueden realizar agrupación de nuestros paquetes? </h5>

                        <p> No, Control de Compras te crea tu casillero virtual individual e independiente por cada
                            envío que realice.</p>

                    </div>

                    <div class="faq-box">

                        <h5>¿Qué hago si un paquete llega dañado?</h5>

                        <p>En primer lugar, el cliente debe comunicarse con nosotros en la sección de <a
                                href="#contact"> Contáctanos</a> y especificar el tipo de inconveniente. <br> <br>
                            Después, nuestro departamento de "Atención al Cliente" se comunicará con ustedes para
                            ver en que condiciones le llegó su paquete. Para posterioremente realizar una investigación
                            y finalmente decretar si su "reclamo" es aprobada o no.
                        </p>

                    </div>

                </div>
                <!--end col-md-6 -->

                <!--begin col-md-6-->
                <div class="col-md-6">

                    <div class="faq-box">

                        <h5>¿Qué debo hacer si un paquete viene con el contenido incompleto?</h5>

                        <p> Primero se debe enviar un correo electrónico a <a
                                href="info@controldecarga.com">info@controldecarga.com</a> y ahí ellos le brindaran los
                            detalles.</p>

                    </div>

                    <div class="faq-box">

                        <h5>¿El precio que da el cotizador es el que se cobrará?</h5>

                        <p>No, el cotizador que está en la aplicación solo es para que usted estime un aproximado de
                            cuánto es que le puede llegar a costar el servicio, pero no es el final. Este puede variar y
                            el costo correcto será el que se le de una vez que su paquete esté en la "bodega de Nuevo
                            Laredo, Tamps.".</p>

                    </div>

                </div>

                <!--end col-md-6 -->

            </div>
            <!--end row -->

        </div>
        <!--end container -->

    </section>
    <!--end faq section -->

        <!--begin section-grey -->
        <section class="section-grey" id="otroServicio">

            <!--begin container-->
            <div class="container">
    
                <!--begin row-->
                <div class="row align-items-center">
    
                    <!--begin col-md-6-->
                    <div class="col-md-6">
    
                        <div class="nav flex-column nav-pills margin-right-25" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
    
                            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#controldecompras-img"
                                role="tab" aria-controls="v-pills-home" aria-selected="true">
    
                                <!--begin features-second -->
                                <div class="features-second">
    
                                    <div class="dropcaps-circle blue">
                                        <img src="images/LOGOCOMPRAS.png" width="65" alt="" srcset="">
                                    </div>
    
                                    <h4 class="margin-bottom-5">Control de Compras</h4>
    
                                    <p>Te permite realizar compras online en tus tiendas de Estados Unidos y te lo enviamos a México.</p>
    
                                </div>
                                <!--end features-second-->
                            </a>
    
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#controldecarga-img"
                                role="tab" aria-controls="v-pills-profile" aria-selected="false">
    
                                <!--begin features-second-->
                                <div class="features-second">
    
                                    <div class="dropcaps-circle red">
                                        <img src="images/LOGOCDC.png" width="65" alt="" srcset="">
                                    </div>
    
                                    <h4 class="margin-bottom-5">Control de Carga</h4>
    
                                    <p>Nos llevas tu paquete a cualquiera de nuestras agencias y lo hacemos llegar hasta cualquier parte de México.</p>
    
                                </div>
                                <!--end features-second-->
    
                            </a>
    
                            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#rapicarga-img"
                                role="tab" aria-controls="v-pills-messages" aria-selected="false">
    
                                <!--begin features-second-->
                                <div class="features-second">
    
                                    <div class="dropcaps-circle green">
                                        <img src="images/LOGORAPI.png" width="65" alt="" srcset="">
                                    </div>
    
                                    <h4 class="margin-bottom-5">RapiCarga</h4>
    
                                    <p>Si tienes una PyME(s) te ofrecemos un servicio más personalizado y te lo hacemos llegar hasta tu negocio en México.</p>
    
                                </div>
                                <!--end features-second-->
    
                            </a>
    
                        </div>
    
                    </div>
                    <!--end col-md-6-->
    
                    <!--begin col-md-6 -->
                    <div class="col-md-6">
    
                        <div class="tab-content margin-left-20" id="v-pills-tabContent">
    
                            <div class="tab-pane fade show active" id="controldecompras-img" role="tabpanel"
                                aria-labelledby="v-pills-home-tab">
                                
                                <a href="" target="_blank"> <img src="images/CONTROL DE COMPRAS.png" class="width-100 image-shadow top-margins-images" alt="pic"> </a>
                                
                            </div>
    
                            <div class="tab-pane fade" id="controldecarga-img" role="tabpanel"
                                aria-labelledby="v-pills-profile-tab">
                                
                                <a href="https://www.controldecarga.com/" target="_blank"> <img src="images/CONTROL DE CARGA.png" class="width-100 image-shadow top-margins-images" alt="pic"> </a>
                                
                            </div>
    
                            <div class="tab-pane fade" id="rapicarga-img" role="tabpanel"
                                aria-labelledby="v-pills-messages-tab">
                                
                                
                                <a href="https://rapicarga.mx/" target="_blank"> <img src="images/RAPICARGA.png" class="width-100 image-shadow top-margins-images" alt="pic"> </a>
                                
                            </div>
    
                        </div>
    
                    </div>
                    <!--end col-md-6 -->
    
                </div>
                <!--end row-->
    
            </div>
            <!--end container-->
    
        </section>
        <!--end section-grey-->

    <!--begin section-bg-2 -->
    <section class="section-bg-2" id="contact">

        <div class="section-bg-overlay"></div>

        <!--begin container-->
        <div class="container">

            <!--begin row -->
            <div class="row">

                <!--begin col-md-12-->
                <div class="col-md-12 text-center padding-bottom-10">

                    <h2 class="section-title white-text">Contáctanos</h2>

                    <p class="section-subtitle white">¿Tienes alguna duda? Ponte en contácto ahora mismo.</p>

                </div>
                <!--end col-md-12 -->

            </div>
            <!--end row -->

            <!--begin row-->
            <div class="row justify-content-md-center">

                <!--begin col-md-8-->
                <div class="col-md-8 text-center margin-top-10">

                    <!--begin contact-form-wrapper-->
                    <div class="contact-form-wrapper wow bounceIn" data-wow-delay="0.5s"
                        style="visibility: visible; animation-delay: 0.5s; animation-name: bounceIn;">

                        <!--begin form-->
                        <div>

                            <!--begin success message -->
                            <p class="contact_success_box" style="display:none;">Gracias por ponerte en contacto con
                                (Control de Compras), nos podremos en contacto contigo muy pronto.</p>
                            <!--end success message -->

                            <!--begin contact form -->
                            <form id="contact-form" class="row contact-form contact" action="php/contact.php"
                                method="post">

                                <!--begin col-md-6-->
                                <div class="col-md-6">

                                    <input class="contact-input" required="" name="contact_names"
                                        placeholder="Ingresa tu Nombre*" type="text">

                                    <input class="contact-input" required="" name="contact_phone"
                                        placeholder="Ingresa tu Número de Teléfono*" type="text">

                                </div>
                                <!--end col-md-6-->

                                <!--begin col-md-6-->
                                <div class="col-md-6">

                                    <input class="contact-input" required="" name="contact_email"
                                        placeholder="Ingres tu Correo Electrónico*" type="email">

                                    <select class="contact-input" required="" name="contact_ticket">

                                        <option value="">Tipo de Duda</option>

                                        <option value="Solicitar Informes"> Solicitar Informes </option>

                                        <option value="Tengo un Problema"> Tengo un Problema </option>

                                        <option value="Mi paquete llegó dañado"> Mi paquete llegó dañado </option>

                                        <option value="Mi paquete llegó incompleto"> Mi paquete llegó incompleto
                                        </option>

                                        <option value="Otro..."> Otro... </option>

                                    </select>

                                </div>
                                <!--end col-md-6-->

                                <!--begin col-md-12-->
                                <div class="col-md-12">

                                    <textarea class="contact-input" rows="2" cols="20" name="contact_message"
                                        placeholder="Ingresa tu Mensaje..."></textarea>

                                    <input value="Ponerme en Contácto" class="contact-submit" type="submit">

                                </div>
                                <!--end col-md-12-->

                            </form>
                            <!--end contact form -->

                        </div>
                        <!--end form-->

                    </div>
                    <!--end contact-form-wrapper-->

                </div>
                <!--end col-md-8-->

            </div>
            <!--end row-->

        </div>
        <!--end container-->

    </section>
    <!--end section-bg-2 -->


    

    <!--begin footer -->
    <div class="footer">

        <!--begin container -->
        <div class="container">

            <!--begin row -->
            <div class="row">

                <!--begin col-md-5 -->
                <div class="col-md-5">

                    <p> <a href="https://www.controldecarga.com/aviso-de-privacidad" target="_blank">Avíso de
                            Privacidad</a></p>

                </div>
                <!--end col-md-5 -->

                <!--begin col-md-2 -->
                <div class="col-md-2"></div>
                <!--end col-md-2 -->

                <!--begin col-md-5 -->
                <div class="col-md-5">

                    <!--begin footer_social -->
                    <ul class="footer_social">

                        <li>Siguenos en nuestras Redes Sociales:</li>


                        <li><a href="https://www.facebook.com/ControlDeCargaPaqueteria/" target="_blank"><i
                                    class="fab fa-facebook-square"></i></a></li>

                        <li><a href="https://www.instagram.com/control.compras.pbox/" target="_blank"><i
                                    class="fab fa-instagram"></i></a></li>


                    </ul>
                    <!--end footer_social -->

                </div>
                <!--end col-md-5 -->

            </div>
            <!--end row -->

        </div>
        <!--end container -->

    </div>
    <!--end footer -->


    <!-- Load JS here for greater good =============================-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollTo-min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.nav.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/custom.js"></script>
        <script src="js/app.js"></script>


</body>

</html>