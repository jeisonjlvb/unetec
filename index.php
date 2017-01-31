<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>UNETEC | Union de Soluciones Tecnológicas</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body data-spy="scroll" data-target="#navbar" data-offset="0">
    <header id="header" role="banner">
        <div class="container">
            <div id="navbar" class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#main-slider"><i class="icon-home"></i></a></li>
                        <li><a href="#services">Servicios</a></li>
                        <li><a href="#portfolio">Portafolio</a></li>
                        <!--<li><a href="#pricing">Precios</a></li>-->
                        <li><a href="#about-us">Sobre Nosotros</a></li>
                        <li><a href="#contact">Contactanos</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header><!--/#header-->

    <section id="main-slider" class="carousel">
        <div class="carousel-inner">
            <div class="item active">
                <div class="container">
                    <div class="carousel-content">
                        <h1>&nbsp;</h1>
                        <p class="lead">&nbsp;</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <div class="carousel-content">
                        <h1>&nbsp;</h1>
                        <p class="lead">&nbsp;</p>
                    </div>
                </div>
            </div>
        </div><!--
        <a class="prev" href="#main-slider" data-slide="prev"><i class="icon-angle-left"></i></a>
        <a class="next" href="#main-slider" data-slide="next"><i class="icon-angle-right"></i></a>-->
    </section>

    <section id="services">
        <div class="container">
            <div class="box">
                <div class="row">
                    <div class="center gap">
                            
                                <p class="lead"><h2>Servicios</h2></p>
                        </div>
                    <div class="col-md-4 col-sm-6">
                        
                          <div class="center">
                            <img src="images/Iconos/paginasweb.png"></img>
                            <h4>Diseño de Paginas Web</h4>
                            <p>Sitios Web especializados en cumplir sus objetivos.</p>
                        </div>
                    </div><!--/.col-md-4-->
                    <div class="col-md-4 col-sm-6">
                        <div class="center">
                            <img src="images/Iconos/aplicacionesweb.png" ></img>
                            <h4>Aplicaciones Web</h4>
                            <p>Software Web a la medida para optimizar su empresa.</p>
                        </div>
                    </div><!--/.col-md-4-->
                    <div class="col-md-4 col-sm-6">
                        <div class="center">
                            <img src="images/Iconos/camara_seguridad.png" ></img>
                            <h4>Circuito Cerrado</h4>
                            <p>La mejor opcion para su seguridad.</p>
                        </div>
                    </div><!--/.col-md-4-->
                    <div class="col-md-4 col-md-offset-4">
                        <div class="center">
                            <img src="images/Iconos/servicio_tecnico.png"></img>
                            <h4>Soporte Técnico</h4>
                            <p>Reparación de Equipos Tecnológicos, instalación de puntos de red y muchas cosas más.</p>
                        </div>
                    </div><!--/.col-md-4-->
                </div><!--/.row-->
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#services-->

    <section id="portfolio">
        <div class="container">
            <div class="box">
                <div class="center gap">
                    <h2>Portafolio</h2>
                    <p class="lead">Proyectos realizados en diferentes lenguajes y plataformas,<br> los cuales estan listos para ser adaptados a sus necesidades.</p>
                </div><!--/.center-->
                <ul class="portfolio-filter">
                    <li><a class="btn btn-primary active" href="#" data-filter="*">Todos</a></li>
                    <li><a class="btn btn-primary active" href="#" data-filter=".app">Aplicaciones</a></li>
                    <li><a class="btn btn-primary" href="#" data-filter=".web">Desarrollo Web</a></li>
                    <li><a class="btn btn-primary" href="#" data-filter=".supp">Soporte Técnico</a></li>
                    <li><a class="btn btn-primary" href="#" data-filter=".cam">Circuito Cerrado</a></li>
                </ul><!--/#portfolio-filter-->
                <ul class="portfolio-items col-4">
                    <li class="portfolio-item app">
                        <div class="item-inner">
                            <div class="portfolio-image">
                                <img src="images/portfolio/aplicacion_web.png" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-danger" title="Imagen de muestra de aplicacion web" href="images/portfolio/aplicacion_web.png"><i class="icon-eye-open"></i></a>
                                </div>
                            </div>
                            <h5>Aplicación Web</h5>
                        </div>
                    </li><!--/.portfolio-item-->
                    <li class="portfolio-item web app">
                        <div class="item-inner">
                            <div class="portfolio-image">
                                <img src="images/portfolio/laravel.png" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-danger" title="Imagen de muestra de sistema en Laravel" href="images/portfolio/laravel.png"><i class="icon-eye-open"></i></a>
                                </div>
                            </div>
                            <h5>Sistema en Laravel</h5>
                        </div>
                    </li><!--/.portfolio-item-->
                    <li class="portfolio-item web app">
                        <div class="item-inner">
                            <div class="portfolio-image">
                                <img src="images/portfolio/bootstrap.jpg" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-danger" title="Sistema en Wordpress con Bootstrap" href="images/portfolio/bootstrap.jpg"><i class="icon-eye-open"></i></a>
                                </div>
                            </div>
                            <h5>Wordpress con Bootstrap</h5>
                        </div>
                    </li><!--/.portfolio-item-->
                    <li class="portfolio-item supp cam">
                        <div class="item-inner">
                            <div class="portfolio-image">
                                <img src="images/portfolio/red-cableada.jpg" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-danger" title="Instalacion de puntos de red y cableado" href="images/portfolio/red-cableada.jpg"><i class="icon-eye-open"></i></a>
                                </div>
                            </div>
                            <h5>Redes y Cableados</h5>
                        </div>
                    </li><!--/.portfolio-item-->
                    <li class="portfolio-item web">
                        <div class="item-inner">
                            <div class="portfolio-image">
                                <img src="images/portfolio/sistema_php.jpg" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-danger" title="Sistemas listos para ser utilizados" href="images/portfolio/sistema_php.jpg"><i class="icon-eye-open"></i></a>
                                </div>
                            </div>
                            <h5>Sistemas en PHP</h5>
                        </div>
                    </li><!--/.portfolio-item-->
                    <li class="portfolio-item supp">
                        <div class="item-inner">
                            <div class="portfolio-image">
                                <img src="images/portfolio/Servicios_Soporte_Tecnico.jpg" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-danger" title="Reparacion de equipos tecnologicos" href="images/portfolio/Servicios_Soporte_Tecnico.jpg"><i class="icon-eye-open"></i></a>
                                </div>
                            </div>
                            <h5>Soporte Técnico</h5>
                        </div>
                    </li><!--/.portfolio-item-->
                    <li class="portfolio-item supp">
                        <div class="item-inner">
                            <div class="portfolio-image">
                                <img src="images/portfolio/linux-windows.jpg" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-danger" title="Sistemas operativos (Linux y Windows con licencia oficial)" href="images/portfolio/linux-windows.jpg"><i class="icon-eye-open"></i></a>
                                </div>
                            </div>
                            <h5>Sistemas Operativos</h5>
                        </div>
                    </li><!--/.portfolio-item-->
                    <li class="portfolio-item cam">
                        <div class="item-inner">
                            <div class="portfolio-image">
                                <img src="images/portfolio/circuito-cerrado.jpg" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-danger" title="Camaras de Seguridad con vista en la web" href="images/portfolio/circuito-cerrado.jpg"><i class="icon-eye-open"></i></a>
                                </div>
                            </div>
                            <h5>Circuito Cerrado</h5>
                        </div>
                    </li><!--/.portfolio-item-->
                </ul>
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#portfolio-->

    <!-- SECCION DE PRECIOS QUE PUEDE SER IMPLEMENTADO EN OTRO MOMENTO
    
    <section id="pricing">
        <div class="container">
            <div class="box">
                <div class="center">
                    <h2>See our Pricings</h2>
                    <p class="lead">Pellentesque habitant morbi tristique senectus et netus et <br>malesuada fames ac turpis egestas.</p>
                </div>
                <div class="big-gap"></div>
                <div id="pricing-table" class="row">
                    <div class="col-sm-4">
                        <ul class="plan">
                            <li class="plan-name">Basic</li>
                            <li class="plan-price">$29</li>
                            <li>5GB Storage</li>
                            <li>1GB RAM</li>
                            <li>400GB Bandwidth</li>
                            <li>10 Email Address</li>
                            <li>Forum Support</li>
                            <li class="plan-action"><a href="#" class="btn btn-primary btn-lg">Signup</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4">
                        <ul class="plan featured">
                            <li class="plan-name">Standard</li>
                            <li class="plan-price">$49</li>
                            <li>10GB Storage</li>
                            <li>2GB RAM</li>
                            <li>1TB Bandwidth</li>
                            <li>100 Email Address</li>
                            <li>Forum Support</li>
                            <li class="plan-action"><a href="#" class="btn btn-primary btn-lg">Signup</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4">
                        <ul class="plan">
                            <li class="plan-name">Advanced</li>
                            <li class="plan-price">$199</li>
                            <li>30GB Storage</li>
                            <li>5GB RAM</li>
                            <li>5TB Bandwidth</li>
                            <li>1000 Email Address</li>
                            <li>Forum Support</li>
                            <li class="plan-action"><a href="#" class="btn btn-primary btn-lg">Signup</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>-->

    <section id="about-us">
        <div class="container">
            <div class="box">
                <div class="center">
                    <h2>Equipo de Trabajo</h2>
                    <p class="lead">Personas encargadas de realizar los proyectos orientados a empresas y microempresas, locales comerciales, trabajadores independientes o público en general.</p>
                </div>
                <div class="gap"></div>
                <div id="team-scroller" class="carousel scale">
                    <div class="carousel-inner">
                        <div class="">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="member">
                                        <p><img class="img-responsive img-thumbnail img-circle" src="images/team2.jpg" alt="" ></p>
                                        <h3>Ing. Jonas Siewdass<small class="designation">Desarrollador Integral.</small></h3>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="member">
                                        <p><img class="img-responsive img-thumbnail img-circle" src="images/team2.jpg" alt="" ></p>
                                        <h3>Lic. Jeison Villalobos<small class="designation">Desarrollador de Aplicaciones - Técnico Especialista.</small></h3>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="member">
                                        <p><img class="img-responsive img-thumbnail img-circle" src="images/team3.jpg" alt="" ></p>
                                        <h3>Lic. Kenry Suárez<small class="designation">Desarrollador Web - Técnico Especialista.</small></h3>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="member">
                                        <p><img class="img-responsive img-thumbnail img-circle" src="images/team2.jpg" alt="" ></p>
                                        <h3>Ing. German Reyes<small class="designation">Desarrollador Integral.</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                                
                    </div>
                    <!--<a class="left-arrow" href="#team-scroller" data-slide="prev">
                        <i class="icon-angle-left icon-4x"></i>
                    </a>
                    <a class="right-arrow" href="#team-scroller" data-slide="next">
                        <i class="icon-angle-right icon-4x"></i>
                    </a>-->
                </div><!--/.carousel-->
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#about-us-->
<?php
      if(isset($_POST['name'])){

    $array = array("jeisonjlvb@gmail.com","germannrrd@gmail.com","jsiewdass@gmail.com","kenry108014@gmail.com","support@unetec.com.ve","webmaster@unetec.com.ve");
    //$array = array("jeisonjlvb@gmail.com","support@unetec.com.ve");
          
    $name = @trim(stripslashes($_POST['name']));
    $phone = @trim(stripslashes($_POST['phone']));
    $email = @trim(stripslashes($_POST['email']));
    $subject = @trim(stripslashes($_POST['subject']));
    $message = @trim(stripslashes($_POST['message']));

    $email_from = $email;
        foreach ($array as $email_to) {
    $email_to = $email_to;

   $body = 'Nombre: ' . $name . "\n\n" . 'Telefono: ' . $phone . "\n\n" . 'Mensaje: ' . $message;

    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');
        }
    //echo json_encode($status);
    echo '<script language="javascript">alert("Mensaje enviado, muchas gracias.");
window.location.href = "http://www.unetec.com.ve";</script>';
}

