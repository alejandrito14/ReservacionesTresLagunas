
<?php 
session_start();
  if (isset($_SESSION['idusuario']) ) 
  {?>
    <!DOCTYPE  html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>Tres lagunas | Principal</title>

            <!-- CSS -->
            <link rel="stylesheet" href="../Resource/css/style_1.css" type="text/css" media="screen" />
            <link rel="stylesheet" href="../Resource/css/social-icons.css" type="text/css" media="screen" />
            <!--[if IE 8]>
                    <link rel="stylesheet" type="text/css" media="screen" href="css/ie8-hacks.css" />
            <![endif]-->
            <!-- ENDS CSS -->	

            <!-- GOOGLE FONTS 
            <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>-->

            <!-- JS -->
                    <script src="../Resource/js/jquery.min.js"></script>
       <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
        crossorigin="anonymous"></script>
                    <script src="../Resource/js/turistasdatos.js" type="text/javascript"></script>

            <script type="text/javascript" src="../Resource/js/jquery-1.5.1.min.js"></script>
            <script type="text/javascript" src="../Resource/js/jquery-ui-1.8.13.custom.min.js"></script>
            <script type="text/javascript" src="../Resource/js/easing.js"></script>
            <script type="text/javascript" src="../Resource/js/jquery.scrollTo-1.4.2-min.js"></script>
            <script type="text/javascript" src="../Resource/js/jquery.cycle.all.js"></script>
            <script type="text/javascript" src="../Resource/js/menu_pegajoso.js"></script>
            <script type="text/javascript" src="../Resource/js/custom.js"></script>

            <!-- Isotope -->
            <script src="../Resources/js/jquery.isotope.min.js"></script>

            <!--[if IE]>
                    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
            <![endif]-->

            <!--[if IE 6]>
                    <script type="text/javascript" src="js/DD_belatedPNG.js"></script>
                    <script>
                    /* EXAMPLE */
                    //DD_belatedPNG.fix('*');
            </script>
            <![endif]-->
            <!-- ENDS JS -->


            <!-- Nivo slider -->
            <link rel="stylesheet" href="../Resource/css/nivo-slider.css" type="text/css" media="screen" />
            <script src="../Resource/js/nivo-slider/jquery.nivo.slider.js" type="text/javascript"></script>
            <!-- ENDS Nivo slider -->

            <!-- tabs -->
            <link rel="stylesheet" href="../Resource/css/tabs.css" type="text/css" media="screen" />
            <script type="text/javascript" src="../Resource/js/tabs.js"></script>
            <!-- ENDS tabs -->

            <!-- prettyPhoto -->
            <script type="text/javascript" src="../Resource/js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
            <link rel="stylesheet" href="../Resource/js/prettyPhoto/css/prettyPhoto.css" type="text/css" media="screen" />
            <!-- ENDS prettyPhoto -->

            <!-- superfish -->
            <link rel="stylesheet" media="screen" href="../Resource/css/superfish.css" /> 
            <link rel="stylesheet" media="screen" href="../Resource/css/superfish-left.css" /> 
            <script type="text/javascript" src="../Resource/js/superfish-1.4.8/js/hoverIntent.js"></script>
            <script type="text/javascript" src="../Resource/js/superfish-1.4.8/js/superfish.js"></script>
            <script type="text/javascript" src="../Resource/js/superfish-1.4.8/js/supersubs.js"></script>
            <!-- ENDS superfish -->

            <!-- poshytip -->
            <link rel="stylesheet" href="../Resource/js/poshytip-1.0/src/tip-twitter/tip-twitter.css" type="text/css" />
            <link rel="stylesheet" href="../Resource/js/poshytip-1.0/src/tip-yellowsimple/tip-yellowsimple.css" type="text/css" />
            <script type="text/javascript" src="../Resource/js/poshytip-1.0/src/jquery.poshytip.min.js"></script>
            <!-- ENDS poshytip -->

            <!-- Tweet -->
            <link rel="stylesheet" href="../Resource/css/jquery.tweet.css" media="all"  type="text/css"/> 
            <script src="../Resource/js/tweet/jquery.tweet.js" type="text/javascript"></script> 
            <!-- ENDS Tweet -->

            <!-- Fancybox -->
            <link rel="stylesheet" href="../Resource/js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />

            <script type="text/javascript" src="../Resource/js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
            <!-- ENDS Fancybox -->

            <!-- Custom Theme Style -->
            <link href="../Resource/build/css/custom3.css" rel="stylesheet">

        </head>

        <body class="home" >

            <div id="turistas"> <?php echo $_SESSION['idusuario']; ?>  </div>
            <!-- HEADER -->
            <div id="header">
                <!-- wrapper-header -->
                <div class="wrapper">
                    <a href="index.html"><img id="logo" src="../Resource/img/logo.png" alt="Nova" /></a>

                </div>
                <!-- ENDS wrapper-header -->					
            </div>
            <!-- ENDS HEADER -->

            <!-- Menu -->
            <div id="menu">



                <!-- ENDS menu-holder -->
                <div id="menu-holder">
                    <!-- wrapper-menu -->
                    <div class="wrapper">
                        <!-- Navigation -->
                        <ul id="nav" class="sf-menu">
                            <li class="current-menu-item"><a href="PrincipalTurista.php">Home<span class="subheader">Bienvenido</span></a></li>
                            <li><a href="">Servicios<span class="subheader">Selecciona un servicio</span></a>
                                <ul>

                                    <li><a href="Cabanas_panel.php"><span>Cabañas</span></a></li>
                                    <li><a href="Paquetes_panel.php"><span>Paquetes</span></a></li>
                                    <li><a href="Actividades_panel.php"><span> Actividades</span></a></li>

                                </ul>
                            </li>

                            <li><a href="">Reservaciones<span class="subheader">Reserva aqui</span></a>
                                <ul>
                                    <li><a href="turistaReservacion.php"><span> Reserva aqui</span></a></li>
                                    <li><a href=""><span> Tus reservaciones </span></a></li>

                                </ul>
                            </li>

                        </ul>


                        <!-- ends top -->
                        <!-- Navigation -->
                    </div>
                    <!-- wrapper-menu -->
                    <!-- top -->

                    <div class="wrapper2 navbar-right ">

                        <!-- user -->
                        <ul id="nav2" class="sf-menu ">

                            <li><a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><img src="../Resource/img/3.jpg" alt="">Turista<span class="subheader"><div id="datos"></div></span></a>

                                <ul>

                                    <li><a href=""><span>mensages</span></a></li>
                                    <li><a href=""><span>cerrar sesion</span></a></li>

                                </ul>
                            </li>



                        </ul>



                    </div>
                </div>
                <!-- ENDS menu-holder -->
            </div>
            <!-- ENDS Menu -->




            <!-- Slider -->
            <div id="slider-block">
                <div id="slider-holder">
                    <div id="slider">
                        <a href="http://www.luiszuno.com"><img src="../Resource/images/01.jpg" title="Visita nuestra pagina!!" alt="" /></a>
                        <img src="../Resource/images/02.jpg" title="Ven y conoce nuestras instalaciones!!" alt="" /></a>
                        <img src="../Resource/images/03.jpg" title="Podras disfrutar de varios servicios " alt="" /></a>

                    </div>
                </div>
            </div>
            <!-- ENDS Slider -->

            <!-- MAIN -->
            <div id="main">
                <!-- wrapper-main -->
                <div class="wrapper">

                    <!-- headline -->

                    <!-- ENDS headline -->

                    <!-- content -->
                    <div id="content">

                        <!-- TABS -->
                        <!-- the tabs -->
                        <ul class="tabs">
                            <li><a href="#"><span>Información</span></a></li>

                        </ul>

                        <!-- tab "panes" -->
                        <div class="panes">

                            <!-- Posts -->

                            <!-- ENDS posts -->

                            <!-- Information  -->
                            <div>
                                <div class="plain-text">
                                    <h6>Centro ecoturistico Tres lagunas</h6> 
                                    <p>En el Centro Ecoturístico Tres Lagunas se realizan caminatas en senderos por la Selva Lacandona, paseo en cayucos a través de las lagunas, recorridos en bicicleta, observación nocturna de cocodrilos y visitas guiadas a Bonampak. </p>
                                    <p>Se localiza en las Montañas del Oriente, Se puede llegar desde Palenque, en coche, por la carretera fronteriza del sur. Se necesitan recorrer 133 kms. para llegar al centro ecoturístico. También hay autobuses y taxis que salen de Palenque y van a Benemérito o San Javier por la carretera fronteriza del Sur, y que les pueden llevar en 2 h 30 – 3h.</p>

                                </div>
                            </div>
                            <!-- ENDS Information -->

                            <!-- Posts -->

                            <!-- ENDS posts -->


                        </div>
                        <!-- ENDS TABS -->



                    </div>
                    <!-- ENDS content -->
                </div>
                <!-- ENDS wrapper-main -->
            </div>
            <!-- ENDS MAIN -->


            <!-- FOOTER -->
            <div id="footer">
                <!-- wrapper-footer -->
                <div class="wrapper">
                    <!-- footer-cols -->
                    <ul id="footer-cols">
                        <li class="col">
                            <h6>Pages</h6>
                            <ul>
                                <li class="page_item"><a href="PrincipalTurista.php">Home</a></li>
                                <li class="page_item"><a href="">Features</a></li>
                                <li class="page_item"><a href="">Blog</a></li>
                                <li class="page_item"><a href="">Portfolio</a></li>
                                <li class="page_item"><a href="">Gallery</a></li>
                                <li class="page_item"><a href="">Contact</a></li>
                            </ul>
                        </li>


                        <li class="col">
                            <h6>About the theme</h6>

                        </li>

                    </ul>
                    <!-- ENDS footer-cols -->
                </div>
                <!-- ENDS wrapper-footer -->
            </div>
            <!-- ENDS FOOTER -->


            <!-- Bottom -->
            <div id="bottom">
                <!-- wrapper-bottom -->
                <div class="wrapper">
                    <div id="bottom-text">2011 Tres lagunas all rights reserved. <a href="http://www.luiszuno.com"> link.com</a> </div>
                    <!-- Social -->
                    <ul class="social ">
                        <li><a href="http://www.facebook.com" class="poshytip  facebook" title="Become a fan"></a></li>
                        <li><a href="http://www.twitter.com" class="poshytip twitter" title="Follow our tweets"></a></li>
                        <li><a href="http://www.dribbble.com" class="poshytip dribbble" title="View our work"></a></li>
                        <li><a href="http://www.addthis.com" class="poshytip addthis" title="Tell everybody"></a></li>
                        <li><a href="http://www.vimeo.com" class="poshytip vimeo" title="View our videos"></a></li>
                        <li><a href="http://www.youtube.com" class="poshytip youtube" title="View our videos"></a></li>
                    </ul>
                    <!-- ENDS Social -->
                    <div id="to-top" class="poshytip" title="To top"></div>
                </div>
                <!-- ENDS wrapper-bottom -->
            </div>
            <!-- ENDS Bottom -->

        </body>

    </html>
 


<?php

  }
  else
  {
    header("location:login-turista.php");
  }
 ?>