?>
    <section id="contact">
        <div class="container">
            <div class="box last">
                <div class="row">
                    <div class="col-sm-6">
                        <h1>Formulario de Contacto</h1>
                        <p>Por favor llene todos los campos con datos reales para contactarle.</p>
                        <div class="status alert alert-success" style="display: none"></div>
                        <form id="main-contact-form" class="contact-form" name="contact-form" method="POST" action="index.php" role="form">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" required="required" placeholder="Nombre" name="name" id="name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Numero Telefonico" name="phone" id="phone">
                                    </div>
                                </div>
                            </div>
                                <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control" required="required" placeholder="Ingrese su Correo" name="email" id="email">
                                    </div>
                                </div>
                            
                            
                                 <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="text" name="subject" id="subject" required="required" class="form-control" rows="8" placeholder="Asunto o Requerimiento" >
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Descripcion del requerimiento" name="message"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-danger btn-lg">Enviar Mensaje</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div><!--/.col-sm-6-->
                    <div class="col-sm-6">
                        <h1>Nuestra Ubicación</h1>
                        <div class="row">
                            <div class="col-md-6">
                                <address>
                                    <strong>Caracas - Venezuela.</strong><br>
                                    Av. México, Cerca de la estación<br>
                                    del metro de Parque Carabobo.<br>
                                    <!--<abbr title="Phone">Tlfno:</abbr> (123) 456-7890-->
                                </address>
                            </div>
                            <div class="col-md-6">
                                <address>
                                    <strong>Caracas - Venezuela.</strong><br>
                                    Av. San Martin, Cerca de la estación<br>
                                    del metro de Artigas.<br>
                                    <!--<abbr title="Phone">P:</abbr> (123) 456-7890-->
                                </address>
                            </div>
                        </div>
                        <h1>Conectate con nosotros</h1>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="social">
                                    <li><a href="https://www.facebook.com/unetecsoluciones/?fref=ts" target="_blank"><i class="icon-facebook icon-social"></i> Facebook</a></li>
                                    <li><a href="https://www.instagram.com/unetecsoluciones/?hl=es" target="_blank"><i class="icon-instagram icon-social"></i> Instagram</a></li>
                                    <!--<li><a href="#"><i class="icon-pinterest icon-social"></i> Pinterest</a></li>-->
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="social">
                                    <li><a href="http://twitter.com/UnetecSolucion" target="_blank"><i class="icon-twitter icon-social"></i> Twitter</a></li>
                                    <li><a href="https://ve.linkedin.com/in/unetec-soluciones-281082136" target="_blank"><i class="icon-linkedin icon-social"></i> Linkedin</a></li>
                                    <!--<li><a href="#"><i class="icon-youtube icon-social"></i> Youtube</a></li>-->
                                </ul>
                            </div>
                        </div>
                    </div><!--/.col-sm-6-->
                </div><!--/.row-->
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#contact-->

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2017 <a target="_blank" href="http://www.unetec.com.ve/">Unetec Soluciones</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <!--<img class="pull-right" src="images/shapebootstrap.png" alt="ShapeBootstrap" title="ShapeBootstrap">-->
                </div>
            </div>
        </div>
    </footer><!--/#footer-->


    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
